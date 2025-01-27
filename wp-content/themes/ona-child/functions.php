<?php
function child_theme_button_styles() {
    wp_enqueue_style('child-theme-button-styles', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'child_theme_button_styles');

// Om oss-knapp
function btn_om_oss($atts) {
    $atts = shortcode_atts([
        'link' => '#',
        'text' => 'Om oss',
    ], $atts);

    return '<a href="' . esc_url($atts['link']) . '" class="button-om-oss">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('om_oss_btn', 'btn_om_oss');

// Kontakt-knapp
function btn_kontakt($atts) {
    $atts = shortcode_atts([
        'link' => '#',
        'text' => 'Kontakt',
    ], $atts);

    return '<a href="' . esc_url($atts['link']) . '" class="button-kontakt">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('kontakt_btn', 'btn_kontakt');

// Se fler projekt-knapp
function btn_se_fler_projekt($atts) {
    $atts = shortcode_atts([
        'link' => '#',
        'text' => 'Se fler projekt »',
    ], $atts);

    return '<a href="' . esc_url($atts['link']) . '" class="button-se-fler-projekt">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('se_fler_projekt_btn', 'btn_se_fler_projekt');
?>
