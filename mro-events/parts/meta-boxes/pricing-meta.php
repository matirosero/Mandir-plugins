<?php
/*
Title: Pricing
Post Type: mro-event
Context: normal
Priority: high
Order: 3
*/

piklist('field', array(
  'type' => 'group',
  'label' =>  __('Pricing options', 'mro-event'),
  'description' => __('Add as many as needed', 'piklist-demo'),
  'list' => false,
  'fields' => array (
    array (
      'type' => 'text',
      'field' => 'mro_event_price',
      'label' => __('Price', 'piklist-demo'),
      'attributes' => array(
        'class' => 'large-text',
        'placeholder' => __('i.e. "$100 antes del 1 de mayo"', 'piklist-demo'),
        ),
      'add_more' => true,
      'columns' => 12,
      // 'value' => date('M d, Y', time() + 604800), // set default value

    ),
  ),
));


