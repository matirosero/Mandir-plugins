<?php
/*
Title: Estado
Post Type: page
Context: normal
Priority: high
Order: 0
Template: page-templates/template-training
*/

  piklist('field', array(
    'type' => 'radio',
    'field' => 'mro_training_state',
    'label' => __('Enrollment state', 'mro-pages'),
    'value' => '0',
    'choices' => array(
      0 => __('Enrollment closed', 'mro-pages'),
      1 => __('Enrollment open', 'mro-pages'),
    ),
  ));