<?php

/**
 *  busiq-darkTheme functions and definitions
 * 
 */

// Adding The CSS and JS Files
function bq_theme_scripts() {

    # Styles
    // Bootstrap CSS File
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', false, microtime(), 'all' );
    // Google Fonts CDN File
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Dosis|Heebo|Karla&display=swap',);
    // Font Awesome CDN File
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css' );
    // Animate CSS File
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', false, microtime(), 'all' );
    // Main Style File
    wp_enqueue_style( 'style', get_stylesheet_uri(), null, microtime(), 'all' );
    
    # Scripts
    // Bootstrap JS File
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), microtime(), true);
    // WOW JS File
    wp_enqueue_script( 'wowjs', get_template_directory_uri() . '/assets/js/wow.min.js', array(), microtime(), true);
    // Main JS File
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), microtime(), true);
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bq_theme_scripts' );

// Activate WOW.js
function bq_activate_wow_init() {
    add_action( 'print_footer_scripts', 'bq_wow_init' );
}
add_action( 'wp_enqueue_scripts', 'bq_activate_wow_init' );

// Adding theme support
function bq_init() {
    // featured image dashboard option
    add_theme_support( 'post-thumbnails' );
    // website title tag
    add_theme_support( 'title-tag' );
    // html5 markup for search forms, comment forms and comment lists
    $html_args = array('search-form', 'comment-form', 'comment-list' );
    add_theme_support( 'html5', $html_args );
}
add_action( 'after_setup_theme', 'bq_init' );

// Services Post Type
function bq_custom_post_type() {
    $service_args = array(
        'rewrite'       => array('slug' => 'services' ),
        'labels'        => array(
            'name'          => 'Services',
            'singular_name' => 'Service',
            'add_new_item'  => 'Add New Service',
            'edit_item'     => 'Edit Service'
        ),
        'menu_icon'     => 'dashicons-schedule',
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array(
            'title',
            'thumbnail',
            'editor',
            'excerpt',
            'comments'
        )
    );
    register_post_type( 'service', $service_args );
}
add_action( 'init', 'bq_custom_post_type' );

?>