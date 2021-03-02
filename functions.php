<?php 
    add_action('wp_enqueue_scripts', 'utech_styles');
    add_action('wp_enqueue_scripts', 'utech_scripts');

    function utech_styles() {
        wp_enqueue_style('utech-style', get_stylesheet_uri());
        wp_enqueue_style('extra-style', get_template_directory_uri() . '/assets/css/style.min.css');
    }

    function utech_scripts() {
        wp_enqueue_script('utech-scripts', get_template_directory_uri() . '/assets/js/script.min.js', array(), null, true);
    }


?>