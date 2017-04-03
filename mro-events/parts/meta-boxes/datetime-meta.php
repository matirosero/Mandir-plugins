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
  'label' => __('Choose: date range or individual dates', 'mro-event'),
  'help' => __('If it is "Jan 1-Jan2" and the schedule is always the same, choose DATE RANGE. If you need to specify different dates and schedules (Jan 1 1-3pm, Jan 2 9-11am), choose INDIVIDUAL DATES.', 'mro-event'),
  'choices' => array(
    'date_range' => __('Date range', 'mro-event'),
    'individual_dates' => __('Individual dates', 'mro-event'),
  ),
  'value' => 'date_range',
));

piklist('field', array(
	'type' => 'group',
	'label' =>  __('Date range', 'mro-event'),
  'description' => __('Same schedule for all dates.', 'mro-event'),
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
    'label' => __('Individual dates', 'mro-event'),
    'description' => __('Add as many dates as needed.', 'mro-event'),
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
        'label' => __('Date', 'mro-event'),
        'columns' => 12,
        'options' => array(
			    'dateFormat' => 'yy-mm-dd',
				),
      )
      ,array(
        'type' => 'time',
        'field' => 'mro_event_time_start',
        'label' => __('Time start', 'mro-event'),
        'columns' => 6,
      )
      ,array(
        'type' => 'time',
        'field' => 'mro_event_time_end',
        'label' => __('Time end', 'mro-event'),
        'columns' => 6,
      )
    )
  ));

