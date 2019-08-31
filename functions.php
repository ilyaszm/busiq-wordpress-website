<?php

/**
 *  busiq-darkTheme functions and definitions
 * 
 *  @package BUSIQ
 *  @subpackage darkTheme
 *  @since 1.0
 * 
 */

// Adding The CSS and JS Files
function bq_theme_scripts() {

    // GOOGLE FONTS CDN FILE
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Dosis|Heebo|Karla&display=swap',);
    // FONT AWESOME CDN FILE
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css' );
    // MY STYLE FILE
    wp_enqueue_style( 'style', get_stylesheet_uri(), null, microtime(), 'all' );
    
    wp_enqueue_script( 'main', get_theme_file_uri( '/assets/js/main.js' ), null, microtime(), true);
    
    /*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }*/
}
add_action( 'wp_enqueue_scripts', 'bq_theme_scripts' );

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