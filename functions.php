<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );

    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
    wp_enqueue_script( 'jquery' );
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

?>