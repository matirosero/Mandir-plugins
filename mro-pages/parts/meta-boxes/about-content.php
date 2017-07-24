<?php
/*
Title: Descripción
Post Type: page
Context: normal
Priority: high
Order: 1
Template: page-templates/template-about-us
*/

  piklist('field', array(
    'type' => 'group',
    // 'field' => 'mro_about_us_info',
    // 'template'=>'field',
    'add_more' => false,
    'label' => __('Information', 'mro-pages'),
    'description' => __('Highlighted information, with large image to the side.', 'mro-pages'),
    'fields'  => array(
      array(
        'type' => 'file',
        'field' => 'mro_about_secondary_image',
        'label' => __('Image', 'mro-pages'),
        'description' => __('Upload only ONE image, only one will be used on page.', 'mro-pages'),
        'columns' => 12,
        'options' => array(
          'multiple' => false,
        ),
      ),
      array(
        'type' => 'editor',
        'scope' => 'post',
        'field' => 'post_content',
        'options' => array (
          'wpautop' => true,
          'media_buttons' => false,
          'teeny' => true,
          'textarea_rows' => 5,
          'drag_drop_upload' => false,
          'tinymce' => array(
            'resize' => false,
            'wp_autoresize_on' => true,
          ),
          'editor_height' => 200,
        ),
      ),
    )
  ));