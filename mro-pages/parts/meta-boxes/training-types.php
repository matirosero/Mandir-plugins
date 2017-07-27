<?php
/*
Title: Horas de certificación
Post Type: page
Context: normal
Priority: high
Order: 3
Template: page-templates/template-training
*/

piklist('field', array(
  'type' => 'group',
  'field' => 'mro_training_types', // Including a field at this level saves all data in a serialized array.
  'label' => __('Tipos', 'mro-pages'),
  // 'description' => __('Each line will be a bullet point.', 'mro-pages'),
  'add_more' => true,
  'fields' => array(
    array(
      'type' => 'text',
      'field' => 'title',
      'label' => __('Title (hours)', 'mro-pages'),
      'columns' => 12,
    ),
    array(
      'type' => 'text',
      'field' => 'price',
      'label' => __('Price', 'mro-pages'),
      'columns' => 12,
      'attributes' => array(
        'placeholder' => __('100', 'mro-pages'),
        ),
      'validate' => array(
        array(
          'type' => 'valid_number'
        )
      ),
    ),
    array(
      'type' => 'textarea',
      'field' => 'description',
      'label' => __('Description', 'mro-pages'),
      'columns' => 12,
      'attributes' => array(
        'rows' => 3,
        'cols' => 50,
        'class' => 'large-text',
      ),
    ),

    array(
      'type' => 'time',
      'field' => 'time_start',
      'label' => __('Time start', 'mro-pages'),
      'columns' => 6,
    ),
    array(
      'type' => 'time',
      'field' => 'time_end',
      'label' => __('Time end', 'mro-pages'),
      'columns' => 6,
    ),
    array(
      'type' => 'checkbox',
      'field' => 'days',
      'label' => __('Days', 'mro-pages'),
      'columns' => 12,
      // 'value' => 2,
      // 'list' => false,
      'choices' => array(
        'lunes' => __('Monday', 'mro-pages'),
        'martes' => __('Tuesday', 'mro-pages'),
        'miércoles' => __('Wednesday', 'mro-pages'),
        'jueves' => __('Thursday', 'mro-pages'),
        'viernes' => __('Friday', 'mro-pages'),
        'sábado' => __('Saturday', 'mro-pages'),
        'domingo' => __('Sunday', 'mro-pages'),
      ),
    ),
    array(
      'type' => 'textarea',
      'field' => 'workshops',
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