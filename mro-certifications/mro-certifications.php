<?php
/*
Plugin Name: MRo Certifications
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up custom post types for Yoga Mandir.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
Text Domain: mro-cert
Domain Path: /languages
*/


//Textdomain
function mro_cert_load_plugin_textdomain() {
    load_plugin_textdomain( 'mro-cert', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'mro_cert_load_plugin_textdomain' );


// Certifications post type
add_filter('piklist_post_types', 'mro_cert_post_types');
function mro_cert_post_types($post_types) {

	$labels = array(
	  'name' => _x( 'Certifications', 'post type general name', 'mro-cert' ),
	  'singular_name' => _x( 'Certification', 'post type singular name', 'mro-cert' ),
	  'menu_name' => _x( 'Certifications', 'admin menu', 'mro-cert' ),
	  'name_admin_bar' => _x( 'Certifications', 'add new on admin bar', 'mro-cert' ),
	  'add_new' => _x( 'Add New', 'book', 'mro-cert' ),
	  'add_new_item' => __( 'Add New Certification', 'mro-cert' ),
	  'new_item' => __( 'New Certification', 'mro-cert' ),
	  'edit_item' => __( 'Edit Certification', 'mro-cert' ),
	  'view_item' => __( 'View Certification', 'mro-cert' ),
	  'all_items' => __( 'All Certifications', 'mro-cert' ),
	  'search_items' => __( 'Search Certifications', 'mro-cert' ),
	  'parent_item_colon' => __( 'Parent Certifications:', 'mro-cert' ),
	  'not_found' => __( 'No Certifications found.', 'mro-cert' ),
	  'not_found_in_trash' => __( 'No Certifications found in Trash.', 'mro-cert' ),
	);

	$post_types['mro-certification'] = array(
	  'labels' => $labels,
	  // 'labels' => piklist('post_type_labels', 'Certification'),
	  'title' => __('Enter a new Certification', 'mro-cert'),
	  'menu_position' => 21,
	  'menu_icon' => 'dashicons-welcome-learn-more',
	  'page_icon' => 'dashicons-welcome-learn-more',
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
	    'slug' => 'certificaciones',
	  ),
	  'capability_type' => 'post',

	  'hide_meta_box' => array(
	    'author',
	  ),
	);

	return $post_types;
}