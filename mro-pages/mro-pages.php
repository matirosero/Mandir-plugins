<?php
/*
Plugin Name: MRo Mandir Pages
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up custom meta for assorted Yoga Mandir pages.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
Text Domain: mro-pages
Domain Path: /languages
*/


//Textdomain
function mro_pages_load_plugin_textdomain() {
    load_plugin_textdomain( 'mro-pages', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'mro_pages_load_plugin_textdomain' );


//hide editor
// https://gist.github.com/ramseyp/4060095
add_action( 'admin_head', 'mro_pages_hide_editor' );
function mro_pages_hide_editor() {
	$template_file = $template_file = basename( get_page_template() );
	if($template_file == 'template-training.php' || $template_file == 'template-store.php'){ // template
		remove_post_type_support('page', 'editor');
	}
}


// Validation for number
if ( ! has_filter( 'piklist_validation_rules', 'check_valid_number' ) ) {
	add_filter('piklist_validation_rules', 'check_valid_number', 11);
	function check_valid_number($validation_rules) {
	  $validation_rules['valid_number'] = array(
	    'rule' => "/[-+]?[0-9]*[.,]?[0-9]+/",
	    'message' => __('is not a number', 'mro-events')
	  );

	  return $validation_rules;
	}
}
