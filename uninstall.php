<?php

/**
 * Reorder uninstall routine.
 *
 * Removes plugin options when the user deletes the plugin from wp-admin.
 * Reorder stores no custom tables and no customer data of its own.
 *
 * @package Reorder
 */

defined('WP_UNINSTALL_PLUGIN') || exit;

delete_option('reorder_settings');
delete_option('reorder_db_version');
