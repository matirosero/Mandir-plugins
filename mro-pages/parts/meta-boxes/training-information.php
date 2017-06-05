<?php
/*
Title: Información
Post Type: page
Context: normal
Priority: high
Order: 3
Template: page-templates/template-training
*/


  piklist('field', array(
    'type' => 'editor'
    ,'field' => 'post_content'
    ,'scope' => 'post'
    ,'label' => __('Introduction', 'mro-pages')
    // ,'add_more' => true
    ,'description' => __('Basic information, goes under title.')
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
  'label' => __('Recommendations', 'mro-pages'),
  'description' => __('One recommendation per line. Each line will be a bullet point.', 'mro-pages'),
  'add_more' => true,
  'fields' => array(
    array(
      'type' => 'textarea',
      'field' => 'rec',
      // 'label' => __('One recommendation per line', 'mro-pages'),
      'attributes' => array(
        'rows' => 3,
        'cols' => 50,
        'class' => 'large-text',
      ),
    ),
  ),
));

// Repeater: date with time start and end. 
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_training_certification', // Including a field at this level saves all data in a serialized array.
  'label' => __('Certification', 'mro-pages'),
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


  piklist('field', array(
    'type' => 'editor'
    ,'field' => 'mro_training_teachers'
    ,'label' => __('Teachers', 'mro-pages')
    // ,'add_more' => true
    ,'description' => __('Information about the teachers.', 'mro-pages')
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


