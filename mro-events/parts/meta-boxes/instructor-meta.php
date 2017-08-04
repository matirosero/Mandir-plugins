<?php
/*
Title: Profesor
Post Type: mro-event
Context: normal
Priority: high
Order: 2
*/

// piklist('field', array(
//     'type' => 'post-relate'
//     ,'scope' => 'mro-team'
//     ,'template' => 'field'
//   ));

 piklist('field', array(
    'type' => 'checkbox',
    'field' => 'mro_event_instructor',
    'label' => __('Event instructor', 'mro-events'),
    'choices' => piklist(
      get_posts(array(
        'post_type' => 'mro-team',
        'numberposts' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
					array(
						'taxonomy' => 'mro_team_tax',
						'field'    => 'slug',
						'terms'    => 'taller',
					),
				),
      )),
      array('ID', 'post_title')
    ),
    'relate' => array(
      'scope' => 'post'
    )
  ));

 