<?php

function mro_the_content() {
	piklist('field', array(
	  'type' => 'editor'
	  ,'field' => 'post_content'
	  ,'scope' => 'post'
	  ,'label' => __('General Information', 'mro-pages')
	  // ,'add_more' => true
	  // ,'description' => __('Basic information, goes under title.')
	  // ,'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
	  ,'options' => array(
	    'media_buttons' => false
	    ,'teeny' => true
	    ,'textarea_rows' => 5
	    ,'drag_drop_upload' => false
	    ,'tinymce' => array(
	      'resize' => false
	      ,'wp_autoresize_on' => true
	    )
	  )
	));
}


/*
function mro_intro_after_title() {
	$current_screen = get_current_screen();
  	if( $current_screen ->id === "page" ) {

		piklist('field',
		  array(
		    'type' => 'editor',
		    'field' => 'mro_page_intro',
		    'template'=>'field',
		    'label' => __('Introduction', 'mro-pages'),
		    'options' => array(
		      'wpautop' => true,
		      'media_buttons' => false,
		      'teeny' => false,
		      'textarea_rows' => 5,
		      'drag_drop_upload' => false,
		      'tinymce' => array(
		        'resize' => false,
		        'wp_autoresize_on' => true,
		      ),
		      'editor_height' => 100,
		    ),
		));
	}
}
add_action('edit_form_after_title', 'mro_intro_after_title');
*/

