<?php
/*
Title: Otros productos
Post Type: page
Context: normal
Priority: high
Order: 2
Template: page-templates/template-store
*/


  piklist('field', array(
    'type' => 'group',
    'field' => 'mro_store_products',
    'add_more' => true,
    'label' => __('Other productos', 'mro-pages'),
    'description' => __('Add the information and images for products.', 'mro-pages'),
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
        'label' => __('Product information', 'mro-pages'),
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
        'columns' => 12,
        'validate' => array(
          array(
            'type' => 'limit',
            'options' => array(
              'min' => 1,
              'max' => 1,
            ),
          ),
        ),
      ),

    )
  ));


