<?php

declare(strict_types=1);

namespace Reorder;

defined('ABSPATH') || exit;

use Reorder\Settings\SettingsRepository;

/**
 * Idempotent schema/version migrations, run on every boot and on activation.
 * Compares a stored option against VERSION and applies forward steps as needed.
 */
final class Migrator
{
    private const OPTION = 'reorder_db_version';

    public function maybeMigrate(): void
    {
        $current = (string) get_option(self::OPTION, '0');

        if (version_compare($current, VERSION, '>=')) {
            return;
        }

        $this->seedDefaults();

        update_option(self::OPTION, VERSION, false);
    }

    /**
     * Seed the settings option with defaults on first install so the plugin has
     * sane behaviour before the settings page is visited.
     */
    private function seedDefaults(): void
    {
        if (get_option(SettingsRepository::OPTION, null) !== null) {
            return;
        }

        /** @var array<string, mixed> $defaults */
        $defaults = require PLUGIN_DIR . '/config/defaults.php';

        update_option(SettingsRepository::OPTION, $defaults, false);
    }
}
