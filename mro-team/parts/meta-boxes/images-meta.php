<?php
/*
Title: Featured Image(s)
Post Type: mro-team
Context: normal
Priority: high
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
    'type' => 'file',
    'field' => '_thumbnail_id',
    'label' => __('Main photo', 'piklist-demo'),
    'description' => __('If possible, this should be a portrait.', 'piklist-demo'),
    'required' => true,
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
          'max' => 1,
        ),
      ),
    ),
  ));

  piklist('field', array(
    'type' => 'file',
    'field' => 'mro_team_secondary_image',
    'label' => __('Secondary photo', 'piklist-demo'),
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
          'max' => 1,
        ),
      ),
    ),
  ));


  // piklist('shared/code-locater', array(
  //   'location' => __FILE__,
  //   'type' => 'Meta Box',
  // ));