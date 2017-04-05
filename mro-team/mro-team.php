<?php
/*
Plugin Name: MRo Team
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up custom post types for Yoga Mandir.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
*/

  add_filter('piklist_post_types', 'mro_team_post_types');
  function mro_team_post_types($post_types)
  {
    $post_types['mro-team'] = array(
      'labels' => piklist('post_type_labels', 'Teachers')
      ,'title' => __('Enter a new Teacher')
      ,'menu_position' => 20
      ,'menu_icon' => 'dashicons-admin-users'
      ,'page_icon' => 'dashicons-admin-users'
      ,'supports' => array(
        'title'
        // ,'editor'
        // ,'excerpt'
      )
      ,'public' => true
      ,'admin_body_class' => array(
        'mro-event'
      )
      ,'has_archive' => false
      ,'rewrite' => array(
        'slug' => 'team'
      )
      ,'capability_type' => 'post'
      // ,'edit_columns' => array(
      //   'title' => __('Demo')
      //   ,'author' => __('Assigned to')
      // )
      ,'hide_meta_box' => array(
        'author'
      )
    );

    return $post_types;
  }