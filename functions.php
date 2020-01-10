<?php

add_theme_support('post-thumbnails');

https://use.typekit.net/twt3hey.css

function add_maccti_scripts() {
    wp_enqueue_style('proxima_nova', 'https://use.typekit.net/twt3hey.css');
    wp_enqueue_style('font_awesome', get_template_directory_uri() . `/font-awesome/css/fontawesome.min.css`);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . `/css/bootstrap.min.css`, array('font_awesome'));
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap', 'font_awesome', 'proxima_nova'));

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'popper', 'jquery' ), 1.1, true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/script.js', array('bootstrapjs', 'popper', 'jquery'), 1.1, true);
}