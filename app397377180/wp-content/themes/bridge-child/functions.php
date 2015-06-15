<?php


/**
 * Enqueue the child theme stylesheet
 *
 */
function wp_schools_enqueue_scripts() {
  wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
  wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11 );


/**
 * Hide the Admin Bar
 *
 */
add_filter('show_admin_bar', '__return_false');
