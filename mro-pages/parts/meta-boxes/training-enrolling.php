<?php
/*
Title: Matrícula
Post Type: page
Context: normal
Priority: high
Order: 5
Template: page-templates/template-training
*/

// How to enroll (repeater). 
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_training_howtoenroll', // Including a field at this level saves all data in a serialized array.
  'label' => __('How to enroll', 'mro-pages'),
  'description' => __('Each line will be a bullet point.', 'mro-pages'),
  'add_more' => true,
  'fields' => array(
    array(
      'type' => 'textarea',
      'field' => 'point',
      // 'label' => __('One recommendation per line', 'mro-pages'),
      'attributes' => array(
        'rows' => 3,
        'cols' => 50,
        'class' => 'large-text',
      ),
    ),
  ),
));