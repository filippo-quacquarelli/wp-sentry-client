<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;


if ( ! get_sentry_public_dsn() || get_sentry_disable() === 1 ) return;


add_action( 'wp_enqueue_scripts',  'wp_sentry_load_js' );

function wp_sentry_load_js() {
    wp_enqueue_script( 'wp_sentry_client_js', 'https://cdn.ravenjs.com/3.10.0/raven.min.js' );
}


add_action( 'wp_enqueue_scripts', 'wp_sentry_run_js' );

function wp_sentry_run_js() {
    
    wp_register_script( 'wp_sentry_run_js', WP_SENTRY_URL . 'public/js/sentry-run.js' );
    
    $wp_sentry_public_dsn = array(
        'get_dsn' => get_sentry_public_dsn(),
    );
    
    wp_localize_script( 'wp_sentry_run_js', 'get_sentry_public_dsn', $wp_sentry_public_dsn );

    wp_enqueue_script( 'wp_sentry_run_js' );
}