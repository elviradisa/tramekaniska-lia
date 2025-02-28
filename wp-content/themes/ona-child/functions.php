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


    //Hero-image mobile vs desktop size
    wp_enqueue_style('child-hero-image-style', get_stylesheet_directory_uri() . '/hero-image.css', array('child-style'));



    //Form styles
    wp_enqueue_style('child-form-style', get_stylesheet_directory_uri() . '/form-style.css');

    //Btn-hover styles
    wp_enqueue_style('child-btn-hover-style', get_stylesheet_directory_uri() . '/btn-hover.css');

    //grön bock till 'kvalitetssäkring'-bild
    // wp_enqueue_style('kvalitetssakring-gron-bock', get_stylesheet_directory_uri() . '/gron-bock.css');

    //header transparent när man scrollar
    wp_enqueue_style('header-transparent-scroll', get_stylesheet_directory_uri() . '/header-transparent-scroll.css');

}

add_action('wp_enqueue_scripts', 'my_child_theme_styles');
?>

<?php

function custom_enqueue_scripts() {
    wp_enqueue_script(
        'header-scroll',
        get_stylesheet_directory_uri() . '/js/header-scroll.js',  
    );
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
?>
