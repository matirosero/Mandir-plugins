<?php
/*
Title: Clases lunes
Order: 10
Tab: Lunes
Setting: mro_schedule_tabs
Flow: Schedule Workflow
*/
?>

<?php

piklist('field', array(
	'type' => 'group',
  'field' => 'mro_schedule_monday', // Including a field at this level saves all data in a serialized array.
  'label' => __('Monday blocks', 'mro-class-schedule'),
  'description' => __('Create Monday blocks.', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => mro_schedule_fields_array('mro_schedule_monday'),
));