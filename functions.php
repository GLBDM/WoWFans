<?php
register_nav_menus(array(
'menu-desktop' => 'Menu principal',
'menu-mobile' => 'Menu mobile',
));

// afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin

function monstyle() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('menuBurger', get_template_directory_uri() . '/javascript/script.js');
}

add_action( 'wp_enqueue_scripts', 'add_font_awesome' );
 
function add_font_awesome() {
wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' );
}
    
add_action( 'wp_enqueue_scripts', 'monstyle' );
wp_enqueue_style( 'Spectral',
"https://fonts.googleapis.com/css2?family=Spectral+SC&display=swap" );
wp_enqueue_style( 'Josefin',
"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" );
add_filter('show_admin_bar', '__return_false');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
add_filter('wpcf7_autop_or_not', '__return_false');

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
add_image_size( 'article', 840, 400, false );
}

