<?php
add_action( 'wp_enqueue_scripts', 'add_styles' );
add_action( 'wp_enqueue_scripts', 'add_scripts' );

add_theme_support( 'custom-background' );
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails');
add_theme_support( 'custom-background' );

function true_custom_background_support(){
	add_theme_support( 'custom-background' );
}
 
add_action('after_setup_theme', 'true_custom_background_support');


function add_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'footer',  get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style( 'sitebar', get_template_directory_uri() . '/assets/css/sitebar.css');
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css');
	wp_enqueue_style( 'microsoftsansserif', get_template_directory_uri() . '/assets/ff/microsoftsansserif.ttf');


}

function add_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', true);
	wp_enqueue_script( 'microsoftsansserif', get_template_directory_uri() . '/assets/ff/microsoftsansserif.ttf');
								
} 

add_theme_support('post-formats', array(  // поддержка постов
        'asaide',
        'image',
        'video',
        'gallery',
        'chat'
    ));

    add_theme_support('html5', array(
        'search_form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

	$defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'default-repeat'         => 'repeat',
		'default-position-x'     => 'left',
		'default-attachment'     => 'scroll',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);

  



