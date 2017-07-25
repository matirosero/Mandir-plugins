<?php
/*
Title: Información
Post Type: mro-certification
Context: normal
Priority: high
Order: 3
*/


  // piklist('field', array(
  //   'type' => 'editor'
  //   ,'field' => 'post_content'
  //   ,'scope' => 'post'
  //   ,'label' => __('Introduction', 'mro-cert')
  //   // ,'add_more' => true
  //   ,'description' => __('Basic information, goes under title.')
  //   // ,'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
  //   ,'options' => array(
  //     'media_buttons' => false
  //     ,'teeny' => true
  //     ,'textarea_rows' => 5
  //     ,'drag_drop_upload' => false
  //     ,'tinymce' => array(
  //       'resize' => false
  //       ,'wp_autoresize_on' => true
  //     )
  //   )
  // ));

piklist('field',
  array(
    'type' => 'editor',
    'field' => 'mro_page_intro',
    // 'template'=>'field',
    'label' => __('Introducción', 'mro-cert'),
    'options' => array(
      'wpautop' => true,
      'media_buttons' => false,
      'teeny' => false,
      'textarea_rows' => 5,
      'drag_drop_upload' => false,
      'tinymce' => array(
        'resize' => false,
        'wp_autoresize_on' => true,
      ),
      'editor_height' => 100,
    ),
));


piklist('field', array(
  'type' => 'editor'
  ,'field' => 'post_content'
  ,'scope' => 'post'
  ,'label' => __('More information', 'mro-cert')
  // ,'add_more' => true
  // ,'description' => __('Basic information, goes under title.')
  // ,'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
  ,'options' => array(
    'media_buttons' => false
    ,'teeny' => true
    ,'textarea_rows' => 5
    ,'drag_drop_upload' => false
    ,'tinymce' => array(
      'resize' => false
      ,'wp_autoresize_on' => true
    )
  )
));


// Repeater: date with time start and end. 
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_training_recs', // Including a field at this level saves all data in a serialized array.
  'label' => __('Recommendations', 'mro-cert'),
  'description' => __('One recommendation per line. Each line will be a bullet point.', 'mro-cert'),
  'add_more' => true,
  'fields' => array(
    array(
      'type' => 'textarea',
      'field' => 'rec',
      // 'label' => __('One recommendation per line', 'mro-cert'),
      'attributes' => array(
        'rows' => 3,
        'cols' => 50,
        'class' => 'large-text',
      ),
    ),
  ),
));



piklist('field', array(
  'type' => 'group',
  'field' => 'mro_training_certification', // Including a field at this level saves all data in a serialized array.
  'label' => __('Certification', 'mro-cert'),
  'description' => __('Each line will be a bullet point.', 'mro-cert'),
  'add_more' => true,
  'fields' => array(
    array(
      'type' => 'textarea',
      'field' => 'point',
      // 'label' => __('One recommendation per line', 'mro-cert'),
      'attributes' => array(
        'rows' => 3,
        'cols' => 50,
        'class' => 'large-text',
      ),
    ),
  ),
));


piklist('field', array(
  'type' => 'group',
  // 'field' => 'mro_training_teachers', // Including a field at this level saves all data in a serialized array.
  'label' => __('Teachers', 'mro-cert'),
  // 'description' => __('Each line will be a bullet point.', 'mro-cert'),
  'add_more' => false,
  'fields' => array(
    array(
      'type' => 'editor',
      'field' => 'mro_training_teachers',
      'label' => __('Teachers', 'mro-cert'),
      'description' => __('Information about the teachers.', 'mro-cert'),
      'options' => array(
        'media_buttons' => false,
        'teeny' => true,
        'textarea_rows' => 5,
        'drag_drop_upload' => false,
        'tinymce' => array(
          'resize' => false,
          'wp_autoresize_on' => true,
        ),
      ),
    ),
    array(
      'type' => 'file',
      'field' => 'mro_training_teachers_image',
      'scope' => 'post_meta',
      'label' => __('Image to go with teachers', 'mro-cert'),
      'attributes' => array(
        'data-multiple' => false,
      ),
    ),
  ),
));