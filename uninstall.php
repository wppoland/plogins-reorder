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

/**
 * Remove this plugin's options from the current site.
 */
function reorder_uninstall_site(): void
{
    delete_option('reorder_settings');
    delete_option('reorder_db_version');
}

// Options are per site, so a network uninstall has to visit every site.
if (is_multisite()) {
    foreach (get_sites(['fields' => 'ids', 'number' => 0]) as $reorder_site_id) {
        switch_to_blog((int) $reorder_site_id);
        reorder_uninstall_site();
        restore_current_blog();
    }
    unset($reorder_site_id);
} else {
    reorder_uninstall_site();
}

// The PRO banner's dismissal is stored per user, so it belongs to the
// plugin rather than to the site content. User meta is global, not
// per-site, which is why this uses delete_metadata's \$delete_all rather
// than a loop over the users of one blog.
delete_metadata('user', 0, 'reorder_pro_banner_dismissed', '', true);
