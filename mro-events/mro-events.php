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
*/

  add_filter('piklist_post_types', 'mro_events_post_types');
  function mro_events_post_types($post_types)
  {
    $post_types['mro-event'] = array(
      'labels' => piklist('post_type_labels', 'Event')
      ,'title' => __('Enter a new Event')
      ,'menu_position' => 20
      ,'menu_icon' => 'dashicons-calendar'
      ,'page_icon' => 'dashicons-calendar'
      ,'supports' => array(
        'title'
        ,'editor'
        ,'excerpt'
      )
      ,'public' => true
      ,'admin_body_class' => array(
        'mro-event'
      )
      ,'has_archive' => false
      ,'rewrite' => array(
        'slug' => 'eventos'
      )
      ,'capability_type' => 'post'
      // ,'edit_columns' => array(
      //   'title' => __('Demo')
      //   ,'author' => __('Assigned to')
      // )
      ,'hide_meta_box' => array(
        'slug'
        ,'author'
      )
    );

    return $post_types;
  }