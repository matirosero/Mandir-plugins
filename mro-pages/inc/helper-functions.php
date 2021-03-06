<?php

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
	$teachers = mro_pages_build_choices($teachers);

  return $teachers;
}


// Return an array formatted for select field
function mro_pages_build_choices($choices) {
	foreach ($choices as $value => $choice):
		if ($choice === ''):
			$choices[$value] = sprintf(__('#%d (no title)'), $value);
		endif;
	endforeach;

	$choices = array_replace(array('' => '&mdash; Select &mdash;'), $choices);

	return $choices;
}


//hide editor
// https://gist.github.com/ramseyp/4060095
// add_action( 'admin_head', 'mro_pages_hide_editor' );
// function mro_pages_hide_editor() {
// 	$template_file = $template_file = basename( get_page_template() );
// 	if($template_file == 'template-training.php' || $template_file == 'template-store.php'){ // template
// 		remove_post_type_support('page', 'editor');
// 	}
// }

/**
 * Hide the main editor on specific pages
 */
define('EDITOR_HIDE_PAGE_TITLES', json_encode(array()));
define('EDITOR_HIDE_PAGE_TEMPLATES', json_encode(
	array(
		'page-templates/template-about-us.php',
		'page-templates/template-events.php',
		'page-templates/template-schedule.php',
		'page-templates/template-certification.php',
		'page-templates/template-training.php',
		'page-templates/template-thai.php',
		'page-templates/template-store.php',
	)));


/**
 * Hide the main editor on defined pages
 *
 * You can choose between page titles or page templates. Just set them
 * accordingly like this:
 *
 * define('EDITOR_HIDE_PAGE_TITLES', json_encode(array('Home', 'Some post archive', 'Some Listing')));
 * define('EDITOR_HIDE_PAGE_TEMPLATES', json_encode(array('template-of-something.php', 'archive-customposttype.php')));
 *
 *
 * @global string $pagenow
 * @return void
 */
function atz_hide_editor() {
	global $pagenow;
    if(!('post.php' == $pagenow)){
		return;
	}

	// Get the Post ID.
	$post_id = filter_input(INPUT_GET, 'post') ? filter_input(INPUT_GET, 'post') : filter_input(INPUT_POST, 'post_ID');
	if(!isset($post_id)) {
		return;
	}

	// Hide the editor on the page titled 'Homepage'
	if(in_array(get_the_title($post_id), json_decode(EDITOR_HIDE_PAGE_TITLES))) {
		remove_post_type_support('page', 'editor');
	}

	// Hide the editor on a page with a specific page template
	$template_filename = get_post_meta($post_id, '_wp_page_template', true);

	if(in_array($template_filename, json_decode(EDITOR_HIDE_PAGE_TEMPLATES))) {
		remove_post_type_support('page', 'editor');
	}
}
add_action('admin_init', 'atz_hide_editor');