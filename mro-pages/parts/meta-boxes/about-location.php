<?php
/*
Title: Ubicación
Post Type: page
Context: normal
Priority: high
Order: 2
Template: page-templates/template-about-us
*/

  piklist('field', array(
    'type' => 'group',
    // 'field' => 'mro_about_us_info',
    'template'=>'field',
    'add_more' => false,
    'label' => __('Location', 'mro-pages'),
    // 'description' => __('Add the information and images for the featured product.', 'mro-pages'),
    'fields'  => array(
      array(
        'type' => 'text',
        'field' => 'mro_about_map_shortcode',
        'label' => __('Map shortcode', 'piklist-demo'),
        'columns' => 12,
      ),
      array(
        'type' => 'group',
        'field' => 'mro_about_locations',
        'label' => __('Location', 'piklist-demo'),
        'add_more' => true,
        'fields' => array(
          array(
            'type' => 'text',
            'field' => 'name',
            'label' => __('Name', 'piklist-demo'),
            'columns' => 12,
          ),
          array(
            'type' => 'textarea',
            'field' => 'address',
            'label' => __('Address', 'piklist-demo'),
            'columns' => 12,
            'attributes' => array(
              'rows' => 5,
            ),
          ),
          array(
            'type' => 'text',
            'field' => 'tel',
            'label' => __('Telephone', 'piklist-demo'),
            'columns' => 2,
          ),
        ),

      ),
    )
  ));