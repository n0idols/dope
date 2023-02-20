<?php


function myfiles()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'myfiles');

function dope_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'dope_features');
