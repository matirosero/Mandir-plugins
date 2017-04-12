<?php
/*
Title: Slider images
Setting: my_theme_settings
Order: 1
*/
?>



<?php

  // piklist('field', array(
  //   'type' => 'file',
  //   'field' => '_thumbnail_id', // Use this field to match WordPress featured image field name.,
  //   'scope' => 'post_meta',
  //   'options' => array(
  //     'title' => __('Set featured image(s)', 'piklist-demo'),
  //     'button' => __('Set featured image(s)', 'piklist-demo'),
  //   ),
  // ));

  // piklist('shared/code-locater', array(
  //   'location' => __FILE__,
  //   'type' => 'Meta Box',
  // ));

  piklist('field', array(
    'type' => 'radio'
    ,'field' => 'radio'
    ,'label' => __('Radio', 'piklist-demo')
    ,'value' => 0
    ,'list' => false
    ,'choices' => array(
      1 => __('Yes', 'piklist-demo'),
      0 => __('No', 'piklist-demo')
    )
  ));
  
  piklist('field', array(
    'type' => 'checkbox'
    ,'field' => 'mro_checkbox_inline'
    ,'label' => __('Single Line', 'piklist-demo')
    ,'value' => 'that'
    ,'list' => false
    ,'choices' => array(
      'this' => 'This'
      ,'that' => 'That'
    )
  ));

  piklist('field', array(
    'type' => 'file',
    'field' => 'mro_hero_slider_images',
    'label' => __('Slider image', 'piklist-demo'),
    'description' => __('This should be a yoga pose.', 'piklist-demo'),
    'options' => array(
      'modal_title' => __('Add File(s)', 'piklist-demo'),
      'button' => __('Add', 'piklist-demo'),
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


  // piklist('shared/code-locater', array(
  //   'location' => __FILE__,
  //   'type' => 'Meta Box',
  // ));