<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page('Fonts & Colours');
	acf_add_options_page('Title');
	
}