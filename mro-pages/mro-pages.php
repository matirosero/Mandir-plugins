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

foreach ( glob( plugin_dir_path( __FILE__ ) . "inc/*.php" ) as $file ) {
    include_once $file;
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

// Return an array formatted for select field
function mro_pages_build_choices($choices) {
	foreach ($choices as $value => $choice):
		if ($choice === ''):
			$choices[$value] = sprintf(__('#%d (no title)'), $value);
		endif;
	endforeach;

	$choices = array_replace(array('' => '&mdash; Select &mdash;'), $choices);

	return $choices;
}




/*
function mro_intro_after_title() {
	$current_screen = get_current_screen();
  	if( $current_screen ->id === "page" ) {

		piklist('field',
		  array(
		    'type' => 'editor',
		    'field' => 'mro_page_intro',
		    'template'=>'field',
		    'label' => __('Introduction', 'mro-pages'),
		    'options' => array(
		      'wpautop' => true,
		      'media_buttons' => false,
		      'teeny' => false,
		      'textarea_rows' => 5,
		      'drag_drop_upload' => false,
		      'tinymce' => array(
		        'resize' => false,
		        'wp_autoresize_on' => true,
		      ),
		      'editor_height' => 100,
		    ),
		));
	}
}
add_action('edit_form_after_title', 'mro_intro_after_title');
*/

