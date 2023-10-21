<?php
    add_action('wp_enqueue_scripts', 'electric_styles');
    add_action('wp_enqueue_scripts', 'electric_scripts');

    function electric_styles() {
        wp_enqueue_style('electric-style', get_stylesheet_uri());
    };

    function electric_scripts() {
        wp_enqueue_script('electric-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
    };

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    add_filter( 'nav_menu_css_class', 'change_nav_menu_css_class_filter', 10, 3 );

    function change_nav_menu_css_class_filter($classes, $menu_item, $args) {
        $classes[] = 'header__link';
        if($menu_item->current) {
            $classes[] .= ' header__link_active';
        }
        return $classes;
    }   
?>