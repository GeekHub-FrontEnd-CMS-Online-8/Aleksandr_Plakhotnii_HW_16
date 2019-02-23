<?php

    define('L_THEME_ROOT',  get_template_directory_uri());
    define('L_CSS_DIR',  L_THEME_ROOT . '/css');
    define('L_JS_DIR',  L_THEME_ROOT . '/js');
    define('L_IMG_DIR',  L_THEME_ROOT . '/img');

    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style( 'fonts', L_CSS_DIR . '/fonts.css');
        wp_enqueue_style( 'style', L_CSS_DIR . '/style.css');
        wp_enqueue_style( 'theme', get_stylesheet_uri());
        /*wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );*/
});