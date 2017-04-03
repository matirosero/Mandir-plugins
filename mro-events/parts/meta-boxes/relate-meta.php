<?php
/*
Title: Details
Post Type: mro-event
Context: normal
Priority: high
Order: 1
*/

piklist('field', array(
    'type' => 'post-relate'
    ,'scope' => 'page'
    ,'template' => 'field'
  ));

  piklist('field', array(
    'type' => 'select'
    ,'field' => 'my_relate'
    ,'template'  => 'field'
    ,'label' => 'Relate Posts'
    ,'choices' => array('none' => 'Choose your page') + piklist(
              get_posts(
                 array(
                  'post_type' => 'page'
                  ,'orderby' => 'post_date'
                 )
                 ,'objects'
               )
               ,array(
                 'ID'
                 ,'post_title'
               )
            )
    ,'relate' => array(
      'scope' => 'post'
    )
    ,
  ));

piklist('field', array(
  'type' => 'select2'
  ,'field' => 'select'
  ,'label' => 'Select'
  ,'value' => ''
  ,'choices' => array(
    '' => ''
    ,'first' => 'First Choice'
    ,'second' => 'Second Choice'
    ,'third' => 'Third Choice'
  )
  ,'options' => array(
    'allowClear' => true
    ,'placeholder' => 'Select an Option'
    ,'width' => '200px'
  )
));