<?php 

add_action( 'init', 'add_link_styles' );

function add_link_styles() {
	wp_enqueue_block_style( 'core/navigation', array(
		'handle' => 'link',
		'src'    => get_theme_file_uri( "css/main.css" ),
		'path'   => get_theme_file_path( "css/main.css" )
	) );
}

add_action('wp_enqueue_scripts', 'add_404_styles');

function add_404_styles() {
    wp_enqueue_style(
        '404',
        get_template_directory_uri().'css/404.css'
    );
}

add_action('wp_enqueue_scripts', 'add_privacy_styles');

function add_privacy_styles() {
    wp_enqueue_style(
        'privacy',
        get_template_directory_uri().'css/privacy.css'
    );
}

add_action('wp_enqueue_scripts', 'add_terms_styles');

function add_terms_styles() {
    wp_enqueue_style(
        'terms',
        get_template_directory_uri().'css/terms.css'
    );
}

function add_animation_style() {
    wp_enqueue_style(
        'aos_style',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
    );
}

function add_scripts() {
    wp_enqueue_script(
        'index',
        get_parent_theme_file_uri().'/js/index.js',
        array(),
		wp_get_theme()->get( 'Version' ),
        true
    );
}

function add_animation_script() {
    wp_enqueue_script(
        'aos_script',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}

function init_aos() {
    wp_enqueue_script(
        'aos_init',
        get_parent_theme_file_uri('js/aos.js'),
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}

add_action('wp_enqueue_scripts', 'add_scripts');

add_action('wp_enqueue_scripts', 'add_animation_style');

add_action('wp_enqueue_scripts', 'add_animation_script');

add_action('wp_enqueue_scripts', 'init_aos');