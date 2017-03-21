<?php
/*
Title: Dates
Post Type: mro-event
Context: side
*/

piklist('field', array(
	'type' => 'group',
	'label' =>  __('Dates', 'mro-event'),
	'list' => false,
	'fields' => array (
	  array (
		  'type' => 'datepicker',
		  'field' => 'mro_event_date_start',
		  'label' => __('Date start', 'mro-event'),
		  'columns' => 6,
		  // 'value' => date('M d, Y', time() + 604800), // set default value
		  'options' => array(
		    'dateFormat' => 'yy-mm-dd', //was M d, yy
			),
	  ),
	  array (
		  'type' => 'datepicker',
		  'field' => 'mro_event_date_end',
		  'label' => __('Date end', 'mro-event'),
		  'columns' => 6,
		  // 'value' => date('M d, Y', time() + 604800), // set default value
		  'options' => array(
		    'dateFormat' => 'yy-mm-dd',
			),
	  ),
	),
));

// piklist('field', array(
// 	'type' => 'group',
// 	'label' =>  __('Times', 'mro-event'),
// 	'list' => false,
// 	'fields' => array (
// 	  array (
// 		  'type' => 'time',
// 		  'field' => 'mro_event_time_start',
// 		  'label' => __('Time start', 'mro-event'),
// 		  'columns' => 6,
// 		  'description' => 'Choose a time',
// 		  // 'value' => date('M d, Y', time() + 604800), // set default value
// 		  'options' => array(
// 		    'dateFormat' => 'yy-mm-dd', //was M d, yy
// 			),
// 	  ),
// 	  array (
// 		  'type' => 'time',
// 		  'field' => 'mro_event_time_end',
// 		  'label' => __('Time end', 'mro-event'),
// 		  'columns' => 6,
// 		  'description' => 'Choose a time',
// 		  // 'value' => date('M d, Y', time() + 604800), // set default value
// 		  'options' => array(
// 		    'dateFormat' => 'yy-mm-dd',
// 			),
// 	  ),
// 	),
// ));



  piklist('field', array(
    'type' => 'group'
    ,'label' => __('Todo\'s (Group)', 'piklist-demo')
    ,'description' => __('Saves data as individual meta keys.', 'piklist-demo')
    ,'add_more' => true
    ,'fields' => array(
      array(
        'type' => 'datepicker'
        ,'field' => 'mro_event_date'
        ,'label' => __('Date', 'piklist-demo')
        ,'columns' => 12,
        'options' => array(
			    'dateFormat' => 'yy-mm-dd',
				),
      )
      ,array(
        'type' => 'time'
        ,'field' => 'mro_event_time_start'
        ,'label' => __('Time start', 'piklist-demo')
        ,'columns' => 12
      )
      ,array(
        'type' => 'time'
        ,'field' => 'mro_event_time_end'
        ,'label' => __('Time start', 'piklist-demo')
        ,'columns' => 12
      )
    )
  ));

piklist('field', array(
  'type' => 'checkbox',
  'field' => 'mro_announcement_active',
  // 'label' => __('Active', 'mro-announcement'),
  'choices' => array (
  	1 => 'Active'
  )
));