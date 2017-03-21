<?php
/*
Title: Dates
Post Type: mro-event
Context: normal
Priority: high
Order: 1
*/

piklist('field', array(
  'type' => 'select',
  'field' => 'mro_event_date_select',
  'label' => __('Choose: date range or individual dates', 'piklist-demo'),
  'choices' => array(
    'date_range' => __('Date range', 'piklist-demo'),
    'individual_dates' => __('Individual dates', 'piklist-demo'),
  ),
  'value' => 'date_range',
));

piklist('field', array(
	'type' => 'group',
	'label' =>  __('Date range', 'mro-event'),
  'description' => __('Same schedule for all dates.', 'piklist-demo'),
	'list' => false,
  'conditions' => array(
      array(
        'field' => 'mro_event_date_select'
        ,'value' => 'date_range'
      )
    ),
	'fields' => array (
	  array (
		  'type' => 'datepicker',
		  'field' => 'mro_event_date_start',
		  'label' => __('Date start', 'mro-event'),
		  'columns' => 12,
		  // 'value' => date('M d, Y', time() + 604800), // set default value
		  'options' => array(
		    'dateFormat' => 'yy-mm-dd', //was M d, yy
			),
	  ),
	  array (
		  'type' => 'datepicker',
		  'field' => 'mro_event_date_end',
		  'label' => __('Date end', 'mro-event'),
		  'columns' => 12,
		  // 'value' => date('M d, Y', time() + 604800), // set default value
		  'options' => array(
		    'dateFormat' => 'yy-mm-dd',
			),
	  ),
	  array (
		  'type' => 'time',
		  'field' => 'mro_event_time_start_all',
		  'label' => __('Time start', 'mro-event'),
		  'columns' => 6,
		  'description' => 'Choose a time',
	  ),
	  array (
		  'type' => 'time',
		  'field' => 'mro_event_time_end_all',
		  'label' => __('Time end', 'mro-event'),
		  'columns' => 6,
		  'description' => 'Choose a time',
	  ),
	),
));



  piklist('field', array(
    'type' => 'group',
    'label' => __('Individual dates', 'piklist-demo'),
    'description' => __('Add as many dates as needed.', 'piklist-demo'),
    'add_more' => true,
    'conditions' => array(
      array(
        'field' => 'mro_event_date_select',
        'value' => 'individual_dates'
      ),
    ),
    'fields' => array(
      array(
        'type' => 'datepicker',
        'field' => 'mro_event_date',
        'label' => __('Date', 'piklist-demo'),
        'columns' => 12,
        'options' => array(
			    'dateFormat' => 'yy-mm-dd',
				),
      )
      ,array(
        'type' => 'time',
        'field' => 'mro_event_time_start',
        'label' => __('Time start', 'piklist-demo'),
        'columns' => 6,
      )
      ,array(
        'type' => 'time',
        'field' => 'mro_event_time_end',
        'label' => __('Time end', 'piklist-demo'),
        'columns' => 6,
      )
    )
  ));

