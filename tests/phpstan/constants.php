<?php
/**
 * Constants needed by PHPStan to analyse the plugin without bootstrapping WordPress.
 *
 * @package Reorder
 */

declare(strict_types=1);

namespace {
    if (! defined('ABSPATH')) {
        define('ABSPATH', '/tmp/wordpress/');
    }
    // WC_VERSION is provided by the WooCommerce stubs bootstrap file.
}

namespace Reorder {
    if (! defined('Reorder\\VERSION')) {
        define('Reorder\\VERSION', '0.1.0');
    }
    if (! defined('Reorder\\PLUGIN_FILE')) {
        define('Reorder\\PLUGIN_FILE', '/tmp/reorder/reorder.php');
    }
    if (! defined('Reorder\\PLUGIN_DIR')) {
        define('Reorder\\PLUGIN_DIR', '/tmp/reorder');
    }
    if (! defined('Reorder\\MIN_PHP_VERSION')) {
        define('Reorder\\MIN_PHP_VERSION', '8.1.0');
    }
    if (! defined('Reorder\\MIN_WC_VERSION')) {
        define('Reorder\\MIN_WC_VERSION', '8.0.0');
    }
}
