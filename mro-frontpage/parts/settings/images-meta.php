<?php
/*
Title: Slider images
Setting: mro_frontpage_settings
Order: 1
*/


piklist('field', array(
  'type' => 'checkbox',
  'field' => 'hero_slider_enable',
  'label' => __('Enable slider', 'mro-pages'),
  'value' => '',
  'list' => false,
  'choices' => array(
    1 => 'Enable',
  )
));

piklist('field', array(
  'type' => 'file',
  'field' => 'hero_slider_images',
  'label' => __('Slider images', 'mro-pages'),
  // 'description' => __('This should be a yoga pose.', 'mro-pages'),
  'options' => array(
    'modal_title' => __('Add File(s)', 'mro-pages'),
    'button' => __('Add', 'mro-pages'),
  ),
  'attributes' => array(
    'class' => 'large-text',
  ),
  'validate' => array(
    array(
      'type' => 'limit',
      'options' => array(
        'min' => 0,
        'max' => 3,
      ),
    ),
  ),
));
