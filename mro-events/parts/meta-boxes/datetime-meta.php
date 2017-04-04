<?php
/*
Title: Fechas
Post Type: mro-event
Context: normal
Priority: high
Order: 1
*/



//WHether to show as date range
piklist('field', array(
  'type' => 'checkbox',
  'field' => 'mro_daterange_checkbox',
  'label' => __('Date range?', 'mro-events'),
  'value' => 0,
  'choices' => array(
    1 => __('If enabled and only 2 dates exist, they will be shown as a date range.', 'mro-events'),
  ),
  'help' => __('If you specifiy only 2 dates and check this, they will be shown as a date range: "Jan 1-Jan2". Otherwise it is asummed that the dates should be listed individually: Jan 1 and January 2.', 'mro-events'),
));

//Same time for all dates?
// piklist('field', array(
//   'type' => 'radio'
//   ,'field' => 'mro_event_same_time_all'
//   ,'label' => __('Same time for all dates?', 'mro-events')
//   ,'value' => 0
//   ,'choices' => array(
//     1 => __('Yes', 'mro-events'),
//   ),
// ));

//   piklist('field', array(
//     'type' => 'text'
//     ,'field' => 'show_hide_field_checkbox'
//     ,'label' => __('Show/Hide Field', 'piklist-demo')
//     ,'description' => __('This field is toggled by the Checkbox field above', 'piklist-demo')
//     ,'conditions' => array(
//       array(
//         'field' => 'mro_event_same_time_all'
//         ,'value' => 1
//       )
//     )
//   ));




//Individual dates repeater fields
  piklist('field', array(
    'type' => 'group',
    'label' => __('Individual dates', 'mro-events'),
    'description' => __('Add as many dates as needed.', 'mro-events'),
    'add_more' => true,
    'fields' => array(
      array(
        'type' => 'datepicker',
        'field' => 'mro_event_date',
        'label' => __('Date', 'mro-events'),
        'columns' => 12,
        'options' => array(
			    'dateFormat' => 'yy-mm-dd',
				),
      ),
      array(
        'type' => 'time',
        'field' => 'mro_event_time_start',
        'label' => __('Time start', 'mro-events'),
        'columns' => 6,
      ),
      array(
        'type' => 'time',
        'field' => 'mro_event_time_end',
        'label' => __('Time end', 'mro-events'),
        'columns' => 6,
      ),
    ),
  ));

