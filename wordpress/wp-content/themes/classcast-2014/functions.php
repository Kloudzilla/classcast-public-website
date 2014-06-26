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
		) );
	}
	add_action( 'after_setup_theme', 'classcast_setup' );