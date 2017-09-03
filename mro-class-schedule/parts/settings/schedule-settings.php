<?php
/*
Title: Bloques de clases
Setting: mro_class_schedule_settings
Tab: Basic
*/





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