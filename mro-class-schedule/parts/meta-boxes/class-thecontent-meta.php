<?php
/*
Title: Descripción
Post Type: mro-class
Context: normal
Priority: high
Order: 1
*/

piklist('field', array(
  'type' => 'editor',
  'template'=>'field',
  'scope' => 'post',
  'field' => 'post_content',
  'options' => array (
    'wpautop' => true,
    'media_buttons' => false,
    'tabindex' => '',
    'editor_css' => '',
    'editor_class' => '',
    'teeny' => true, //this
    'dfw' => false,
    'tinymce' => true,
    'quicktags' => true,
    'editor_height' => 100,
  ),
));