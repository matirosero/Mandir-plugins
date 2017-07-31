<?php
/*
Title: Activades
Order: 20
Tab: Homepage
Setting: mandir_fields
Flow: Mandir Workflow
*/
?>

<div class="piklist-demo-highlight">
  <?php _e('Choose which events will be highlighted on homepage.', 'mro-pages');?>
</div>

<?php
function mro_get_events_home() {
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


piklist('field', array(
  'type' => 'select',
  'field' => 'frontpage_events',
  'label' => __('Select events to show', 'mro-frontpage'),
  'value' => '',
  'choices' => mro_get_events_home(),
  'attributes' => array(
    'multiple' => 'multiple', // This changes a select field into a multi-select field
  ),
));
