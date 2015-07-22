<?php

/*
  Plugin Name: Onevoice Care
  Description: Adds the ability for users to like content throughout your BuddyPress site.
  Version: 0.2.0
  Text Domain: onevoice-care

 */
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/* Only load code that needs BuddyPress to run once BP is loaded and initialized. */

function care_init() {
    require_once( 'includes/onevoicecare.php' );
}

add_action( 'bp_include' , 'care_init' );


// *****************************7/20/2015*******start*****************************
function wptuts_scripts_load_cdn()
{
    // Deregister the included library
    wp_deregister_script( 'jquery' );
     
    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), null, false );
     
    // Register the script like this for a plugin:
    wp_register_script( 'script', plugins_url( '/js/script.js', __FILE__ ), array( 'jquery' ) );
    // or
    // Register the script like this for a theme:
    wp_register_script( 'script', get_template_directory_uri() . '/js/custom-script.js', array( 'jquery' ) );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_load_cdn' );
// *****************************7/20/2015***************end*********************
	wp_register_style( 'wp_style',plugins_url( '/css/style.css', __FILE__ ) );
	wp_enqueue_style('wp_style');



