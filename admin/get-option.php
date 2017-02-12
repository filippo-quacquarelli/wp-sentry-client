<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;


function get_sentry_private_dsn() {
    return esc_url( get_option('wp_sentry_private_dsn') );
}

function get_sentry_public_dsn() {
    return esc_url( get_option('wp_sentry_public_dsn') );
}

function get_sentry_level_debug() {
    return filter_var( get_option('wp_sentry_level'), FILTER_SANITIZE_STRING );
}

function get_sentry_disable() {
    return filter_var( get_option('wp_sentry_disable'), FILTER_VALIDATE_INT );
}