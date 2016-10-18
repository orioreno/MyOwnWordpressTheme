<?php
// Add scripts and stylesheets
function custom_enqueue_scripts() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome-4.6.3/css/font-awesome.min.css', array(), '4.6.3' );;
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );

/*
// Add Google Fonts
function startwordpress_google_fonts() {
	wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style( 'OpenSans');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');
*/

add_theme_support('title-tag');

/* Tampilkan widgets dan menus di Appearance */
if (function_exists('register_sidebar')) {
	register_sidebar(array(
			'name' => 'Widgetized Area',
			'description'   => 'This is a widgetized area.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
	));
}
