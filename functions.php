<?php

// read stylesheet, javascript
function my_scripts()
{
    wp_enqueue_style("stylesheet", get_template_directory_uri() . "/scss/stylesheet.css", array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_scripts');

// add customize functions 
function my_setup()
{
    // i-chatch image
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    // custom menu
    register_nav_menus(array(
        'header-nav' => 'ヘッダーナビゲーション',
    ));
}
add_action('after_setup_theme', 'my_setup');


// add widget
function my_theme_widgets_init()
{
    register_sidebar(array(
        'name' => 'Header Widgets',
        'id' => 'header-widgets'
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');
