<?php
function my_child_theme_styles() {
    // Load parent theme styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load child theme styles

    // General styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    //Button styles
    wp_enqueue_style('child-theme-button-styles', get_stylesheet_directory_uri() . '/btn-style.css', array('child-style'));

    //Portfolio/posts styles
    wp_enqueue_style('child-portfolio-style', get_stylesheet_directory_uri() . '/portfolio.css', array('child-style'));

    //Homepage category-images
    wp_enqueue_style('child-category-image-style', get_stylesheet_directory_uri() . '/category-image.css', array('child-style'));


}

add_action('wp_enqueue_scripts', 'my_child_theme_styles');


/**************
  Buttons
**************/
// Svart knapp
function btn_black($atts) {
    $atts = shortcode_atts([
        'link' => '#',
        'text' => 'Om oss',
    ], $atts);

    return '<div class="custom-button-wrapper"><a href="' . esc_url($atts['link']) . '" class="button-black">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('black_btn', 'btn_black');

// Brun knapp
function btn_brown($atts) {
    $atts = shortcode_atts([
        'link' => '#',
        'text' => 'Kontakt',
    ], $atts);

    return '<div class="custom-button-wrapper"><a href="' . esc_url($atts['link']) . '" class="button-brown">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('brown_btn', 'btn_brown');

// Transparent knapp
function btn_transparent($atts) {
    $atts = shortcode_atts([
        'link' => '#',
        'text' => 'Se fler projekt »',
    ], $atts);

    return '<div class="custom-button-wrapper-transparent"><a href="' . esc_url($atts['link']) . '" class="button-transparent">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('transparent_btn', 'btn_transparent');
?>
