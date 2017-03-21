<?php
/*
Title: Details
Post Type: mro-event
Context: normal
Priority: high
Order: 2
*/

piklist('field', array(
    'type' => 'editor',
    'template'=>'field',
    'scope' => 'post',
    'field' => 'post_content',
    'options' => array (
      'wpautop' => true,
      'media_buttons' => true,
      'tabindex' => '',
      'editor_css' => '',
      'editor_class' => '',
      'teeny' => false,
      'dfw' => false,
      'tinymce' => true,
      'quicktags' => true,
    )
  ));