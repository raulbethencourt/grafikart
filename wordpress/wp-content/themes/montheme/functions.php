<?php

function montheme_supports () {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
}

function monthem_register_assets () {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_title_separator () {
    return '|';
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'monthem_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
