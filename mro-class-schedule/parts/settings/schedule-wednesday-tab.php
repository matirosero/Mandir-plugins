<?php
/*
Title: Clases miércoles
Order: 10
Tab: Miercoles
Setting: mro_schedule_tabs
Flow: Schedule Workflow
*/

//Wednesday
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_schedule_wednesday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Wednesday blocks', 'mro-class-schedule'),
  'description' => __('Create Wednesday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_wednesday'),
));