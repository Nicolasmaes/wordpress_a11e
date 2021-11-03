<?php

function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

add_theme_support('custom-logo', array(
    'height'      => 'auto',
    'width'       => 300,
    'flex-width' => true,
));
// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

function a11e_register_assets()
{

    // Déclarer le JS

    wp_enqueue_script(
        'a11e-script-navmobile',
        get_template_directory_uri() . '/assets/scripts/nav_mobile.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'a11e-script-traducteur',
        get_template_directory_uri() . '/assets/scripts/traducteur.js',
        array('a11e-script-navmobile'),
        '1.0',
        true
    );
    // Déclarer style.css à la racine du thème
    wp_enqueue_style(
        'a11e-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'a11e_landing_page-style',
        get_template_directory_uri() . '/style_landing_page.css',
        array(),
        '1.0'
    );
    // Seulement sur la page d'accueil
    if (is_front_page()) {
        wp_enqueue_style('a11e_landing_page-style');
    }
}
add_action('wp_enqueue_scripts', 'a11e_register_assets');

function a11e_register_post_types()
{

    // CPT Portfolio
    $labels = array(
        'name' => 'équipes',
        'all_items' => "Toute l'équipe",  // affiché dans le sous menu
        'singular_name' => 'Membre',
        'add_new_item' => 'Ajouter un membre',
        'edit_item' => 'Modifier le membre',
        'menu_name' => 'Membre'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
    );

    register_post_type('équipes', $args);

    // CPT lien
    $labels = array(
        'name' => 'liens',
        'all_items' => '',  // affiché dans le sous menu
        'singular_name' => 'lien',
        'add_new_item' => 'Ajouter un lien',
        'edit_item' => 'Modifier le lien',
        'menu_name' => 'liens'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon'   => 'dashicons-admin-customizer',
    );

    register_post_type( 'liens', $args );
}
add_action('init', 'a11e_register_post_types'); // Le hook init lance la fonction