<?php
/*
Plugin Name: MRo Team
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up custom post types for Yoga Mandir.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
Text Domain: mro-team
Domain Path: /languages
*/

//Textdomain
function mro_team_load_plugin_textdomain() {
    load_plugin_textdomain( 'mro-events', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'mro_team_load_plugin_textdomain' );

// Set up post type
add_filter('piklist_post_types', 'mro_team_post_types');
function mro_team_post_types($post_types) {

  $labels = array(
    'name' => _x( 'Teachers', 'post type general name', 'mro-events' ),
    'singular_name' => _x( 'Teacher', 'post type singular name', 'mro-events' ),
    'menu_name' => _x( 'Teachers', 'admin menu', 'mro-events' ),
    'name_admin_bar' => _x( 'Teachers', 'add new on admin bar', 'mro-events' ),
    'add_new' => _x( 'Add New', 'book', 'mro-events' ),
    'add_new_item' => __( 'Add New Teacher', 'mro-events' ),
    'new_item' => __( 'New Teacher', 'mro-events' ),
    'edit_item' => __( 'Edit Teacher', 'mro-events' ),
    'view_item' => __( 'View Teacher', 'mro-events' ),
    'all_items' => __( 'All Teachers', 'mro-events' ),
    'search_items' => __( 'Search Teachers', 'mro-events' ),
    'parent_item_colon' => __( 'Parent Teachers:', 'mro-events' ),
    'not_found' => __( 'No Teachers found.', 'mro-events' ),
    'not_found_in_trash' => __( 'No Teachers found in Trash.', 'mro-events' ),
  );

  $post_types['mro-team'] = array(
    'labels' => $labels,
    // 'labels' => piklist('post_type_labels', 'Teachers'),
    'title' => __('Enter a new Teacher', 'mro-team'),
    'menu_position' => 20,
    'menu_icon' => 'dashicons-admin-users',
    'page_icon' => 'dashicons-admin-users',
    'supports' => array(
      'title',
      // ,'editor'
      // ,'excerpt'
    ),
    'public' => true,
    'admin_body_class' => array(
      'mro-team',
    ),
    'has_archive' => false,
    'rewrite' => array(
      'slug' => 'equipo',
    ),
    'capability_type' => 'post',
    // ,'edit_columns' => array(
    //   'title' => __('Demo')
    //   ,'author' => __('Assigned to')
    // ),
    'hide_meta_box' => array(
      'author'
    ),
  );

  return $post_types;
}


add_filter('piklist_taxonomies', 'mro_team_tax');
function mro_team_tax($taxonomies) {
   $taxonomies[] = array(
      'post_type' => 'mro-team',
      'name' => 'mro_team_tax',
      'show_admin_column' => true,
      'configuration' => array(
        'hierarchical' => true,
        'labels' => piklist('taxonomy_labels', 'Tag'),
        'hide_meta_box' => false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 
          'slug' => 'tipo',
        ),
      ),
    );
  return $taxonomies;
}