<?php
function my_child_theme_styles() {
    // Load parent theme styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load child theme styles

    // General styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    //Portfolio/posts styles
    wp_enqueue_style('child-portfolio-style', get_stylesheet_directory_uri() . '/portfolio.css', array('child-style'));

    //Homepage category-images
    wp_enqueue_style('child-category-image-style', get_stylesheet_directory_uri() . '/category-image.css', array('child-style'));

    //Form styles
    wp_enqueue_style('child-form-style', get_stylesheet_directory_uri() . '/form-style.css');
}

add_action('wp_enqueue_scripts', 'my_child_theme_styles');
?>
