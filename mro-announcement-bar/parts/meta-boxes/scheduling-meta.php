<?php
/*
Title: Scheduling
Post Type: mro-announcement
Priority: high
*/

piklist('field', array(
	'type' => 'group',
	'label' =>  __('Announcement dates (Grouped)', 'mro-announcement'),
	'list' => false,
	'fields' => array (
	  array (
		  'type' => 'datepicker',
		  'field' => 'mro_announcement_date_start',
		  'label' => __('Date start', 'mro-announcement'),
		  'columns' => 6,
		  // 'value' => date('M d, Y', time() + 604800), // set default value
		  'options' => array(
		    'dateFormat' => 'yy-mm-dd', //was M d, yy
			),
	  ),
	  array (
		  'type' => 'datepicker',
		  'field' => 'mro_announcement_date_end',
		  'label' => __('Date end', 'mro-announcement'),
		  'columns' => 6,
		  // 'value' => date('M d, Y', time() + 604800), // set default value
		  'options' => array(
		    'dateFormat' => 'yy-mm-dd',
			),
	  ),
	),
));

piklist('field', array(
  'type' => 'checkbox',
  'field' => 'mro_announcement_active',
  // 'label' => __('Active', 'mro-announcement'),
  'choices' => array (
  	1 => 'Active'
  )
));