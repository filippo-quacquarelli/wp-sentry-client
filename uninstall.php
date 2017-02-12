<?php
// if uninstall.php is not called by WordPress, die
if ( ! defined('WP_UNINSTALL_PLUGIN')) die;
 
$wp_sentry_private_dsn = 'wp_sentry_private_dsn';
$wp_sentry_public_dsn = 'wp_sentry_public_dsn';
$wp_sentry_disable = 'wp_sentry_disable';
$wp_sentry_level = 'wp_sentry_level';
 
delete_option( $wp_sentry_private_dsn );

delete_option( $wp_sentry_public_dsn );

delete_option( $wp_sentry_disable );

delete_option( $wp_sentry_level );