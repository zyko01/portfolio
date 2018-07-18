<?php

function themeportfolio_resources(){
    // importing stylesheet
    wp_enqueue_style('themeportfolio', get_template_directory_uri() . '/css/themeportfolio.css', array(), '1.0.0', 'all' );
    // importing animation css
    wp_enqueue_style('animation', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all' );
    // importing bootstrap css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
    // importing font awesome
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/font-awesome.min.css', array(), '4.0.1', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/fontawesome-webfont.ttf', array(), '4.0.1', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/fontawesome-webfont.woff', array(), '4.0.1', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/fontawesome-webfont.woff2', array(), '4.0.1', 'all');    
    // custom js
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/themeportfolio.js', array(), '1.0.0', true);
    wp_enqueue_script('activejs', get_template_directory_uri() . '/js/active.js', array(), '1.0.0', true);
    wp_enqueue_script('animatejs', get_template_directory_uri() . '/js/animatetext.js', array(), '1.0.0', true);
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smooth.js', array(), '1.0.0', true);
    wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js', array(), '1.0.0', true);
    // importing bootsrap js
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', 'all' );
}
    add_action('wp_enqueue_scripts', 'themeportfolio_resources');

//Making jQuery Google API
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

function themeportfolio_support(){
    // add menus to the admin panel
    get_theme_support('menus');

    // register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
}
    add_action('init', 'themeportfolio_support');
