<?php
/**
 * Autoloading: prefer Composer's vendor autoloader (ships the optimized
 * classmap). Fall back to a minimal PSR-4 autoloader so the plugin still boots
 * if vendor/ is somehow absent.
 *
 * @package Reorder
 */

declare(strict_types=1);

namespace Reorder;

defined('ABSPATH') || exit;

$reorder_composer = __DIR__ . '/vendor/autoload.php';
if (is_readable($reorder_composer)) {
    require_once $reorder_composer;
    return;
}

spl_autoload_register(static function (string $class): void {
    $prefix  = 'Reorder\\';
    $baseDir = __DIR__ . '/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative = substr($class, $len);
    $file     = $baseDir . str_replace('\\', '/', $relative) . '.php';
    if (is_readable($file)) {
        require_once $file;
    }
});
