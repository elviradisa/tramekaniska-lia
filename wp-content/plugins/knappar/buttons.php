<?php
/**
 * Plugin Name: Custom Button Styles
 * Description: Så man kan stylea knappar i CSS.
 * Version: 1.0
 * Author: André
 */

function custom_button_styles_enqueue() {
    wp_enqueue_style('custom-button-styles', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'custom_button_styles_enqueue');

// Kortkod för stil 1
function custom_button_stil1($atts) {
    $atts = shortcode_atts([
        'link' => '#',
        'text' => 'Knapp',
    ], $atts);

    return '<a href="' . esc_url($atts['link']) . '" class="button-stil1">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('stil1_button', 'custom_button_stil1');

// Kortkod för stil 2
function custom_button_stil2($atts) {
    $atts = shortcode_atts([
        'link' => '#',
        'text' => 'Knapp',
    ], $atts);

    return '<a href="' . esc_url($atts['link']) . '" class="button-stil2">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('stil2_button', 'custom_button_stil2');
// Ex: [stil2_button link="https://tramekaniska/kontakt" text="Kontakt"]