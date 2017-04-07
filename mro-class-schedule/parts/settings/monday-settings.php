<?php
/*
Title: Monday Classes
Setting: mro_class_schedule_settings
Tab: Basic
*/






// Build classes array
$classes = get_posts(
	array(
    'post_type' => 'mro-class',
    'orderby' => 'ID',
    'order' => 'ASC',
    'posts_per_page' => -1,
  ), 'objects');

$classes = piklist($classes, array('ID', 'post_title'));
$classes = mro_class_schedule_build_choices($classes);

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


// Build teachers array
$teachers = get_posts(
	array(
    'post_type' => 'mro-team',
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => -1,
    'tax_query' => array(
			array(
				'taxonomy' => 'mro_team_tax',
				'field'    => 'slug',
				'terms'    => 'regular',
			),
		),
  ), 'objects');

$teachers = piklist($teachers, array('ID', 'post_title'));
$teachers = mro_class_schedule_build_choices($teachers);


// Store the repeatable block in array
$repeatable_fields = array(

    //Select class
    array(
      'type' => 'select',
      'field' => 'class_id',
      'label' => __('Choose class', 'piklist-demo'),
      'columns' => 6,
      'choices' => $classes,
    ),

    //Select event
    // array(
    //   'type' => 'select',
    //   'field' => 'event_id',
    //   'label' => __('Choose event', 'piklist-demo'),
    //   'columns' => 12,
    //   'choices' => $events,
    // ),

		//Enter manual block name
		array(
      'type' => 'text',
      'field' => 'manual_block_name',
      'label' => __('-OR- enter manually', 'piklist-demo'),
      'columns' => 6,
    ),

    //Select class
    array(
      'type' => 'select',
      'field' => 'team_id',
      'label' => __('Choose teacher', 'piklist-demo'),
      'columns' => 12,
      'choices' => $teachers,
    ),

    //Time start
    array(
      'type' => 'time',
      'field' => 'time_start',
      'help' => 'Earliest is 7:30',
      'label' => __('Time start', 'mro-events'),
      'columns' => 6,
    ),

    //Time end
    array(
      'type' => 'time',
      'field' => 'time_end',
      'help' => 'Earliest is 20:30',
      'label' => __('Time end', 'mro-events'),
      'columns' => 6,
    ),
  );


/*
 * Actual fields;
 */

//Monday
piklist('field', array(
	'type' => 'group',
  'field' => 'mro_schedule_monday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Monday blocks', 'piklist-demo'),
  'description' => __('Create Monday blocks.', 'piklist-demo'),
  'add_more' => true,
  'fields' => $repeatable_fields,
));

