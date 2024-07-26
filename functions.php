<?php

function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/includes/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('main', get_template_directory_uri() . '/includes/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('responsive', get_template_directory_uri() . '/includes/css/responsive.css', array(), false, 'all');
    wp_enqueue_style('responsive');
}
add_action('wp_enqueue_scripts', 'load_css');



function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap_js', get_template_directory_uri() . '/includes/js/bootstrap.min.js', 'jquery', 1, true);
    wp_enqueue_script('bootstrap_js');

    wp_register_script('main-js', get_template_directory_uri(). '/includes/js/main.js', 'jquery', 1, true);
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'load_js');