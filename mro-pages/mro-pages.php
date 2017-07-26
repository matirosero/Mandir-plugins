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


/**
 * Hide the main editor on specific pages
 */
define('EDITOR_HIDE_PAGE_TITLES', json_encode(array()));
define('EDITOR_HIDE_PAGE_TEMPLATES', json_encode(
	array(
		'page-templates/template-about-us.php',
		'page-templates/template-events.php',
		'page-templates/template-schedule.php',
	)));


/**
 * Hide the main editor on defined pages
 *
 * You can choose between page titles or page templates. Just set them
 * accordingly like this:
 *
 * define('EDITOR_HIDE_PAGE_TITLES', json_encode(array('Home', 'Some post archive', 'Some Listing')));
 * define('EDITOR_HIDE_PAGE_TEMPLATES', json_encode(array('template-of-something.php', 'archive-customposttype.php')));
 *
 *
 * @global string $pagenow
 * @return void
 */
function atz_hide_editor() {
	global $pagenow;
    if(!('post.php' == $pagenow)){
		return;
	}

	// Get the Post ID.
	$post_id = filter_input(INPUT_GET, 'post') ? filter_input(INPUT_GET, 'post') : filter_input(INPUT_POST, 'post_ID');
	if(!isset($post_id)) {
		return;
	}

	// Hide the editor on the page titled 'Homepage'
	if(in_array(get_the_title($post_id), json_decode(EDITOR_HIDE_PAGE_TITLES))) {
		remove_post_type_support('page', 'editor');
	}

	// Hide the editor on a page with a specific page template
	$template_filename = get_post_meta($post_id, '_wp_page_template', true);

	if(in_array($template_filename, json_decode(EDITOR_HIDE_PAGE_TEMPLATES))) {
		remove_post_type_support('page', 'editor');
	}
}
add_action('admin_init', 'atz_hide_editor');


function mro_page_intro() {
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