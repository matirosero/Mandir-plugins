<?php

//Open or closed
function training_state() {
  piklist('field', array(
    'type' => 'radio',
    'field' => 'mro_training_state',
    'label' => __('Enrollment state', 'mro-pages'),
    'value' => '0',
    'choices' => array(
      0 => __('Enrollment closed', 'mro-pages'),
      1 => __('Enrollment open', 'mro-pages'),
    ),
  ));
}


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

//Enrolling
function training_enroll() {
	piklist('field', array(
	  'type' => 'group',
	  'field' => 'mro_training_howtoenroll', // Including a field at this level saves all data in a serialized array.
	  'label' => __('How to enroll', 'mro-pages'),
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


//Schedule
function training_schedule_simple() {
	piklist('field', array(
	  'type' => 'group',
	  'field' => 'mro_training_schedule', // Use _types as base.
	  'label' => __('Schedule', 'mro-pages'),
	  // 'description' => __('Each line will be a bullet point.', 'mro-pages'),
	  'add_more' => false,
	  'fields' => array(
	    array(
	      'type' => 'time',
	      'field' => 'time_start',
	      'label' => __('Time start', 'mro-pages'),
	      'columns' => 6,
	    ),
	    array(
	      'type' => 'time',
	      'field' => 'time_end',
	      'label' => __('Time end', 'mro-pages'),
	      'columns' => 6,
	    ),
	    array(
	      'type' => 'checkbox',
	      'field' => 'days',
	      'label' => __('Days', 'mro-pages'),
	      'columns' => 12,
	      // 'value' => 2,
	      // 'list' => false,
	      'choices' => array(
	        'lunes' => __('Monday', 'mro-pages'),
	        'martes' => __('Tuesday', 'mro-pages'),
	        'miércoles' => __('Wednesday', 'mro-pages'),
	        'jueves' => __('Thursday', 'mro-pages'),
	        'viernes' => __('Friday', 'mro-pages'),
	        'sábado' => __('Saturday', 'mro-pages'),
	        'domingo' => __('Sunday', 'mro-pages'),
	      ),
	    ),
	    array(
	      'type' => 'textarea',
	      'field' => 'notes',
	      'label' => __('Additional notes', 'mro-pages'),
	      // 'description' => 'class="large-text code" rows="10" columns="50"',
	      // ,'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
	      'attributes' => array(
	        'rows' => 5,
	        'cols' => 50,
	        'class' => 'large-text',
	      ),
	    ),
	  ),
	));
}


//Calendar
function training_calendar() {
	piklist('field', array(
	  'type' => 'group',
	  'field' => 'mro_training_calendar', // Use _types as base.
	  'label' => __('Calendar', 'mro-pages'),
	  // 'description' => __('Each line will be a bullet point.', 'mro-pages'),
	  'add_more' => true,
	  'fields' => array(
	    array(
	      'type' => 'text',
	      'field' => 'title',
	      'label' => __('Title', 'mro-pages'),
	      'columns' => 12,
	    ),
	    array(
	      'type' => 'datepicker',
	      'field' => 'date',
	      'label' => __('Date', 'mro-pages'),
	      'columns' => 4,
	      'options' => array(
	        'dateFormat' => 'yy-mm-dd',
	      ),
	    ),
	    array(
	      'type' => 'time',
	      'field' => 'time_start',
	      'label' => __('Time start', 'mro-pages'),
	      'columns' => 4,
	    ),
	    array(
	      'type' => 'time',
	      'field' => 'time_end',
	      'label' => __('Time end', 'mro-pages'),
	      'columns' => 4,
	    ),
	  ),
	));
}


//Pricing
function training_pricing() {
	
	//USE EVENTS AS BASE

	// Select currency symbol
	piklist('field', array(
	  'type' => 'radio',
	  'field' => 'mro_training_currency',
	  'label' => __('Currency', 'mro-pages'),
	  'help' => __('This controlls what symbol is appended to the price.', 'mro-pages'),
	  'choices' => array(
	    '$' => __('US dollars ($)', 'mro-pages'),
	    '₡' => __('CR colones (₡)', 'mro-pages'),
	  ),
	  'value' => '$',
	));


	// Regular price
	piklist('field', array(
	  'type' => 'text',
	  'field' => 'mro_training_price',
	  'label' => __('Regular price', 'mro-pages'),
	  'description' => __('Must be a number.', 'mro-pages'),
	  'help' => __('Must be "100", "10.5", etc. Not "100 dollars".', 'mro-pages'),
	  'attributes' => array(
	    // 'class' => 'regular-text',
	    'placeholder' => __('100', 'mro-pages'),
	    ),
	  'validate' => array(
	    array(
	      'type' => 'valid_number'
	    )
	  ),
	));


	// Other pricing options
	piklist('field', array(
	  'type' => 'group',
	  'field' => 'mro_training_pricing_options',
	  'label' =>  __('Pricing options', 'mro-pages'),
	  'description' => __('Add as many as needed. Price must be a number.', 'mro-pages'),
	  'list' => false,
	  'add_more' => true,
	  'fields' => array (
	    array (
	      'type' => 'text',
	      'field' => 'price',
	      'label' => __('Price', 'mro-pages'),
	      'help' => __('Must be "100", "10.5", etc. Not "100 dollars".', 'mro-pages'),
	      'attributes' => array(
	        'class' => 'large-text',
	        'placeholder' => __('100', 'mro-pages'),
	        ),
	      'validate' => array(
	        array(
	          'type' => 'valid_number'
	        )
	      ),
	      'columns' => 6,
	    ),
	    array (
	      'type' => 'text',
	      'field' => 'description',
	      'label' => __('Descripción', 'mro-pages'),
	      'attributes' => array(
	        'class' => 'large-text',
	        'placeholder' => __('Early bird price before May 5', 'mro-pages'),
	        ),
	      'columns' => 12,
	    ),
	  ),
	));


	//Pricing notes
	piklist('field', array(
	  'type' => 'textarea',
	  'field' => 'mro_training_pricing_notes',
	  'label' => __('Pricing notes', 'mro-pages'),
	  'description' => __('Further explanation needed to clarify pricing.', 'mro-pages'),
	  'help' => __('For instance, if you need to explain discount conditions, payment schedule, etc.', 'mro-pages'),
	  'attributes' => array(
	    'class' => 'large-text',
	    "maxlength"  => '180',
	    // 'placeholder' => __('i.e. "$100 antes del 1 de mayo"', 'mro-pages'),
	    ),
	));
}


//Duration
function training_duration() {
	piklist('field', array(
	  'type' => 'textarea',
	  'field' => 'mro_training_duration',
	  'label' => __('Duration', 'mro-pages'),
	  'attributes' => array(
	    'class' => 'large-text',
	    "maxlength"  => '180',
	    ),
	));
}