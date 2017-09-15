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


add_filter('piklist_admin_pages', 'mro_admin_pages');
function mro_admin_pages($pages) {
	$pages[] = array(
		'page_title' => __('Mandir Settings')
		,'menu_title' => __('Mandir Settings', 'piklist-demo')
		// ,'sub_menu' => 'edit.php?post_type=piklist_demo'
		,'capability' => 'edit_others_posts'
		,'menu_slug' => 'mandir_fields'
		,'setting' => 'mandir_fields'
		,'menu_icon' => 'dashicons-admin-home'
		,'page_icon' => 'dashicons-admin-home'
		,'default_tab' => 'Basic'
		// ,'layout' => 'meta-boxes' // NOTE: Uncomment this to use the meta box layout on this settings page!
		,'save_text' => 'Save Mandir Settings',
		'position' => 4,
	);

	return $pages;
}