<?php
/*
Title: Precio al por mayor
Post Type: page
Context: normal
Priority: high
Order: 2
Template: page-templates/template-featured-product
*/



  piklist('field', array(
    'type' => 'group',
    'field' => 'mro_mats_bulk',
    'label' => __('Bulk price', 'piklist-demo'),
    'add_more' => false,
    'fields' => array(
      array(
        'type' => 'radio',
        'field' => 'currency',
        'label' => __('Currency', 'mro-events'),
        'help' => __('This controlls what symbol is appended to the price.', 'mro-events'),
        'choices' => array(
          '$' => __('US dollars ($)', 'mro-events'),
          '₡' => __('CR colones (₡)', 'mro-events'),
        ),
        'value' => '$',
      ),
      array(
        'type' => 'text',
        'field' => 'tax_notes',
        'label' => __('Notes on taxes', 'piklist-demo'),
        'columns' => 12
      ),
      array(
        'type' => 'group',
        'field' => 'price_points',
        'add_more' => true,
        'fields' => array(
          array(
            'type' => 'text',
            'field' => 'qty',
            'label' => __('Qty', 'piklist-demo'),
            'columns' => 2,
            'attributes' => array(
              // 'class' => 'regular-text',
              'placeholder' => __('6', 'mro-events'),
              ),
            'validate' => array(
              array(
                'type' => 'valid_number'
              )
            ),
          ),
          array(
            'type' => 'text',
            'field' => 'price',
            'label' => __('Price', 'piklist-demo'),
            'columns' => 6,
            'attributes' => array(
              // 'class' => 'regular-text',
              'placeholder' => __('50', 'mro-events'),
              ),
            'validate' => array(
              array(
                'type' => 'valid_number'
              )
            ),
          ),
        ),
      )
    )
  ));



