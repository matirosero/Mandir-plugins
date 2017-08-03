<?php
/*
Title: Fechas viaje
Post Type: page
Context: normal
Priority: high
Order: 2
Template: page-templates/template-india
*/

piklist('field', array(
  'type' => 'text',
  'field' => 'mro_sidebar_heading',
  'label' => __('Sidebar heading', 'mro-pages'),
  'attributes' => array(
    'class' => 'large-text'
  ),
));

//Dates
training_dates();

// Orientation.
training_orientation();

piklist('field', array(
  'type' => 'group',
  'field' => 'mro_india_dates', // Use _types as base.
  'label' => __('Additional dates', 'mro-pages'),
  // 'description' => __('Each line will be a bullet point.', 'mro-pages'),
  'add_more' => true,
  'fields' => array(
    array(
      'type' => 'text',
      'field' => 'title',
      'label' => __('Title', 'mro-pages'),
      'columns' => 12,
    ),
    array(
      'type' => 'datepicker',
      'field' => 'date_start',
      'label' => __('Date start', 'mro-pages'),
      'columns' => 4,
      'options' => array(
        'dateFormat' => 'yy-mm-dd',
      ),
    ),
    array(
      'type' => 'datepicker',
      'field' => 'date_end',
      'label' => __('Date end', 'mro-pages'),
      'columns' => 4,
      'options' => array(
        'dateFormat' => 'yy-mm-dd',
      ),
    ),
  ),
));