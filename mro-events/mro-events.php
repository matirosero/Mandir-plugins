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

function mro_events_load_plugin_textdomain() {
    load_plugin_textdomain( 'mro-events', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'mro_events_load_plugin_textdomain' );