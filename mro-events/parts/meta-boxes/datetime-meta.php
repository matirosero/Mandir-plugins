<?php
/*
Title: Fechas
Post Type: mro-event
Context: normal
Priority: high
Order: 1
*/


//Whether to show as date range
piklist('field', array(
  'type' => 'checkbox',
  'field' => 'mro_daterange_checkbox',
  'label' => __('Date range?', 'mro-events'),
  'value' => 0,
  'choices' => array(
    1 => __('If enabled and only 2 dates exist, they will be shown as a date range.', 'mro-events'),
  ),
  'help' => __('If you specifiy only 2 dates and check this, they will be shown as a date range: "Jan 1-Jan2". Otherwise it is asummed that the dates should be listed individually: Jan 1 and January 2.', 'mro-events'),
));