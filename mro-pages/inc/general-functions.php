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