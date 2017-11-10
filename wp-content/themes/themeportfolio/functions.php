<?php

function themeportfolio_resources(){
    // importing stylesheet
    wp_enqueue_style('themeportfolio', get_template_directory_uri() . '/css/themeportfolio.css', array(), '1.0.0', 'all' );
    // importing bootstrap css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
    
    // custom js
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/themeportfolio.js', array(), '1.0.0', true);
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
