<?php
    // If this file is called directly, abort.
    if ( ! defined( 'WPINC' ) ) die;
?>

<form method="post" action="options.php">
    <?php
        settings_fields( 'wp-sentry-settings-group' );
        do_settings_sections( 'wp-sentry-settings-group' );
    ?>
    
    <p>
        <strong><?php _e('Private DSN'); ?></strong> <i><?php _e('( for php sdk )'); ?></i><br />
        <input type="text" name="wp_sentry_private_dsn" value="<?php echo get_sentry_private_dsn(); ?>" style="width:100%;" />
    </p>

    <p>
        <strong><?php _e('Public DSN'); ?></strong> <i><?php _e('( for JavaScript sdk )'); ?></i><br />
        <input type="text" name="wp_sentry_public_dsn" value="<?php echo get_sentry_public_dsn(); ?>" style="width:100%;" />
    </p>
    
    <p>
        <strong><?php _e('PHP Level debug'); ?></strong> <i><?php _e('( default: Report simple running errors )'); ?></i><br />
        <select name="wp_sentry_level" style="width:100%;">
            <option value="disable" <?php selected( get_sentry_level_debug(), "disable" ); ?>>
                <?php _e('Turn off all error reporting'); ?>
            </option>
            <option value="running" <?php selected( get_sentry_level_debug(), "running" ); if ( ! get_sentry_level_debug() ) echo "selected='selected'"; ?>>
                <?php _e('Report simple running errors'); ?>
            </option>
            <option value="notice" <?php selected( get_sentry_level_debug(), "notice" ); ?>>
                <?php _e('Report simple running errors, notice and user trigger error'); ?>
            </option>
            <option value="all" <?php selected( get_sentry_level_debug(), "all" ); ?>>
                <?php _e('Report all PHP errors'); ?>
            </option>
        </select>
    </p>

    <p>
        <strong><?php _e('Disable Sentry'); ?></strong><br />
        <input type="checkbox" name="wp_sentry_disable" value="1" <?php checked( get_sentry_disable(), 1 ); ?> />
    </p>

    <?php submit_button(); ?>
</form>