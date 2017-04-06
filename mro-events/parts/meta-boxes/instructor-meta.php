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

  // Displaying your related posts is as simple as using WP_Query with one extra parameter, post_belongs
  $related = get_posts(array(
    'post_type' => 'mro-team',
    'posts_per_page' => -1,
    'post_belongs' => $post->ID,
    'post_status' => 'publish',
    'suppress_filters' => false
  ));

?>

  <?php if ($related): ?>

    <h4><?php _e('Related Posts', 'piklist-demo');?></h4>
    
    <p>
      <?php _e('See the code in the file for the query example.'); ?>
    </p>
    
    <ol>
      <?php foreach ($related as $related_post): ?>
        <li><?php _e($related_post->post_title); ?></li>
      <?php endforeach; ?>
    </ol>

    <hr />

  <?php endif;
  

  piklist('shared/code-locater', array(
    'location' => __FILE__,
    'type' => 'Meta Box'
  ));