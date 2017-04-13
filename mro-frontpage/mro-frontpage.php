<?php
/*
Plugin Name: MRo Frontpage
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up feilds for front page.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
Text Domain: mro-frontpage
Domain Path: /languages
*/


/**
 * Register a custom menu page.
 *//*
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'Homepage settings', 'mro-frontpage' ), //$page_title
        'Home settings', //$menu_title
        'manage_options', //$capability
        'mro_frontpage_settings', //$menu_slug
        '', //$function
        'dashicons-admin-home', //$icon_url
        4 //$position
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
*/
  add_filter('piklist_admin_pages', 'mro_theme_setting_pages');
  function mro_theme_setting_pages($pages)
  {
     $pages[] = array(
      'page_title' => __('Home settings')
      ,'menu_title' => __('Home settings', 'mro-frontpage')
      // ,'sub_menu' => 'mro_frontpage_settings' //Under Appearance menu
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'mro_frontpage_settings'
      ,'setting' => 'mro_frontpage_settings'
      ,'menu_icon' => 'dashicons-admin-home'
      ,'page_icon' => 'dashicons-admin-home'
      ,'single_line' => true
      ,'default_tab' => 'Basic'
      ,'save_text' => __('Save Home Settings', 'mro-frontpage'),
      'position' => 4,
    );

    return $pages;
  }

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
// function mro_frontpage_top() {
//     echo "<h2>" . __( 'Home Settings', 'mro-frontpage' ) . "</h2>";
// }



/*
  add_filter('piklist_admin_pages', 'mro_demo_admin_pages');
  function mro_demo_admin_pages($pages) {
    $pages[] = array(
      'page_title' => __('MRo Settings')
      ,'menu_title' => __('MRo Settings', 'piklist-demo')
      ,'sub_menu' => 'edit.php?post_type=piklist_demo'
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'piklist_demo_fields'
      ,'setting' => 'piklist_demo_fields'
      ,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-icon.png'
      ,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
      ,'default_tab' => 'Basic'
      // ,'layout' => 'meta-boxes' // NOTE: Uncomment this to use the meta box layout on this settings page!
      ,'save_text' => 'Save Demo Settings'
    );

    $pages[] = array(
      'page_title' => __('MRo Reading Settings')
      ,'menu_title' => __('MRo Reading', 'piklist-demo')
      ,'sub_menu' => 'edit.php?post_type=piklist_demo'
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'piklist_demo_options'
      ,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-icon.png'
      ,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
    );
    
    return $pages;
  }
*/

