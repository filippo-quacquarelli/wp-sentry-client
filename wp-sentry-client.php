<?php

/*
Plugin Name: WordPress Sentry Client
Version: 1.0.0
Description: Sentry PHP Client for WordPress
Author: Filippo Quacquarelli
Author URI: http://filippoquacquarelli.it/
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;


define( "WP_SENTRY_PATH", plugin_dir_path( __FILE__ ) );

define( "WP_SENTRY_URL", plugin_dir_url( __FILE__ ) );

require_once WP_SENTRY_PATH . 'sentry-php/lib/Raven/Autoloader.php';

Raven_Autoloader::register();

// get option and sanitize ( get private dsn ecc ecc )
include_once( WP_SENTRY_PATH . "admin/get-option.php" );

// create option page
include_once( WP_SENTRY_PATH . "admin/option-page.php" );

// instance Raven Client object for php sdk
include_once( WP_SENTRY_PATH . "admin/sentry-run.php" );

// instance Raven Client object for javascript sdk
include_once( WP_SENTRY_PATH . "public/sentry-run.php" );