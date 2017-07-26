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


//Include files
foreach ( glob( plugin_dir_path( __FILE__ ) . "inc/*.php" ) as $file ) {
    include_once $file;
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

