<?php
/*
Plugin Name: MRo Events
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up custom post types for Yoga Mandir.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
Text Domain: mro-events
Domain Path: /languages
*/


//Textdomain
function mro_events_load_plugin_textdomain() {
    load_plugin_textdomain( 'mro-events', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'mro_events_load_plugin_textdomain' );


// Events post type
add_filter('piklist_post_types', 'mro_events_post_types');
function mro_events_post_types($post_types) {

	$labels = array(
	  'name' => _x( 'Events', 'post type general name', 'mro-events' ),
	  'singular_name' => _x( 'Event', 'post type singular name', 'mro-events' ),
	  'menu_name' => _x( 'Events', 'admin menu', 'mro-events' ),
	  'name_admin_bar' => _x( 'Events', 'add new on admin bar', 'mro-events' ),
	  'add_new' => _x( 'Add New', 'book', 'mro-events' ),
	  'add_new_item' => __( 'Add New Event', 'mro-events' ),
	  'new_item' => __( 'New Event', 'mro-events' ),
	  'edit_item' => __( 'Edit Event', 'mro-events' ),
	  'view_item' => __( 'View Event', 'mro-events' ),
	  'all_items' => __( 'All Events', 'mro-events' ),
	  'search_items' => __( 'Search Events', 'mro-events' ),
	  'parent_item_colon' => __( 'Parent Events:', 'mro-events' ),
	  'not_found' => __( 'No Events found.', 'mro-events' ),
	  'not_found_in_trash' => __( 'No Events found in Trash.', 'mro-events' ),
	);

	$post_types['mro-event'] = array(
	  'labels' => $labels,
	  'title' => __('Enter a new Event', 'mro-events'),
	  'menu_position' => 20,
	  'menu_icon' => 'dashicons-calendar',
	  'page_icon' => 'dashicons-calendar',
	  'supports' => array(
	    'title',
	    'thumbnail',
	    // 'editor',
	    // 'excerpt',
	  ),
	  'public' => true,
	  'admin_body_class' => array(
	    'mro-event',
	  ),
	  'has_archive' => false,
	  'rewrite' => array(
	    'slug' => 'evento',
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