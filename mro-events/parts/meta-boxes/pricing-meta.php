<?php
/*
Title: Precios
Post Type: mro-event
Context: normal
Priority: high
Order: 3
*/


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
    // 'placeholder' => __('i.e. "$100 antes del 1 de mayo"', 'mro-events'),
    ),
));