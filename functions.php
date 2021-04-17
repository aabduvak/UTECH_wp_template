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

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    add_filter( 'nav_menu_css_class', 'filter_function_name_8591', 10, 4 );

    function filter_function_name_8591( $classes, $item, $args, $depth ){
        // filter...
        if ($args->menu === 'Main'){
            $classes[] = 'other-header__link';       
        };

        if ($args->menu === 'Secondary'){
            $classes[] = 'menu__link';       
        };

        if ($args->menu === 'Footer'){
            $classes[] = 'footer__link';       
        };

        if ($args->menu === 'Homepage'){
            $classes[] = 'header__link';       
        };
        

        return $classes;
    }

?>