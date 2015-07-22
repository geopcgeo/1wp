<?php

if ( !defined( 'ONEVOICE_CARE_PATH' ) ) {
    define( 'ONEVOICE_CARE_PATH' , plugin_dir_path( dirname( __FILE__ ) ) );
}

/**
 * bp_care_get_text()
 *
 * Returns a custom text string from the database
 *
 */
function bp_care_get_text( $text = false , $type = 'custom' ) {

    $settings = get_site_option( 'bp_care_settings' );
    $text_strings = $settings['text_strings'];
    $string = $text_strings[$text];
    return $string[$type];
}

require_once ONEVOICE_CARE_PATH . 'includes/button-functions.php';
require_once ONEVOICE_CARE_PATH . 'includes/activity-functions.php';
require_once ONEVOICE_CARE_PATH . 'includes/ajax-functions.php';
require_once ONEVOICE_CARE_PATH . 'includes/like-functions.php';
require_once ONEVOICE_CARE_PATH . 'includes/scripts.php';
require_once ONEVOICE_CARE_PATH . 'includes/settings.php';
require_once ONEVOICE_CARE_PATH . 'includes/blogpost.php';








