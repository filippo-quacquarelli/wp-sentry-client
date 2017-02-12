<?php
    // If this file is called directly, abort.
    if ( ! defined( 'WPINC' ) ) die;
?>

<div class="wrap">
	<h2><?php _e('WordPress Sentry Client'); ?></h2>

    <?php include WP_SENTRY_PATH . "view/form.php"; ?>
</div>