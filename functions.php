<?php


function enqueue_bootstrap() {
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );

 // Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );


//
// if ( function_exists( 'add_theme_support' ) ) {
//   add_theme_support( 'post-thumbnails' );
// }
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// Fonction personnalisée à inclure
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );



function mpmac_scripts() {
  wp_enqueue_style(‘mpmac_custom’, get_template_directory_uri() . ‘/style.css’, array(‘mpmac_bootstrap-core’), MPMAC_VERSION , ‘all’);
  wp_enqueue_style(‘mpmac_bootstrap-core’, get_template_directory_uri() . ‘/css/bootstrap.css’, array(), MPMAC_VERSION , ‘all’);

 wp_enqueue_script(‘mpmac_admin_script’, get_template_directory_uri() . ‘/main.js’, array(), MPMAC_VERSION , true);

}

add_action(‘wp_enqueue_scripts’, ‘mpmac_scripts’);
