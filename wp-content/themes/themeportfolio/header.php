<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset ="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    
    <nav class= "navbar navbar-inverse">
        <div class= "navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collpase" data-targer="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p>website title</p>
        </div>
        <div class="collpase navbar=collapse" id="myNavbar">
            <?php
                wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'container' => false,
                  'menu_class' => 'nav navbar-nav navbar-right'
                ));
            ?>
        </div>
    </nav>