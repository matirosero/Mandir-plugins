<?php
/*
Title: Editor
Post Type: mro-announcement
Priority: core
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