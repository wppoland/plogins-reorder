<?php

declare(strict_types=1);

namespace Reorder\Storefront;

defined('ABSPATH') || exit;

use Reorder\Contract\HasHooks;
use Reorder\Plugin;

/**
 * Enqueues the storefront stylesheet that gives the "Order again" action its
 * own mark, but only on the My Account → Orders page where the button lives,
 * so nothing is loaded on the rest of the store.
 *
 * CSS only: the plugin adds no front-end JavaScript and no extra markup. The
 * stylesheet targets WooCommerce's own `.button.reorder` action class.
 */
final class Assets implements HasHooks
{
    private const HANDLE = 'reorder-storefront';

    public function registerHooks(): void
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue(): void
    {
        if (! function_exists('is_account_page') || ! is_account_page()) {
            return;
        }

        // Both endpoints, not just the list. WooCommerce 10.9 started feeding
        // woocommerce_my_account_my_orders_actions into order-details.php, so
        // the button also renders on a single order view. Scoped to "orders"
        // alone, that button arrived unstyled.
        if (function_exists('is_wc_endpoint_url')
            && ! is_wc_endpoint_url('orders')
            && ! is_wc_endpoint_url('view-order')) {
            return;
        }

        $plugin = Plugin::instance();

        wp_enqueue_style(
            self::HANDLE,
            $plugin->url('assets/css/storefront.css'),
            [],
            \Reorder\VERSION,
        );
    }
}
