<?php

/**
 *
 * Fired when the plugin is uninstalled.
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Important: Check if the file is the one
// that was registered during the uninstall hook.
if ( 'selcont/selcont.php' !== WP_UNINSTALL_PLUGIN )  {
    die;
}
