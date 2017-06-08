<?php
/*
Title: Información
Post Type: page
Context: normal
Priority: high
Order: 0
Template: page-templates/template-store
*/


  piklist('field', array(
    'type' => 'editor'
    ,'field' => 'post_content'
    ,'scope' => 'post'
    ,'label' => __('Introduction', 'mro-pages')
    // ,'add_more' => true
    ,'description' => __('Basic information, goes under title.')
    // ,'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ,'options' => array(
      'media_buttons' => false
      ,'teeny' => true
      ,'textarea_rows' => 5
      ,'drag_drop_upload' => false
      ,'tinymce' => array(
        'resize' => false
        ,'wp_autoresize_on' => true
      )
    )
  ));


