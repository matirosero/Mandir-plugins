<?php
/*
Title: Clases martes
Order: 10
Tab: Martes
Setting: mro_schedule_tabs
Flow: Schedule Workflow
*/


//Tuesday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_tuesday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Tuesday blocks', 'mro-class-schedule'),
  'description' => __('Create Tuesday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_tuesday'),
));