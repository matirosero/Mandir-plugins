<?php

// Validation for number
if ( ! has_filter( 'piklist_validation_rules', 'check_valid_number' ) ) {
	add_filter('piklist_validation_rules', 'check_valid_number', 11);
	function check_valid_number($validation_rules) {
	  $validation_rules['valid_number'] = array(
	    'rule' => "/[-+]?[0-9]*[.,]?[0-9]+/",
	    'message' => __('is not a number', 'mro-pages')
	  );

	  return $validation_rules;
	}
}