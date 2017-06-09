<?php
/*
Title: Featured product
Post Type: page
Context: normal
Priority: high
Order: 1
Template: page-templates/template-store
*/


  piklist('field', array(
    'type' => 'group',
    'field' => 'mro_store_featured',
    'add_more' => false,
    'label' => __('Featured product', 'mro-pages'),
    'description' => __('Add the information and images for the featured product.', 'mro-pages'),
    'fields'  => array(
      array(
        'type' => 'text',
        'field' => 'title',
        'label' => __('Product name', 'mro-pages'),
        'columns' => 12,
      ),
      array(
        'type' => 'editor',
        'field' => 'info',
        'label' => __('Product information on Store page', 'mro-pages'),
        'description' => __('Describe the product.', 'mro-pages'),
        'options' => array(
          'media_buttons' => false,
          'teeny' => true,
          'textarea_rows' => 5,
          'drag_drop_upload' => false,
          'tinymce' => array(
            'resize' => false,
            'wp_autoresize_on' => true,
          ),
        ),
      ),
      array(
        'type' => 'file',
        'field' => 'image',
        'label' => __('Image', 'mro-pages'),
        'description' => __('Upload only ONE image, only one will be used on page.', 'mro-pages'),
        'columns' => 12,
        'options' => array(
          'multiple' => false,
        ),
      ),
      array(
        'type' => 'radio',
        'field' => '_' . piklist::$prefix . 'relate_post',
        'label' => __('Product page', 'mro-pages'),
        'choices' => piklist(
          get_posts(
            array(
              'post_type' => 'page',
              'numberposts' => -1,
              'orderby' => 'title',
              'order' => 'ASC',
              'post_parent' => $post->ID,
            )
          ),
          array('ID', 'post_title')
        ),
        'relate' => array(
          'scope' => 'post',
        ),
      ),
    )
  ));


