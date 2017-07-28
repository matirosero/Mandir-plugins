<?php
/*
Title: Precios
Post Type: mro-event
Context: normal
Priority: high
Order: 4
*/


// Select currency symbol
piklist('field', array(
  'type' => 'radio',
  'field' => 'mro_event_payment_type',
  'label' => __('Type of payment', 'mro-events'),
  // 'help' => __('This controlls what symbol is appended to the price.', 'mro-events'),
  'choices' => array(
    'free' => __('Free', 'mro-events'),
    'price' => __('Set price', 'mro-events'),
    'donation' => __('Donation', 'mro-events'),
  ),
  'value' => 'free',
));


// Select currency symbol
piklist('field', array(
  'type' => 'radio',
  'field' => 'mro_event_currency',
  'label' => __('Currency', 'mro-events'),
  'help' => __('This controlls what symbol is appended to the price.', 'mro-events'),
  'choices' => array(
    '$' => __('US dollars ($)', 'mro-events'),
    '₡' => __('CR colones (₡)', 'mro-events'),
  ),
  'value' => '$',
  'conditions' => array(
    'relation' => 'or',
    array(
      'field' => 'mro_event_payment_type',
      'value' => 'price',
    ),
    array(
      'field' => 'mro_event_payment_type',
      'value' => 'donation',
    ),
  ),
));


// Donation
piklist('field', array(
  'type' => 'text',
  'field' => 'mro_event_donation',
  'label' => __('Suggested donation', 'mro-events'),
  'description' => __('Must be a number.', 'mro-events'),
  'help' => __('Must be "100", "10.5", etc. Not "100 dollars".', 'mro-events'),
  'attributes' => array(
    // 'class' => 'regular-text',
    'placeholder' => __('100', 'mro-events'),
    ),
  'validate' => array(
    array(
      'type' => 'valid_number'
    )
  ),
  'conditions' => array(
    array(
      'field' => 'mro_event_payment_type',
      'value' => 'donation',
    ),
  ),
));


// Regular price
piklist('field', array(
  'type' => 'text',
  'field' => 'mro_event_price',
  'label' => __('Regular price', 'mro-events'),
  'description' => __('Must be a number.', 'mro-events'),
  'help' => __('Must be "100", "10.5", etc. Not "100 dollars".', 'mro-events'),
  'attributes' => array(
    // 'class' => 'regular-text',
    'placeholder' => __('100', 'mro-events'),
    ),
  'validate' => array(
    array(
      'type' => 'valid_number'
    )
  ),
  'conditions' => array(
    array(
      'field' => 'mro_event_payment_type',
      'value' => 'price',
    ),
  ),
));


// Other pricing options
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_event_pricing_options',
  'label' =>  __('Pricing options', 'mro-events'),
  'description' => __('Add as many as needed. Price must be a number.', 'mro-events'),
  'list' => false,
  'add_more' => true,
  'fields' => array (
    array (
      'type' => 'text',
      'field' => 'price',
      'label' => __('Price', 'mro-events'),
      'help' => __('Must be "100", "10.5", etc. Not "100 dollars".', 'mro-events'),
      'attributes' => array(
        'class' => 'large-text',
        'placeholder' => __('100', 'mro-events'),
        ),
      'validate' => array(
        array(
          'type' => 'valid_number'
        )
      ),
      'columns' => 6,
    ),
    array (
      'type' => 'text',
      'field' => 'description',
      'label' => __('Descripción', 'mro-events'),
      'attributes' => array(
        'class' => 'large-text',
        'placeholder' => __('Early bird price before May 5', 'mro-events'),
        ),
      'columns' => 12,
    ),
  ),
  'conditions' => array(
    array(
      'field' => 'mro_event_payment_type',
      'value' => 'price',
    ),
  ),
));


//Pricing notes
piklist('field', array(
  'type' => 'textarea',
  'field' => 'mro_event_pricing_notes',
  'label' => __('Pricing notes', 'mro-events'),
  'description' => __('Further explanation needed to clarify pricing.', 'mro-events'),
  'help' => __('For instance, if you need to explain discount conditions, payment schedule, etc.', 'mro-events'),
  'attributes' => array(
    'class' => 'large-text',
    "maxlength"  => '180',
    // 'placeholder' => __('i.e. "$100 antes del 1 de mayo"', 'mro-events'),
    ),
));