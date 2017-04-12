<?php
/*
Title: Events
Setting: my_theme_settings
Order: 3
*/

function mro_home_get_events() {
  $today = date('Y-m-d');
  $firstofmonth = date('Y-m-01');
  // Build events array
  $events = get_posts(
    array(
      'post_type' => 'mro-event',
      'orderby' => 'by_dates',
      'order' => 'ASC',
      'posts_per_page' => -1,
      'meta_query'     => array(
        'by_dates' => array(
          'key' => 'mro_event_date',
          'value' => $firstofmonth,
          'type' => 'DATE',
          'compare' => '>=', // If date in DB is BEFORE today
        ),
      ),
    ), 'objects');

  $events = piklist($events, array('ID', 'post_title'));
  $events = mro_class_schedule_build_choices($events);

  return $events;
}

  piklist('field', array(
    'type' => 'select'
    ,'field' => 'mro_multiselect'
    ,'label' => __('Multiselect', 'piklist-demo')
    ,'value' => 'third'
    ,'choices' => mro_home_get_events()
    ,'attributes' => array(
      'multiple' => 'multiple' // This changes a select field into a multi-select field
    )
  ));



  piklist('field', array(
    'type' => 'text'
    ,'field' => 'text'
    ,'label' => __('Text', 'piklist-demo')
    ,'help' => __('You can easily add tooltips to your fields with the help parameter.', 'piklist-demo')
    ,'attributes' => array(
      'class' => 'regular-text'
    )
  ));