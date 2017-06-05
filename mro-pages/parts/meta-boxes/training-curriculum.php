<?php
/*
Title: Curriculum
Post Type: page
Context: normal
Priority: high
Order: 4
Template: page-templates/template-training
*/

// Curriculum (repeater). 
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_training_curriculum', // Including a field at this level saves all data in a serialized array.
  'label' => __('Curriculum', 'mro-pages'),
  'description' => __('Each line will be a bullet point.', 'mro-pages'),
  'add_more' => true,
  'fields' => array(
    array(
      'type' => 'text',
      'field' => 'title',
      'label' => __('Title', 'mro-pages'),
      'columns' => 6,
    ),
    array(
      'type' => 'text',
      'field' => 'length',
      'label' => __('Time', 'mro-pages'),
      'columns' => 6,
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
  ),
));