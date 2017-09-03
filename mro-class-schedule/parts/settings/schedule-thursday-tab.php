<?php
/*
Title: Clases jueves
Order: 10
Tab: Jueves
Setting: mro_schedule_tabs
Flow: Schedule Workflow
*/

//Thursday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_thursday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Thursday blocks', 'mro-class-schedule'),
  'description' => __('Create Thursday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_thursday'),
));