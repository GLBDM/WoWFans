<?php
// enregistrer le menu
register_nav_menus(array(
'menu' => 'principal'
));
// fin

// afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin

function monstyle() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
    
add_action( 'wp_enqueue_scripts', 'monstyle' );
wp_enqueue_style( 'Spectral',
"https://fonts.googleapis.com/css2?family=Spectral+SC&display=swap" );
wp_enqueue_style( 'Josefin',
"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" );
add_filter('show_admin_bar', '__return_false');

