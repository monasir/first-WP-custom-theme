<?php

    function load_scripts() {
        wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '4.4.1', true);
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
        /*wp_enqueue_script('mothemes-js',get_template_directory_uri()."/js/main.js", array(),"1.0", true);*/
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), 'rand(111,9999)', 'all');
    }

    add_action('wp_enqueue_scripts', 'load_scripts');

    function newtheme_config() {
        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu'
            )
        );

        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'newtheme_config', 0);

    
