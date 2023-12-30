<?php
function my_custom_theme_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

// ナビゲーションメニューのサポート
function my_custom_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my_custom_theme'),
    ));
}

add_action('after_setup_theme', 'my_custom_theme_setup');

