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


/*För att göra etiketter klickbara utifrån vad man fyller i anpassat fält*/
function dynamic_year_link() {
    $year = get_post_meta(get_the_ID(), 'År', true);
    if ($year) {
        return esc_url("/tag/" . $year);
    }
    return "#";
}
add_shortcode('meta_year_link', 'dynamic_year_link');

function dynamic_city_link() {
    $city = get_post_meta(get_the_ID(), 'Stad', true);
    if ($city) {
        $city = str_replace('ö', 'o', $city);
        $city = str_replace('å', 'a', $city);
        $city = str_replace('ä', 'a', $city);
        $city = str_replace('Ö', 'O', $city);
        $city = str_replace('Å', 'A', $city);
        $city = str_replace('Ä', 'A', $city);
        $city = strtolower($city);
        $city = str_replace(' ', '-', $city);
        return esc_url("/tag/" . $city);
    }
    return "#";
}
add_shortcode('meta_city_link', 'dynamic_city_link');

function dynamic_concept_link() {
    $concept = get_post_meta(get_the_ID(), 'Koncept', true);
    if ($concept) {
        $concept = str_replace('ö', 'o', $concept);
        $concept = str_replace('å', 'a', $concept);
        $concept = str_replace('ä', 'a', $concept);
        $concept = str_replace('Ö', 'O', $concept);
        $concept = str_replace('Å', 'A', $concept);
        $concept = str_replace('Ä', 'A', $concept);
        $concept = strtolower($concept);
        $concept = str_replace(' ', '-', $concept);
        return esc_url("/tag/" . $concept);
    }
    return "#";
}
add_shortcode('meta_concept_link', 'dynamic_concept_link');
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
