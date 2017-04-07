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
    load_plugin_textdomain( 'mro-events', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'mro_class_schedule_load_plugin_textdomain' );


// Events post type
add_filter('piklist_post_types', 'mro_class_schedule_post_types');
function mro_class_schedule_post_types($post_types) {

	// $labels = array(
	//   'name' => _x( 'Events', 'post type general name', 'mro-events' ),
	//   'singular_name' => _x( 'Event', 'post type singular name', 'mro-events' ),
	//   'menu_name' => _x( 'Events', 'admin menu', 'mro-events' ),
	//   'name_admin_bar' => _x( 'Events', 'add new on admin bar', 'mro-events' ),
	//   'add_new' => _x( 'Add New', 'book', 'mro-events' ),
	//   'add_new_item' => __( 'Add New Event', 'mro-events' ),
	//   'new_item' => __( 'New Event', 'mro-events' ),
	//   'edit_item' => __( 'Edit Event', 'mro-events' ),
	//   'view_item' => __( 'View Event', 'mro-events' ),
	//   'all_items' => __( 'All Events', 'mro-events' ),
	//   'search_items' => __( 'Search Events', 'mro-events' ),
	//   'parent_item_colon' => __( 'Parent Events:', 'mro-events' ),
	//   'not_found' => __( 'No Events found.', 'mro-events' ),
	//   'not_found_in_trash' => __( 'No Events found in Trash.', 'mro-events' ),
	// );

	$post_types['mro-class'] = array(
	  // 'labels' => $labels,
	  'labels' => piklist('post_type_labels', 'Clase'),
	  'title' => __('Enter a new Class', 'mro-events'),
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