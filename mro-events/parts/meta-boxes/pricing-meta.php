<?php
/*
Title: Precios
Post Type: mro-event
Context: normal
Priority: high
Order: 3
*/

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