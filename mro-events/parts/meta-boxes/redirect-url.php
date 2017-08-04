<?php
/*
Title: Redireccionar
Post Type: mro-event
Context: side
Priority: low
Order: 0
*/

 piklist('field', array(
    'type' => 'checkbox',
    'field' => 'mro_event_redirect',
    'label' => __('Choose what page to redirect to', 'mro-events'),
    'choices' => piklist(
      get_posts(
        array(
          'post_type' => 'page',
          'numberposts' => -1,
          'orderby' => 'title',
          'order' => 'ASC',
          'tag' => 'eventos',
        ),
        'objects'
       ),
       array(
        'ID',
        'post_title'
       )
    ),
    // 'choices' => array('none' => 'NONE CHOSEN') + piklist(
    //   get_posts(
    //     array(
    //       'post_type' => 'page',
    //       'numberposts' => -1,
    //       'orderby' => 'title',
    //       'order' => 'ASC',
    //       'tag' => 'eventos',
    //     ),
    //     'objects'
    //    ),
    //    array(
    //     'ID',
    //     'post_title'
    //    )
    // ),
    'relate' => array(
      'scope' => 'post'
    )
  ));
