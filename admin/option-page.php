<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;


add_action( 'admin_menu', 'wp_sentry_menu' );

function wp_sentry_menu() {
	add_options_page( 'WP Sentry Client', 'WP Sentry Client', 'manage_options', 'wp-sentry-options', 'wp_sentry_options_form' );

    add_action( 'admin_init', 'register_wp_sentry_settings' );
}

function register_wp_sentry_settings() {
    register_setting( 'wp-sentry-settings-group', 'wp_sentry_private_dsn' );
    register_setting( 'wp-sentry-settings-group', 'wp_sentry_public_dsn' );
    register_setting( 'wp-sentry-settings-group', 'wp_sentry_disable' );
    register_setting( 'wp-sentry-settings-group', 'wp_sentry_level' );
}

function wp_sentry_options_form() {
	if ( !current_user_can( 'manage_options' ) ) wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

	include WP_SENTRY_PATH . "view/container.php";
}