<?php
/**
 * onevoice back compat functionality
 *
 * Prevents onevoice from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage One_voice
 * @since Onevoice 1.0
 */

/**
 * Prevent switching to onevoice on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Onevoice 1.0
 */
function onevoice_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'onevoice_upgrade_notice' );
}
add_action( 'after_switch_theme', 'onevoice_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * onevoice on WordPress versions prior to 4.1.
 *
 * @since Onevoice 1.0
 */
function onevoice_upgrade_notice() {
	$message = sprintf( __( 'onevoice requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'onevoice' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since Onevoice 1.0
 */
function onevoice_customize() {
	wp_die( sprintf( __( 'onevoice requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'onevoice' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'onevoice_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since Onevoice 1.0
 */
function onevoice_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'onevoice requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'onevoice' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'onevoice_preview' );
