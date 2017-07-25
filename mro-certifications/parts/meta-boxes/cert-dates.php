<?php
/*
Title: Fechas
Post Type: mro-certification
Context: normal
Priority: high
Order: 1
*/


// Dates. 
piklist('field', array(
  'type' => 'group',
  'label' => __('Course dates', 'mro-cert'),
  // 'description' => __('Add as many dates as needed.', 'mro-cert'),
  'add_more' => false,
  'fields' => array(
    array(
      'type' => 'datepicker',
      'field' => 'mro_training_date_start',
      'label' => __('Date start', 'mro-cert'),
      'columns' => 6,
      'options' => array(
        'dateFormat' => 'yy-mm-dd',
      ),
    ),
    array(
      'type' => 'datepicker',
      'field' => 'mro_training_date_end',
      'label' => __('Date end', 'mro-cert'),
      'columns' => 6,
      'options' => array(
        'dateFormat' => 'yy-mm-dd',
      ),
    ),
    array(
      'type' => 'radio',
      'field' => 'mro_training_exact_dates',
      // 'label' => __('Fechas exactas', 'mro-cert'),
      'value' => 1,
      'choices' => array(
        0 => __('Mostrar únicamente meses', 'mro-cert'),
        1 => __('Mostrar fechas exactas', 'mro-cert'),
      ),
    ),
  ),
));

// Orientación. 
piklist('field', array(
  'type' => 'group',
  'label' => __('Orientation', 'mro-cert'),
  // 'description' => __('Add as many dates as needed.', 'mro-cert'),
  'add_more' => false,
  'fields' => array(

    array(
      'type' => 'datepicker',
      'field' => 'mro_training_orientation_date',
      'label' => __('Date', 'mro-cert'),
      'columns' => 6,
      'options' => array(
        'dateFormat' => 'yy-mm-dd',
      ),
    ),
    array(
      'type' => 'time',
      'field' => 'mro_training_orientation_time',
      'label' => __('Time', 'mro-cert'),
      'columns' => 6,
    ),
    array(
      'type' => 'checkbox',
      'field' => 'mro_training_show_orientation',
      // 'label' => __('Fechas exactas', 'mro-cert'),
      // 'value' => 0,
      'choices' => array(
        1 => __('Mostrar orientación', 'mro-cert'),
      ),
    ),
  ),
));