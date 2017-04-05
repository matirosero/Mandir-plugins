<?php
/*
Title: Options
Post Type: mro-announcement
Priority: low
Order: 1
*/


//Whether to show title
piklist('field', array(
  'type' => 'checkbox',
  'field' => 'mro_announcement_show_title',
  'label' => __('Show title', 'mro-announcement'),
  'value' => 1,
  'choices' => array (
  	1 => 'Show'
  )
));

$my_url = get_post_meta($post->ID, 'mro_announcement_btn_link', true); // Get the value of the field above

piklist('field', array(
	'type' => 'group',
	'label' =>  __('Call to Action', 'mro-announcement'),
	'list' => false,
	'fields' => array (
	  array (
		  'type' => 'text',
		  'field' => 'mro_announcement_btn_txt',
		  'label' => __('Button text', 'mro-announcement'),
		  'columns' => 10,
	  ),
	  array (
		  'type' => 'url',
		  'field' => 'mro_announcement_btn_link',
		  // 'template' => 'field',
		  'label' => __('Button link', 'mro-announcement'),
		  'columns' => 10,
		  'attributes' => array(
		  	'class' => 'regular-text'
		  ),
	  ),
	  array (
		  'type' => 'html',
		  'label' => '&nbsp',
		  // 'template' => 'field',
		  'value' => !empty($my_url) ? '&nbsp;&nbsp;<a href="' . get_post_meta($post->ID, 'mro_announcement_btn_link', true) . '">Go Url</a>' : '', // if a url has been entered, show it. If not, show nothing.
		  'columns' => 2,
	  ),
	),
));