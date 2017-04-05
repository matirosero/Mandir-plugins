<?php
/*
Title: Lugar
Post Type: mro-event
Context: normal
Priority: high
Order: 4
*/

// Choose: Mandir or other
piklist('field', array(
  'type' => 'radio',
  'field' => 'mro_event_location',
  'label' => __('Choose venue', 'mro-events'),
  'help' => __('Choose OTHER to enter different venue details from the default (Yoga Mandir).', 'mro-events'),
  'choices' => array(
    'mandir' => 'Yoga Mandir',
    'other' => __('Other', 'mro-events'),
  ),
  'value' => 'mandir',
));


// Venue name if other
piklist('field', array(
  'type' => 'text',
  'field' => 'mro_event_location_name',
  'label' => __('Venue name', 'mro-events'),
  'attributes' => array(
      'class' => 'large-text',
      // 'placeholder' => __('i.e. "$100 antes del 1 de mayo"', 'mro-events'),
      ),
  'conditions' => array(
    array(
      'field' => 'mro_event_location'
      ,'value' => 'other'
    )
  ),
));


// Venue address if other
piklist('field', array(
  'type' => 'textarea',
  'field' => 'mro_event_location_address',
  'label' => __('Venue address', 'mro-events'),
  'attributes' => array(
      'class' => 'large-text',
      // 'placeholder' => __('i.e. "$100 antes del 1 de mayo"', 'mro-events'),
      ),
  'conditions' => array(
    array(
      'field' => 'mro_event_location'
      ,'value' => 'other'
    )
  ),
));