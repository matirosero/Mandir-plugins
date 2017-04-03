<?php
/*
Title: Pricing
Post Type: mro-event
Context: normal
Priority: high
Order: 3
*/

piklist('field', array(
  'type' => 'radio',
  'field' => 'mro_event_currency',
  'label' => __('Currency', 'mro-event'),
  'help' => __('This controlls what symbol is appended to the price.', 'mro-event'),
  'choices' => array(
    '$' => __('US dollars ($)', 'mro-event'),
    '₡' => __('CR colones (₡)', 'mro-event'),
  ),
  'value' => '$',
));

piklist('field', array(
  'type' => 'text',
  'field' => 'mro_event_price',
  'label' => __('Regular price', 'mro-event'),
  'description' => __('Must be a number.', 'mro-event'),
  'help' => __('Must be "100", "10.5", etc. Not "100 dollars".', 'mro-event'),
  'attributes' => array(
    // 'class' => 'regular-text',
    'placeholder' => __('100', 'mro-event'),
    ),
  'validate' => array(
    array(
      'type' => 'valid_number'
    )
  ),
));

piklist('field', array(
  'type' => 'group',
  'label' =>  __('Pricing options', 'mro-event'),
  'description' => __('Add as many as needed. Price must be a number.', 'mro-event'),
  'list' => false,
  'add_more' => true,
  'fields' => array (
    array (
      'type' => 'text',
      'field' => 'mro_event_price_option',
      'label' => __('Price', 'mro-event'),
      'help' => __('Must be "100", "10.5", etc. Not "100 dollars".', 'mro-event'),
      'attributes' => array(
        'class' => 'large-text',
        'placeholder' => __('100', 'mro-event'),
        ),
      'validate' => array(
        array(
          'type' => 'valid_number'
        )
      ),
      // 'add_more' => true,
      'columns' => 6,
      // 'value' => date('M d, Y', time() + 604800), // set default value
    ),
    array (
      'type' => 'text',
      'field' => 'mro_event_price_option_description',
      'label' => __('Descripción', 'mro-event'),
      'attributes' => array(
        'class' => 'large-text',
        'placeholder' => __('Early bird price before May 5', 'mro-event'),
        ),
      // 'add_more' => true,
      'columns' => 12,
      // 'value' => date('M d, Y', time() + 604800), // set default value
    ),
  ),
));

  piklist('field', array(
    'type' => 'textarea',
    'field' => 'mro_event_pricing_notes',
    'label' => __('Pricing notes', 'mro-event'),
    'description' => __('Further explanation needed to clarify pricing.', 'mro-event'),
    'help' => __('For instance, if you need to explain discount conditions, payment schedule, etc.', 'mro-event'),
    'attributes' => array(
      'class' => 'large-text',
      // 'placeholder' => __('i.e. "$100 antes del 1 de mayo"', 'mro-event'),
      ),
  ));


