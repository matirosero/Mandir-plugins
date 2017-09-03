<?php
/*
Title: Clases viernes
Order: 10
Tab: Viernes
Setting: mro_schedule_tabs
Flow: Schedule Workflow
*/

//Friday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_friday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Friday blocks', 'mro-class-schedule'),
  'description' => __('Create Friday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_friday'),
));