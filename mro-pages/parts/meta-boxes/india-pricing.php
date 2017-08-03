<?php
/*
Title: Precio
Post Type: page
Context: normal
Priority: high
Order: 3
Template: page-templates/template-india
*/

training_pricing();

piklist('field', array(
  'type' => 'text',
  'field' => 'mro_event_capacity',
  'label' => __('Capacity', 'mro-pages'),
  'attributes' => array(
    'class' => 'small-text'
  ),
  'validate' => array(
    array(
      'type' => 'valid_number'
    )
  ),
));