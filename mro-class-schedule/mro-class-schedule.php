<?php
/*
Plugin Name: MRo Class Schedule
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up class custom post types and schedule for Yoga Mandir.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
Text Domain: mro-class-schedule
Domain Path: /languages
*/


//Textdomain
function mro_class_schedule_load_plugin_textdomain() {
    load_plugin_textdomain( 'mro-class-schedule', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'mro_class_schedule_load_plugin_textdomain' );


//Include files
foreach ( glob( plugin_dir_path( __FILE__ ) . "inc/*.php" ) as $file ) {
    include_once $file;
}


// Classes post type
add_filter('piklist_post_types', 'mro_class_schedule_post_types');
function mro_class_schedule_post_types($post_types) {

	$labels = array(
	  'name' => _x( 'Classes', 'post type general name', 'mro-events' ),
	  'singular_name' => _x( 'Class', 'post type singular name', 'mro-events' ),
	  'menu_name' => _x( 'Classes', 'admin menu', 'mro-events' ),
	  'name_admin_bar' => _x( 'Classes', 'add new on admin bar', 'mro-events' ),
	  'add_new' => _x( 'Add New', 'book', 'mro-events' ),
	  'add_new_item' => __( 'Add New Class', 'mro-events' ),
	  'new_item' => __( 'New Class', 'mro-events' ),
	  'edit_item' => __( 'Edit Class', 'mro-events' ),
	  'view_item' => __( 'View Class', 'mro-events' ),
	  'all_items' => __( 'All Classes', 'mro-events' ),
	  'search_items' => __( 'Search Classes', 'mro-events' ),
	  'parent_item_colon' => __( 'Parent Classes:', 'mro-events' ),
	  'not_found' => __( 'No Classes found.', 'mro-events' ),
	  'not_found_in_trash' => __( 'No Classes found in Trash.', 'mro-events' ),
	);

	$post_types['mro-class'] = array(
	  'labels' => $labels,
	  // 'labels' => piklist('post_type_labels', 'Clase'),
	  'title' => __('Enter a new Class', 'mro-class-schedule'),
	  'menu_position' => 20,
	  'menu_icon' => 'dashicons-clock',
	  'page_icon' => 'dashicons-clock',
	  'supports' => array(
	    'title',
	    // 'thumbnail',
	    // 'editor',
	    // 'excerpt',
	  ),
	  'public' => true,
	  'admin_body_class' => array(
	    'mro-class',
	  ),
	  'has_archive' => false,
	  'rewrite' => array(
	    'slug' => 'clase',
	  ),
	  'capability_type' => 'post',
	  // 'edit_columns' => array(
	  //   'title' => __('Demo'),
	  //   'author' => __('Assigned to'),
	  // ),
	  'hide_meta_box' => array(
	    'author',
	  ),
	);

	return $post_types;
}



add_filter('piklist_taxonomies', 'mro_class_schedule_tax');
function mro_class_schedule_tax($taxonomies) {
   $taxonomies[] = array(
      'post_type' => 'mro-class',
      'name' => 'mro_class_level',
      'show_admin_column' => true,
      'configuration' => array(
        'hierarchical' => true,
        'labels' => piklist('taxonomy_labels', 'Level'),
        'hide_meta_box' => false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array(
          'slug' => 'nivel',
        ),
      ),
    );
  return $taxonomies;
}



add_filter('piklist_admin_pages', 'mro_schedule_admin_pages');
function mro_schedule_admin_pages($pages) {

	//Class Schedule Tabs settings
  $pages[] = array(
    'page_title' => __('Class Schedule Tabs', 'mro-class-schedule'),
    'menu_title' => __('Class Schedule Tabs', 'mro-class-schedule'),
    'sub_menu' => 'edit.php?post_type=mro-class',
    'capability' => 'manage_options',
    'menu_slug' => 'mro_schedule_tabs',
    'setting' => 'mro_schedule_tabs',
    'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-icon.png',
    'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png',
    // 'single_line' => true,
    'default_tab' => 'Basic',
    // 'layout' => 'meta-boxes', // NOTE: Uncomment this to use the meta box layout on this settings page!
    'save_text' => __('Save Schedule Settings', 'mro-class-schedule'),
  );

	//Prices settings
  $pages[] = array(
    'page_title' => __('Prices', 'mro-class-schedule'),
    'menu_title' => __('Prices', 'mro-class-schedule'),
    'sub_menu' => 'edit.php?post_type=mro-class',
    'capability' => 'manage_options',
    'menu_slug' => 'mro_class_prices',
    'setting' => 'mro_class_schedule_prices',
    'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-icon.png',
    'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png',
    // 'single_line' => true,
    'default_tab' => 'Basic',
    // 'layout' => 'meta-boxes', // NOTE: Uncomment this to use the meta box layout on this settings page!
    'save_text' => __('Save Prices', 'mro-class-schedule'),
  );

  return $pages;
}


// Build teachers array
function mro_class_schedule_get_teachers($terms) {
  $teachers = get_posts(
    array(
      'post_type' => 'mro-team',
      'orderby' => 'title',
      'order' => 'ASC',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'mro_team_tax',
          'field'    => 'slug',
          'terms'    => $terms,
        ),
      ),
    ), 'objects');

	$teachers = piklist($teachers, array('ID', 'post_title'));
	$teachers = mro_class_schedule_build_choices($teachers,true);

  return $teachers;
}


// Return an array formatted for select field
function mro_class_schedule_build_choices($choices,$manual_option=false) {
	foreach ($choices as $value => $choice):
		if ($choice === ''):
			$choices[$value] = sprintf(__('#%d (no title)'), $value);
		endif;
	endforeach;

	$choices = array_replace(array('' => '&mdash; Select &mdash;'), $choices);

	if ($manual_option==true) :

		$choices['other'] = __('Other (enter manually)', 'piklist-demo');
	endif;

	return $choices;
}


