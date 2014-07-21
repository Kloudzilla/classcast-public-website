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

 
function get_custom_cat_template($single_template) {
     global $post;
 
       if ( in_category( 'press' )) {
          $single_template = dirname( __FILE__ ) . '/single-press.php';
     }
     return $single_template;
}
 
add_filter( "single_template", "get_custom_cat_template" ) ;
 
?>