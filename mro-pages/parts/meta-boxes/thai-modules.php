<?php
/*
Title: Módulos
Post Type: page
Context: normal
Priority: high
Order: 5
Template: page-templates/template-thai
*/

// Build teachers array
function mro_training_get_teachers($terms) {
  $teachers = get_posts(
    array(
      'post_type' => 'mro-team',
      'orderby' => 'title',
      'order' => 'ASC',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'mro_team_tax',
          'field'    => 'slug',
          'terms'    => $terms,
        ),
      ),
    ), 'objects');

	$teachers = piklist($teachers, array('ID', 'post_title'));
	$teachers = mro_training_build_choices($teachers,true);

  return $teachers;
}


// Return an array formatted for select field
function mro_training_build_choices($choices,$manual_option=false) {
	foreach ($choices as $value => $choice):
		if ($choice === ''):
			$choices[$value] = sprintf(__('#%d (no title)'), $value);
		endif;
	endforeach;

	$choices = array_replace(array('' => '&mdash; Select &mdash;'), $choices);

	if ($manual_option==true) :
		$choices['other'] = __('Other (enter manually)', 'mro-pages');
	endif;

	return $choices;
}


piklist('field', array(
	'type' => 'group',
	'field' => 'mro_training_modules',
	'label' => __('Módulos', 'mro-pages'),
	'add_more' => true,
	'fields' => array(
		array(
			'type' => 'text',
			'field' => 'title',
			'label' => __('Module name', 'mro-pages'),
			'columns' => 12,
		),
		array(
			'type' => 'textarea',
			'field' => 'description',
			'label' => __('Description', 'mro-pages'),
			'columns' => 12,
			'attributes' => array(
				'rows' => 5,
			),
		),
		array(
			'type' => 'textarea',
			'field' => 'who',
			'label' => __('Who this course is for', 'mro-pages'),
			'columns' => 12,
			'attributes' => array(
				'rows' => 5,
			),
		),
		array(
			'type' => 'checkbox',
			'field' => 'certificate',
			'label' => __('Certificate issued by', 'mro-pages'),
			'columns' => 12,
			'list' => false,
			'choices' => array(
				'Escuela Yoga Mandir',
				'The Sunshine Network',
	        ),
		),

	    //Select teacher
	    array(
	      'type' => 'select',
	      'field' => 'teacher_id',
	      'label' => __('Choose teacher', 'mro-pages'),
	      'columns' => 4,
	      'choices' => mro_training_get_teachers('masaje-tailandes'),
	    ),

	    //Enter manual teacher name
	    // array(
	    //   'type' => 'textarea',
	    //   'field' => 'manual_teacher',
	    //   'label' => __('Teacher\'s name', 'mro-pages'),
	    //   'columns' => 12,
	    //   'conditions' => array(
	    //     array(
	    //       'field' => $group.'teacher_id',
	    //       'value' => 'other',
	    //     ),
	    //   ),
	    // ),

		array(
			'type' => 'group',
			'field' => 'level',
			'add_more' => true,
			'label' => __('Levels in this module', 'mro-pages'),
			'fields' => array(
				array(
					'type' => 'text',
					'field' => 'level_title',
					'label' => __('Level', 'mro-pages'),
					'columns' => 12,
				),

				array(
					'type' => 'datepicker',
					'field' => 'date_start',
					'label' => __('Date start', 'mro-pages'),
					'columns' => 6,
					'options' => array(
						'dateFormat' => 'yy-mm-dd',
					),
				),
				array(
					'type' => 'datepicker',
					'field' => 'date_end',
					'label' => __('Date end', 'mro-pages'),
					'columns' => 6,
					'options' => array(
						'dateFormat' => 'yy-mm-dd',
					),
				),

				array(
					'type' => 'editor',
					'field' => 'curriculum',
					'label' => __('Curriculum', 'mro-pages'),
					'columns' => 12,
					'options' => array(
						'media_buttons' => false,
						'teeny' => true,
						'textarea_rows' => 5,
						'drag_drop_upload' => false,
						'tinymce' => array(
							'resize' => false,
							'wp_autoresize_on' => true,
						),
					),
				),
			),
		),
	),
));