<?php 

add_action( 'init', 'add_link_styles' );

function add_link_styles() {
	wp_enqueue_block_style( 'core/navigation', array(
		'handle' => 'link',
		'src'    => get_theme_file_uri( "assets/css/core-navigation-link.css" ),
		'path'   => get_theme_file_path( "assets/css/core-navigation-link.css" )
	) );
}

add_action('wp_enqueue_scripts', 'add_404_styles');

function add_404_styles() {
    wp_enqueue_style(
        '404',
        get_template_directory_uri().'/assets/css/404.css'
    );
}

add_action('wp_enqueue_scripts', 'add_privacy_styles');

function add_privacy_styles() {
    wp_enqueue_style(
        'privacy',
        get_template_directory_uri().'/assets/css/privacy.css'
    );
}

add_action('wp_enqueue_scripts', 'add_terms_styles');

function add_terms_styles() {
    wp_enqueue_style(
        'terms',
        get_template_directory_uri().'/assets/css/terms.css'
    );
}

add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts() {
    wp_enqueue_script(
        'script',
        get_parent_theme_file_uri('js/test.js'),
        array(),
		wp_get_theme()->get( 'Version' ),
        true
    );
}

