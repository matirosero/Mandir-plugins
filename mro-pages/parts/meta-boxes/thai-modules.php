<?php
/*
Title: Módulos
Post Type: page
Context: normal
Priority: high
Order: 5
Template: page-templates/template-thai
*/




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
				'Escuela Yoga Mandir' => 'Escuela Yoga Mandir',
				'The Sunshine Network' => 'The Sunshine Network',
	        ),
		),

	    //Select teacher
	    array(
			'type' => 'select',
			'field' => 'teacher_id',
			'label' => __('Choose teacher', 'mro-pages'),
			'help' => __('This will be overriden if you\'ve selected "One teacher for the whole certification"', 'mro-pages'),
			'columns' => 4,
			'choices' => mro_training_get_teachers('masaje-tailandes'),
	    ),

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