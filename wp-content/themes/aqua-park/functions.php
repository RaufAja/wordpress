<?php
if (!defined('ABSPATH')) exit;

function aqua_park_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array('primary' => __('Menu Utama', 'aqua-park')));
}
add_action('after_setup_theme', 'aqua_park_setup');

function aqua_park_assets() {
    wp_enqueue_style('aqua-park-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('aqua-park-script', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'aqua_park_assets');

function aqua_park_widgets() {
    register_sidebar(array(
        'name' => 'Footer',
        'id' => 'footer-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'aqua_park_widgets');
