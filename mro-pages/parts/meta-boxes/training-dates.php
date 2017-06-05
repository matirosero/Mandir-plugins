<?php
/*
Title: Fechas y horario próximo entrenamiento
Post Type: page
Context: normal
Priority: high
Order: 2
Template: page-templates/template-training
*/


// Dates. 
piklist('field', array(
  'type' => 'group',
  'label' => __('Course dates', 'mro-pages'),
  // 'description' => __('Add as many dates as needed.', 'mro-pages'),
  'add_more' => false,
  'fields' => array(
    array(
      'type' => 'datepicker',
      'field' => 'mro_training_date_start',
      'label' => __('Date start', 'mro-pages'),
      'columns' => 6,
      'options' => array(
        'dateFormat' => 'yy-mm-dd',
      ),
    ),
    array(
      'type' => 'datepicker',
      'field' => 'mro_training_date_end',
      'label' => __('Date end', 'mro-pages'),
      'columns' => 6,
      'options' => array(
        'dateFormat' => 'yy-mm-dd',
      ),
    ),
    array(
      'type' => 'radio',
      'field' => 'mro_training_exact_dates',
      // 'label' => __('Fechas exactas', 'mro-pages'),
      'value' => 2,
      'choices' => array(
        1 => __('Mostrar únicamente meses', 'mro-pages'),
        2 => __('Mostrar fechas exactas', 'mro-pages'),
      ),
    ),
  ),
));

// Repeater: date with time start and end. 
piklist('field', array(
  'type' => 'group',
  'label' => __('Schedule', 'mro-pages'),
  // 'description' => __('Add as many dates as needed.', 'mro-pages'),
  'add_more' => false,
  'fields' => array(

    array(
      'type' => 'time',
      'field' => 'mro_training_time_start',
      'label' => __('Time start', 'mro-pages'),
      'columns' => 6,
    ),
    array(
      'type' => 'time',
      'field' => 'mro_training_time_end',
      'label' => __('Time end', 'mro-pages'),
      'columns' => 6,
    ),
    array(
      'type' => 'checkbox',
      'field' => 'mro_training_days',
      'label' => __('Days', 'mro-pages'),
      'columns' => 12,
      // 'value' => 2,
      // 'list' => false,
      'choices' => array(
        'Monday' => __('Monday', 'mro-pages'),
        'Tuesday' => __('Tuesday', 'mro-pages'),
        'Wednesday' => __('Wednesday', 'mro-pages'),
        'Thursday' => __('Thursday', 'mro-pages'),
        'Friday' => __('Friday', 'mro-pages'),
        'Saturday' => __('Saturday', 'mro-pages'),
        'Sunday' => __('Sunday', 'mro-pages'),
      ),
    ),
    array(
      'type' => 'textarea',
      'field' => 'mro_training_schedule_extra',
      'label' => __('Weekend workshops', 'mro-pages'),
      // 'description' => 'class="large-text code" rows="10" columns="50"',
      // ,'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
      'attributes' => array(
        'rows' => 5,
        'cols' => 50,
        'class' => 'large-text',
      ),
    ),
  ),
));

// Orientación. 
piklist('field', array(
  'type' => 'group',
  'label' => __('Orientation', 'mro-pages'),
  // 'description' => __('Add as many dates as needed.', 'mro-pages'),
  'add_more' => false,
  'fields' => array(
    array(
      'type' => 'datepicker',
      'field' => 'mro_training_orientation_date',
      'label' => __('Date', 'mro-pages'),
      'columns' => 6,
      'options' => array(
        'dateFormat' => 'yy-mm-dd',
      ),
    ),
    array(
      'type' => 'time',
      'field' => 'mro_training_orientation_time',
      'label' => __('Time', 'mro-pages'),
      'columns' => 6,
    ),
  ),
));