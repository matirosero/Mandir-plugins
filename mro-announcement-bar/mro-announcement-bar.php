<?php
/*
Plugin Name: MRo Annoucement Bar
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up custom post types for Yoga Mandir.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
*/

  add_filter('piklist_post_types', 'mro_announcement_bar_post_types');
  function mro_announcement_bar_post_types($post_types)
  {
    $post_types['mro-announcement'] = array(
      'labels' => piklist('post_type_labels', 'Announcement')
      ,'title' => __('Enter a new Annoucement')
      ,'menu_position' => 5
      ,'menu_icon' => 'dashicons-megaphone'
      ,'page_icon' => 'dashicons-megaphone'
      ,'supports' => array(
        'title'
        // ,'editor'
        // ,'excerpt'
      )
      ,'public' => true
      ,'admin_body_class' => array(
        'mro-announcement'
      )
      ,'has_archive' => false
      ,'rewrite' => array(
        'slug' => 'annoucement'
      )
      ,'capability_type' => 'post'
      ,'hide_meta_box' => array(
        'slug'
        ,'author'
      )
    );

    return $post_types;
  }