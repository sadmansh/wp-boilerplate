<?php 

// Exit if accessed directly.

defined( 'ABSPATH' ) || exit; 


add_action( 'after_setup_theme', 'donut_setup' );

if ( ! function_exists( 'donut_setup' ) ) {
	function donut_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add theme support for WordPress-managed document title
		add_theme_support( 'title-tag' );

		// Register primary menu
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'donut' ),
			'secondary' => __( 'Secondary Menu', 'donut' ),
		) );

		// Switch default core markup to HTML5
		add_theme_support( 'html5', array( 
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// Add thumbnail support
		add_theme_support( 'post-thumbnails' );

		// Remove admin bar 
		if ( ! current_user_can( 'administrator' ) && !is_admin() ) {
			show_admin_bar( false );
		}
	}
}

?>