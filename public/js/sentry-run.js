
(function() {

    Raven.config( get_sentry_public_dsn.get_dsn ).install();

}());