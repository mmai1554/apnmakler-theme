<?php
/**
 * APN-Makler Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package APN-Makler Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'APN_MAKLER_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'apn-makler-theme-css', get_stylesheet_directory_uri() . '/style.css', array( 'astra-theme-css' ), APN_MAKLER_THEME_VERSION, 'all' );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Editor Zugriff auf Menü Optionen gewähren
 */
add_action( 'admin_init', function () {
	$role_object = get_role( 'editor' );
	if ( ! $role_object->has_cap( 'edit_theme_options' ) ) {
		$role_object->add_cap( 'edit_theme_options' );
	}
}, 1 );