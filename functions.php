<?php
// add stylesheet(s)
function set_theme_styles() {
	wp_enqueue_style( 'main_stylesheet' , get_template_directory_uri() . '/css/app.css?v=' .time() );
	wp_enqueue_style( 'slick_theme' , get_template_directory_uri() . '/css/slick/slick-theme.css' );
	wp_enqueue_style( 'slick' , get_template_directory_uri() . '/css/slick/slick.css' );
}
add_action('wp_enqueue_scripts', 'set_theme_styles');


// add scripts
function set_theme_scripts() {
	wp_enqueue_script( 'main_script', get_template_directory_uri() . '/js/scripts.js', array('jquery') , '' , true);
	wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/js/slick.min.js', '' , '' , true);
}
add_action('wp_enqueue_scripts' , 'set_theme_scripts');

// add menus
add_theme_support('menus');

/* -----------------------------------------------------------------------------

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __('Primary'),
			'secondary-menu' => __('Secondary Menu')
			)
		);
}
add_action('init', 'register_theme_menus');

----------------------------------------------------------------------------- */


// enable featured images
add_theme_support('post-thumbnails');

// enable excerpts
add_post_type_support( 'page', 'excerpt' );

// show toolbar
show_admin_bar( true );
