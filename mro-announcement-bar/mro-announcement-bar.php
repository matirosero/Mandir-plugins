<?php
/*
Plugin Name: MRo Annoucement Bar
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Sets up custom post types for Yoga Mandir.
Version: 1.0
Author: Mat Rosero
Author URI: http://2tabbies.com
Plugin Type: Piklist
License: GPL2
*/

/*
 * Define plugin directory
 */
define('SIMPLE_ANNOUNCEMENTS_PATH', plugin_dir_url( __FILE__ ));

/*
 * Set up post type through piklist
 */
add_filter('piklist_post_types', 'mro_announcement_bar_post_types');
function mro_announcement_bar_post_types($post_types) {
  $post_types['mro-announcement'] = array(
    'labels' => piklist('post_type_labels', 'Announcement')
    ,'title' => __('Enter a new Annoucement')
    ,'menu_position' => 5
    ,'menu_icon' => 'dashicons-megaphone'
    ,'page_icon' => 'dashicons-megaphone'
    ,'supports' => array(
      'title'
      // ,'editor'
      // ,'excerpt'
    )
    ,'public' => true
    ,'admin_body_class' => array(
      'mro-announcement'
    )
    ,'has_archive' => false
    ,'rewrite' => array(
      'slug' => 'annoucement'
    )
    ,'capability_type' => 'post'
    ,'hide_meta_box' => array(
      'slug'
      ,'author'
    )
  );

  return $post_types;
}


/*
 * Filter to add mysql query to WP query
 */
function sap_filter_where( $where = '' ) {
    // ...where dates are blank
    $where .= " OR (mt1.meta_key = 'mro_announcement_date_start' AND CAST(mt1.meta_value AS CHAR) = '') OR (mt2.meta_key = 'mro_announcement_date_end' AND CAST(mt2.meta_value AS CHAR) = '')";
    return $where;
}

/*
 * Insert announcement bar into mro_body_top hook
 */
function sap_display_announcement() {
 
    global $wpdb;
 
    $today = date('Y-m-d');
    $args = array(
        'post_type' => 'mro-announcement',
        'posts_per_page' => 0,
        'meta_key' => 'mro_announcement_date_end',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'mro_announcement_date_start',
                'value' => $today,
                'compare' => '<=',
            ),
            array(
                'key' => 'mro_announcement_date_end',
                'value' => $today,
                'compare' => '>=',
            )
        )
    );
 
    // Add a filter to do complex 'where' clauses...
    add_filter( 'posts_where', 'sap_filter_where' );
    $query = new WP_Query( $args );
    // Take the filter away again so this doesn't apply to all queries.
    remove_filter( 'posts_where', 'sap_filter_where' );
 
    $announcements = $query->posts;
 
    if($announcements) :
        ?>
        <div id="info-bar" class="hidden row">
            <div class="wrapper">
                <div class="sap_message">
                    <?php
                    foreach ($announcements as $announcement) {
                        ?>
                        <?php echo do_shortcode(wpautop(($announcement->post_content))); ?>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    endif;
}
add_action('mro_body_top', 'sap_display_announcement');


/*
 * Enqueue
 */
function sap_frontend_scripts() {
    // wp_enqueue_style( 'announcements-style', SIMPLE_ANNOUNCEMENTS_PATH . 'css/announcements.css');
    // wp_enqueue_script( 'announcements', SIMPLE_ANNOUNCEMENTS_PATH . 'js/announcements.js', array( 'jquery' ) );
    // wp_enqueue_script( 'cookies', SIMPLE_ANNOUNCEMENTS_PATH . 'js/jquery.cookie.js', array( 'jquery' ) );
    // wp_enqueue_script( 'cycle', SIMPLE_ANNOUNCEMENTS_PATH . 'js/jquery.cycle.lite.js', array( 'jquery' ) );
}
add_action('wp_enqueue_scripts', 'sap_frontend_scripts');


