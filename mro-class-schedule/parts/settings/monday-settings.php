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


// Store the repeatable block in array
$repeatable_fields = array(

    //Select what will go in this space
    array(
      'type' => 'select',
      'field' => 'type',
      'label' => __('Choose type', 'piklist-demo'),
      'columns' => 6,
      'choices' => array(
        'class' => __('Class', 'piklist-demo'),
        'event' => __('Event', 'piklist-demo'),
        'manual' => __('Manual entry', 'piklist-demo'),
      ),
    ),

    //Select class
    array(
      'type' => 'select',
      'field' => 'class_id',
      'label' => __('Choose class', 'piklist-demo'),
      'columns' => 6,
      'choices' => $classes,
      'conditions' => array(
        array(
          'field' => 'mro_schedule_monday:type',
          'value' => 'class',
        ),
      ),
    ),

    //Select class
    array(
      'type' => 'select',
      'field' => 'team_id',
      'label' => __('Choose teacher', 'piklist-demo'),
      'columns' => 12,
      'choices' => mro_class_schedule_get_teachers('regular'),
      'conditions' => array(
        array(
          'field' => 'mro_schedule_monday:type',
          'value' => 'class',
        ),
      ),
    ),

    // Select event
    array(
      'type' => 'select',
      'field' => 'event_id',
      'label' => __('Choose event', 'piklist-demo'),
      'columns' => 12,
      'choices' => $events,
      'conditions' => array(
        array(
          'field' => 'mro_schedule_monday:type',
          'value' => 'event',
        ),
      ),
    ),

		//Enter manual block name
		array(
      'type' => 'text',
      'field' => 'manual_block_name',
      'label' => __('-OR- enter manually', 'piklist-demo'),
      'columns' => 6,
      'conditions' => array(
        array(
          'field' => 'mro_schedule_monday:type',
          'value' => 'manual',
        ),
      ),
    ),

    //Select class
    array(
      'type' => 'select',
      'field' => 'event_teacher_id',
      'label' => __('Choose teacher', 'piklist-demo'),
      'columns' => 12,
      'choices' => mro_class_schedule_get_teachers('taller'),
      'conditions' => array(
        array(
          'field' => 'mro_schedule_monday:type',
          'value' => array('event','manual'),
        ),
      ),
    ),


    //Enter manual teacher name
    array(
      'type' => 'text',
      'field' => 'manual_teacher_name',
      'label' => __('Teacher\s name', 'piklist-demo'),
      'columns' => 6,
      'conditions' => array(
        'relation' => 'or',
        array(
          'field' => 'mro_schedule_monday:event_teacher_id',
          'value' => 'other',
        ),
        array(
          'field' => 'mro_schedule_monday:team_id',
          'value' => 'other',
        ),
      ),
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

