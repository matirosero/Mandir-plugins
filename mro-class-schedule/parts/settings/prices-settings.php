<?php
/*
Title: Set Prices
Setting: mro_class_schedule_prices
Tab: Basic
*/


piklist('field', array(
  'type' => 'group',
  'field' => 'single_class', // Including a field at this level saves all data in a serialized array.
  'label' => __('Drop-in class', 'mro-class-schedule'),
  'description' => __('Description and price of drop-in class', 'mro-class-schedule'),
  'add_more' => false,
  'fields' => array(
    array(
      'type' => 'textarea',
      'field' => 'single_class_description',
      'label' => __('Description', 'mro-class-schedule'),
      'columns' => 12,
    ),
    array(
      'type' => 'text',
      'field' => 'single_class_price',
      'label' => __('Price', 'mro-class-schedule'),
      'columns' => 12,
      'attributes' => array(
	      'placeholder' => __('10.000', 'mro-class-schedule'),
      ),
		  'validate' => array(
		    array(
		      'type' => 'valid_number'
		    )
		  ),
    ),
  )
));


piklist('field', array(
  'type' => 'group',
  'field' => 'signup_fee', // Including a field at this level saves all data in a serialized array.
  'label' => __('Sign-up Fee', 'mro-class-schedule'),
  'description' => __('Description and price of signup fee', 'mro-class-schedule'),
  'add_more' => false,
  'fields' => array(
    array(
      'type' => 'textarea',
      'field' => 'signup_description',
      'label' => __('Description', 'mro-class-schedule'),
      'columns' => 12,
    ),
    array(
      'type' => 'text',
      'field' => 'signup_price',
      'label' => __('Price', 'mro-class-schedule'),
      'columns' => 12,
      'attributes' => array(
	      'placeholder' => __('10.000', 'mro-class-schedule'),
      ),
 		  'validate' => array(
		    array(
		      'type' => 'valid_number'
		    )
		  ),
    ),
  )
));


piklist('field', array(
  'type' => 'group',
  'field' => 'monthly_prices', // Including a field at this level saves all data in a serialized array.
  'label' => __('Monthly prices', 'mro-class-schedule'),
  'description' => __('Add more for monthly options', 'mro-class-schedule'),
  'add_more' => true,
  'fields' => array(
    array(
      'type' => 'text',
      'field' => 'monthly_title',
      'label' => __('Title', 'mro-class-schedule'),
      'columns' => 12,
    ),
    array(
      'type' => 'textarea',
      'field' => 'monthly_description',
      'label' => __('Description', 'mro-class-schedule'),
      'columns' => 12,
    ),
    array(
      'type' => 'text',
      'field' => 'monthly_1weekly',
      'label' => __('1 class per week', 'mro-class-schedule'),
      'columns' => 12,
      'attributes' => array(
	      'placeholder' => __('10.000', 'mro-class-schedule'),
      ),
		  'validate' => array(
		    array(
		      'type' => 'valid_number'
		    )
		  ),
    ),
    array(
      'type' => 'text',
      'field' => 'monthly_2weekly',
      'label' => __('2 classes per week', 'mro-class-schedule'),
      'columns' => 12,
      'attributes' => array(
	      'placeholder' => __('10.000', 'mro-class-schedule'),
      ),
		  'validate' => array(
		    array(
		      'type' => 'valid_number'
		    )
		  ),
    ),
    array(
      'type' => 'text',
      'field' => 'monthly_3weekly',
      'label' => __('3 classes per week', 'mro-class-schedule'),
      'columns' => 12,
      'attributes' => array(
	      'placeholder' => __('10.000', 'mro-class-schedule'),
      ),
    ),
    array(
      'type' => 'text',
      'field' => 'monthly_unlimited',
      'label' => __('Unlimited classes', 'mro-class-schedule'),
      'columns' => 12,
      'attributes' => array(
	      'placeholder' => __('10.000', 'mro-class-schedule'),
      ),
		  'validate' => array(
		    array(
		      'type' => 'valid_number'
		    )
		  ),
    ),
  )
));