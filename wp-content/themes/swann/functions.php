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
    wp_enqueue_style('style', get_stylesheet_uri());
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

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-2.1.4.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('owl_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jarallax', get_template_directory_uri() . '/assets/js/jarallax.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery_magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/lightbox.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery_meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array(), '1.0.0', true);
    wp_enqueue_script('scrollreveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array(), '1.0.0', true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery_ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), '1.0.0', true);
    wp_enqueue_script('gmap3', get_template_directory_uri() . '/assets/js/gmap3.min.js', array(), '1.0.0', true);
    wp_enqueue_script('switch', get_template_directory_uri() . '/assets/js/switch.js', array(), '1.0.0', true);
    wp_enqueue_script('map', '//maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_files');