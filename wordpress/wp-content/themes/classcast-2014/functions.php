<?php

	function classcast_setup() {
		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary'   => __( 'Top primary menu', 'classcast' ),
			'footer'   => __( 'Footer menu', 'classcast' ),
			'tinyfooter'   => __( 'Tinyfooter menu', 'classcast' ),
			'heronav'   => __( 'Heronav menu', 'classcast' ),
			'drop'   => __( 'Drop menu', 'classcast' ),
		) );
	}
	add_action( 'after_setup_theme', 'classcast_setup' );


function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __(' more...', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_action('init', 'cptui_register_my_cpt_job');
function cptui_register_my_cpt_job() {
register_post_type('job', array(
'label' => 'Jobs',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'job', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Jobs',
  'singular_name' => 'Job',
  'menu_name' => 'Jobs',
  'add_new' => 'Add Job',
  'add_new_item' => 'Add New Job',
  'edit' => 'Edit',
  'edit_item' => 'Edit Job',
  'new_item' => 'New Job',
  'view' => 'View Job',
  'view_item' => 'View Job',
  'search_items' => 'Search Jobs',
  'not_found' => 'No Jobs Found',
  'not_found_in_trash' => 'No Jobs Found in Trash',
  'parent' => 'Parent Job',
)
) ); }
add_action('init', 'cptui_register_my_cpt_press');
function cptui_register_my_cpt_press() {
register_post_type('press', array(
'label' => 'Press',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'press', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Press',
  'singular_name' => 'Press',
  'menu_name' => 'Press',
  'add_new' => 'Add Press',
  'add_new_item' => 'Add New Press',
  'edit' => 'Edit',
  'edit_item' => 'Edit Press',
  'new_item' => 'New Press',
  'view' => 'View Press',
  'view_item' => 'View Press',
  'search_items' => 'Search Press',
  'not_found' => 'No Press Found',
  'not_found_in_trash' => 'No Press Found in Trash',
  'parent' => 'Parent Press',
)
) ); }
 
function get_custom_post_type_template($single_template) {
     global $post;
 
       if ($post->post_type == 'custom-post-type') {
          $single_template = dirname( __FILE__ ) . '/single-template.php';
     }
     return $single_template;
}
 
add_filter( "single_template", "get_custom_post_type_template" ) ;
?>