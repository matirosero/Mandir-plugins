<?php
/*
Title: Introducción
Post Type: page
Context: normal
Priority: high
Order: 0
*/

// piklist('field', array(
//   'type' => 'editor',
//   'scope' => 'post',
//   'template' => 'field',
//   'field' => 'post_excerpt',
//   'options' => array (
//    'media_buttons' => false,
//    'teeny' => false,
//   ),
// ));


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