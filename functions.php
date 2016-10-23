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

/* Tampilkan menu tambah featured image di post untuk thumbnail */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 800, 500);

/* Ubah excerpt jadi read more */
function wpdocs_excerpt_more( $more ) {
    return sprintf( ' [...] <div class="post-read-more"><a class="read-more mybtn" href="%1$s">%2$s</a></div>',
        get_permalink( get_the_ID() ),
        __( 'See full post', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/* Ubah jumlah kata di excerpt post */
function wpdocs_custom_excerpt_length() {
    return 200;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length');

/* Tambahkan atribut di link next / previous post */
function posts_link_attributes() {
    return 'class="mybtn"';
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
