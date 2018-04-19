<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_theme_support( 'post-thumbnails' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// check ACF
if ( ! function_exists( 'get_field' ) ) {
	add_action( 'template_redirect', 'template_redirect_warning_missing_acf', 0 );
	function template_redirect_warning_missing_acf() {
		wp_die( sprintf( 'Ce site ne fonctionne pas sans l\'extension Advanced Custom Fields. Merci de vous connecter au site pour l\'activer.', wp_login_url() ) );
	}

}
