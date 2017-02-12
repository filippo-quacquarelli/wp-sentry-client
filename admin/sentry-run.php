<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;


if ( ! get_sentry_private_dsn() || get_sentry_disable() === 1 ) return;


$wpSentryClient = new Raven_Client( get_sentry_private_dsn() );

$error_handler = new Raven_ErrorHandler( $wpSentryClient );

$error_handler->registerExceptionHandler();

$error_handler->registerErrorHandler();

$error_handler->registerShutdownFunction();

switch ( get_sentry_level_debug() ) {
    case "disable":
        error_reporting(0);
        break;
    case "running":
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        break;
    case "notice":
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE);
        break;
    case "all":
        error_reporting(E_ALL);
        break;
}
