<?php
/*
Title: Bloques de clases
Setting: mro_class_schedule_settings
Tab: Basic
*/


function mro_schedule_get_classes() {
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

  return $classes;
}


function mro_schedule_get_events() {
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





function mro_schedule_fields_array($group) {
  // Store the repeatable block in array
  $repeatable_fields = array(

    //Select what will go in this space
    array(
      'type' => 'select',
      'field' => 'type',
      'label' => __('Choose type', 'mro-class-schedule'),
      'columns' => 12,
      'choices' => array(
        'class' => __('Class', 'mro-class-schedule'),
        'event' => __('Event', 'mro-class-schedule'),
        'manual' => __('Manual entry', 'mro-class-schedule'),
      ),
    ),

    //Select class
    array(
      'type' => 'select',
      'field' => 'class_id',
      'label' => __('Choose class', 'mro-class-schedule'),
      'columns' => 4,
      'choices' => mro_schedule_get_classes(),
      'conditions' => array(
        array(
          'field' => $group.':type',
          'value' => 'class',
        ),
      ),
    ),

    //Select teacher
    array(
      'type' => 'select',
      'field' => 'class_teacher_id',
      'label' => __('Choose teacher', 'mro-class-schedule'),
      'columns' => 4,
      'choices' => mro_class_schedule_get_teachers('regular'),
      'conditions' => array(
        array(
          'field' => $group.':type',
          'value' => 'class',
        ),
      ),
    ),

    // Select event
    array(
      'type' => 'select',
      'field' => 'event_id',
      'label' => __('Choose event', 'mro-class-schedule'),
      'columns' => 4,
      'choices' => mro_schedule_get_events(),
      'conditions' => array(
        array(
          'field' => $group.':type',
          'value' => 'event',
        ),
      ),
    ),

    //Enter manual block name
    array(
      'type' => 'text',
      'field' => 'manual_block_name',
      'label' => __('Enter class/event name', 'mro-class-schedule'),
      'columns' => 4,
      'conditions' => array(
        array(
          'field' => $group.':type',
          'value' => 'manual',
        ),
      ),
    ),

    //Select class
    array(
      'type' => 'select',
      'field' => 'event_teacher_id',
      'label' => __('Choose teacher', 'mro-class-schedule'),
      'columns' => 4,
      'choices' => mro_class_schedule_get_teachers('taller'),
      'conditions' => array(
        array(
          'field' => $group.':type',
          'value' => array('event','manual'),
        ),
      ),
    ),


    //Enter manual teacher name
    array(
      'type' => 'text',
      'field' => 'manual_teacher_name',
      'label' => __('Teacher\'s name', 'mro-class-schedule'),
      'columns' => 4,
      'conditions' => array(
        'relation' => 'or',
        array(
          'field' => $group.':event_teacher_id',
          'value' => 'other',
        ),
        array(
          'field' => $group.':class_teacher_id',
          'value' => 'other',
        ),
      ),
    ),

    //Time start
    array(
      'type' => 'time',
      'field' => 'time_start',
      'help' => 'Earliest is 7:30',
      'label' => __('Time start', 'mro-class-schedule'),
      'columns' => 6,
    ),

    //Time end
    array(
      'type' => 'time',
      'field' => 'time_end',
      'help' => 'Earliest is 20:30',
      'label' => __('Time end', 'mro-class-schedule'),
      'columns' => 6,
    ),
  );

  return $repeatable_fields;
}



/*
 * Actual fields;
 */

//Monday
piklist('field', array(
	'type' => 'group',
  'field' => 'mro_schedule_monday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Monday blocks', 'mro-class-schedule'),
  'description' => __('Create Monday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_monday'),
));

//Tuesday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_tuesday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Tuesday blocks', 'mro-class-schedule'),
  'description' => __('Create Tuesday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_tuesday'),
));

//Wednesday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_wednesday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Wednesday blocks', 'mro-class-schedule'),
  'description' => __('Create Wednesday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_wednesday'),
));

//Thursday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_thursday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Thursday blocks', 'mro-class-schedule'),
  'description' => __('Create Thursday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_thursday'),
));

//Friday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_friday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Friday blocks', 'mro-class-schedule'),
  'description' => __('Create Friday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_friday'),
));

//Saturday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_saturday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Saturday blocks', 'mro-class-schedule'),
  'description' => __('Create Saturday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_saturday'),
));