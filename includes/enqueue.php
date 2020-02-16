<?php 

// Exit if accessed directly.

defined( 'ABSPATH' ) || exit; 


if ( ! function_exists( 'donut_theme_assets' ) ) {
	function donut_theme_assets() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.1', 'all' );
		wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/scripts.js', array( 'jquery' ), 1.1, true );

		wp_localize_script( 'script', 'donut', [
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'isLoggedIn' => is_user_logged_in(),
		] );
	}
	add_action( 'wp_enqueue_scripts', 'donut_theme_assets' );
}

?>