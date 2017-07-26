<?php

//Certification dates
function training_dates() {
	piklist('field', array(
	  'type' => 'group',
	  'label' => __('Course dates', 'mro-pages'),
	  // 'description' => __('Add as many dates as needed.', 'mro-pages'),
	  'add_more' => false,
	  'fields' => array(
	    array(
	      'type' => 'datepicker',
	      'field' => 'mro_training_date_start',
	      'label' => __('Date start', 'mro-pages'),
	      'columns' => 6,
	      'options' => array(
	        'dateFormat' => 'yy-mm-dd',
	      ),
	    ),
	    array(
	      'type' => 'datepicker',
	      'field' => 'mro_training_date_end',
	      'label' => __('Date end', 'mro-pages'),
	      'columns' => 6,
	      'options' => array(
	        'dateFormat' => 'yy-mm-dd',
	      ),
	    ),
	    array(
	      'type' => 'radio',
	      'field' => 'mro_training_exact_dates',
	      // 'label' => __('Fechas exactas', 'mro-pages'),
	      'value' => 1,
	      'choices' => array(
	        0 => __('Mostrar únicamente meses', 'mro-pages'),
	        1 => __('Mostrar fechas exactas', 'mro-pages'),
	      ),
	    ),
	  ),
	));
}

//Orientation meeting
function training_orientation() {
	piklist('field', array(
	  'type' => 'group',
	  'label' => __('Orientation', 'mro-pages'),
	  // 'description' => __('Add as many dates as needed.', 'mro-pages'),
	  'add_more' => false,
	  'fields' => array(

	    array(
	      'type' => 'datepicker',
	      'field' => 'mro_training_orientation_date',
	      'label' => __('Date', 'mro-pages'),
	      'columns' => 6,
	      'options' => array(
	        'dateFormat' => 'yy-mm-dd',
	      ),
	    ),
	    array(
	      'type' => 'time',
	      'field' => 'mro_training_orientation_time',
	      'label' => __('Time', 'mro-pages'),
	      'columns' => 6,
	    ),
	    array(
	      'type' => 'checkbox',
	      'field' => 'mro_training_show_orientation',
	      // 'label' => __('Fechas exactas', 'mro-pages'),
	      // 'value' => 0,
	      'choices' => array(
	        1 => __('Mostrar orientación', 'mro-pages'),
	      ),
	    ),
	  ),
	));
}

//Recommendations
function training_recs() {
	piklist('field', array(
	  'type' => 'group',
	  'field' => 'mro_training_recs', // Including a field at this level saves all data in a serialized array.
	  'label' => __('Recommendations', 'mro-pages'),
	  'description' => __('One recommendation per line. Each line will be a bullet point.', 'mro-pages'),
	  'add_more' => true,
	  'fields' => array(
	    array(
	      'type' => 'textarea',
	      'field' => 'rec',
	      // 'label' => __('One recommendation per line', 'mro-pages'),
	      'attributes' => array(
	        'rows' => 3,
	        'cols' => 50,
	        'class' => 'large-text',
	      ),
	    ),
	  ),
	));
}

//Course includes
function training_includes() {
	piklist('field', array(
	  'type' => 'group',
	  'field' => 'mro_training_includes', // Including a field at this level saves all data in a serialized array.
	  'label' => __('Includes', 'mro-pages'),
	  'description' => __('Each line will be a bullet point.', 'mro-pages'),
	  'add_more' => true,
	  'fields' => array(
	    array(
	      'type' => 'textarea',
	      'field' => 'point',
	      // 'label' => __('One recommendation per line', 'mro-pages'),
	      'attributes' => array(
	        'rows' => 3,
	        'cols' => 50,
	        'class' => 'large-text',
	      ),
	    ),
	  ),
	));
}

//Diploma characteristics
function training_diploma() {
	piklist('field', array(
	  'type' => 'group',
	  'field' => 'mro_training_certification', // Including a field at this level saves all data in a serialized array.
	  'label' => __('Certification', 'mro-pages'),
	  'description' => __('Each line will be a bullet point.', 'mro-pages'),
	  'add_more' => true,
	  'fields' => array(
	    array(
	      'type' => 'textarea',
	      'field' => 'point',
	      // 'label' => __('One recommendation per line', 'mro-pages'),
	      'attributes' => array(
	        'rows' => 3,
	        'cols' => 50,
	        'class' => 'large-text',
	      ),
	    ),
	  ),
	));
}


//Certification teachers
function training_teachers() {
	piklist('field', array(
	  'type' => 'group',
	  // 'field' => 'mro_training_teachers', // Including a field at this level saves all data in a serialized array.
	  'label' => __('Teachers', 'mro-pages'),
	  // 'description' => __('Each line will be a bullet point.', 'mro-pages'),
	  'add_more' => false,
	  'fields' => array(
	    array(
	      'type' => 'editor',
	      'field' => 'mro_training_teachers',
	      'label' => __('Teachers', 'mro-pages'),
	      'description' => __('Information about the teachers.', 'mro-pages'),
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
	    array(
	      'type' => 'file',
	      'field' => 'mro_training_teachers_image',
	      'scope' => 'post_meta',
	      'label' => __('Image to show in this section', 'piklist-demo'),
	      'attributes' => array(
	        'data-multiple' => false,
	      ),
	    ),
	  ),
	));
}

