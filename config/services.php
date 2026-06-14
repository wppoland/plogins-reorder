<?php
/**
 * Service wiring. Returns a closure that registers every service in the
 * container. Bindings are lazy: nothing is instantiated until first resolved.
 *
 * @package Reorder
 */

declare(strict_types=1);

namespace Reorder;

defined('ABSPATH') || exit;

use Reorder\Admin\Assets;
use Reorder\Admin\Settings;
use Reorder\Service\ReorderService;
use Reorder\Settings\SettingsRepository;
use Reorder\Util\TemplateLoader;

return static function (Container $c): void {
    // Infrastructure.
    $c->singleton(Migrator::class, static fn (): Migrator => new Migrator());
    $c->singleton(SettingsRepository::class, static fn (): SettingsRepository => new SettingsRepository());
    $c->singleton(TemplateLoader::class, static fn (): TemplateLoader => new TemplateLoader());

    // Front-end + action handling.
    $c->singleton(ReorderService::class, static fn (): ReorderService => new ReorderService(
        $c->get(SettingsRepository::class),
        $c->get(TemplateLoader::class),
    ));

    // Admin (only loaded in wp-admin context).
    if (is_admin()) {
        $c->singleton(Settings::class, static fn (): Settings => new Settings(
            $c->get(SettingsRepository::class),
        ));
        $c->singleton(Assets::class, static fn (): Assets => new Assets());
    }
};
