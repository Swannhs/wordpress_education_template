<?php

function theme_files()
{
    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('fontawesome-all', get_template_directory_uri() . '/assets/css/fontawesome-all.css', array(), '1.0.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('video', get_template_directory_uri() . '/assets/css/video.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css', array(), '1.0.0', 'all');
    wp_enqueue_style('progess', get_template_directory_uri() . '/assets/css/progess.css', array(), '1.0.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('base_style', get_stylesheet_uri());
    wp_enqueue_style('colors', get_template_directory_uri() . '/assets/css/colors/switch.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_1', get_template_directory_uri() . '/assets/css/colors/switch.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_2', get_template_directory_uri() . '/assets/css/colors/color-2.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_3', get_template_directory_uri() . '/assets/css/colors/color-3.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_4', get_template_directory_uri() . '/assets/css/colors/color-4.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_5', get_template_directory_uri() . '/assets/css/colors/color-5.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_6', get_template_directory_uri() . '/assets/css/colors/color-6.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_7', get_template_directory_uri() . '/assets/css/colors/color-7.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_8', get_template_directory_uri() . '/assets/css/colors/color-8.css', array(), '1.0.0', 'all');
    wp_enqueue_style('colors_9', get_template_directory_uri() . '/assets/css/colors/color-9.css', array(), '1.0.0', 'all');


}

add_action('wp_enqueue_scripts', 'theme_files');
