<?php
/*
Title: Clases sábado
Order: 10
Tab: Sabado
Setting: mro_schedule_tabs
Flow: Schedule Workflow
*/

//Saturday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_saturday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Saturday blocks', 'mro-class-schedule'),
  'description' => __('Create Saturday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_saturday'),
));