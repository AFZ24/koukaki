<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}


function enqueue_swiper_styles() {
    // Charger le fichier CSS de Swiper
    wp_enqueue_style(
        'swiper-css', // Identifiant unique pour ce style
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', // URL du fichier CSS de Swiper
        array(), // Pas de dépendances CSS spécifiques
        '10.0.0' // Version du Swiper.js
    );
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_styles');


function enqueue_swiper_scripts() {
    // Charger le fichier JS de Swiper
    wp_enqueue_script(
        'swiper-js', // Identifiant unique pour ce script
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', // URL du fichier JS de Swiper
        array('jquery'), // jQuery est une dépendance
        '10.0.0', // Version du Swiper.js
        true // Charger dans le footer pour améliorer les performances
    );
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');



function enqueue_custom_scripts() {
    // Charger le fichier JS personnalisé
    wp_enqueue_script(
        'custom-script', // Identifiant unique pour ce script
        get_stylesheet_directory_uri() . '/script.js', // Chemin vers votre fichier script.js
        null, // Pas de dépendances
        null, // Version du script (mettre null si pas nécessaire)
        true // Charger dans le footer pour améliorer les performances
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function add_scroll_effect_script() {
    wp_enqueue_script('scroll-effect', get_template_directory_uri() . '/js/scroll-effect.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'add_scroll_effect_script');


