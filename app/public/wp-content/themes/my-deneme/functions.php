<?php
function my_theme_setup() {
    // Add support for various WordPress features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-wordpress-theme'),
    ));
}

add_action('after_setup_theme', 'my_theme_setup');

function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_scripts() {
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
?>