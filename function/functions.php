<?php
// Theme setup
function pt_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));
}
add_action('after_setup_theme', 'pt_setup');

// Enqueue stylesheet
function pt_enqueue() {
    wp_enqueue_style('pt-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'pt_enqueue');

// Extra feature: Custom Post Type "Portfolio"
function pt_register_portfolio() {
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio Item'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'supports' => array('title','editor','thumbnail','excerpt')
    ));
}
add_action('init', 'pt_register_portfolio');

// Pagination function
function pt_pagination() {
    echo paginate_links(array(
        'prev_text' => '« Previous',
        'next_text' => 'Next »'
    ));
}
