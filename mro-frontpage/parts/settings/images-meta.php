<?php
/*
Title: Slider images
Setting: mro_frontpage_settings
Order: 1
*/


  // piklist('field', array(
  //   'type' => 'radio',
  //   'field' => 'radio',
  //   'label' => __('Radio', 'mro-frontpage'),
  //   'value' => 0,
  //   'list' => false,
  //   'choices' => array(
  //     1 => __('Yes', 'mro-frontpage'),
  //     0 => __('No', 'mro-frontpage'),
  //   ),
  // ));

piklist('field', array(
  'type' => 'checkbox',
  'field' => 'hero_slider_enable',
  'label' => __('Enable slider', 'mro-frontpage'),
  'value' => '',
  'list' => false,
  'choices' => array(
    1 => 'Enable',
  )
));

piklist('field', array(
  'type' => 'file',
  'field' => 'hero_slider_images',
  'label' => __('Slider images', 'mro-frontpage'),
  // 'description' => __('This should be a yoga pose.', 'mro-frontpage'),
  'options' => array(
    'modal_title' => __('Add File(s)', 'mro-frontpage'),
    'button' => __('Add', 'mro-frontpage'),
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
