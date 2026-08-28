<?php
/**
 * PRO upsell content, generated from the plogins.com registry by
 * scripts/gen-pro-upsell.mjs. The admin upsell renders this; curate the
 * feature list to fit this plugin's settings screen (do not invent features).
 *
 * @package plogins-reorder-pro
 */

defined('ABSPATH') || exit;

return [
    'name'       => 'Reorder Pro',
    'url'        => 'https://plogins.com/plogins-reorder-pro/pricing/',
    'sellable'   => true,
    'price_from' => 29,
    'currency'   => 'EUR',
    'lead'       => [
        'en' => 'Reorder reward coupon. Feature-complete PRO.',
        'pl' => 'Kupon nagrody za ponowne zamówienie. Kompletna wersja PRO.',
    ],
    'features'   => [
        [
            'en' => ['title' => 'Reward coupon', 'desc' => 'When a customer reorders, a coupon you choose is automatically applied to the cart, rewarding repeat purchases.'],
            'pl' => ['title' => 'Kupon nagrody', 'desc' => 'Gdy klient zamawia ponownie, automatycznie stosowany jest wybrany kupon do koszyka, nagradzający powtórne zakupy.'],
        ],
        [
            'en' => ['title' => 'Resilient to bad codes', 'desc' => 'Invalid or expired codes are skipped silently, so the cart never breaks.'],
            'pl' => ['title' => 'Odporny na błędne kody', 'desc' => 'Nieprawidłowe lub wygasłe kody są pomijane po cichu, więc koszyk nigdy się nie psuje.'],
        ],
        [
            'en' => ['title' => 'Reward settings', 'desc' => 'Configure the coupon under WooCommerce → Reorder → "Reorder reward (Pro)".'],
            'pl' => ['title' => 'Ustawienia nagrody', 'desc' => 'Skonfiguruj kupon w WooCommerce → Reorder → „Nagroda za ponowne zamówienie (Pro)”.'],
        ],
        [
            'en' => ['title' => 'Builds on the free plugin', 'desc' => 'Extends the free Reorder service container; without it the add-on stays dormant.'],
            'pl' => ['title' => 'Buduje na darmowej wtyczce', 'desc' => 'Rozszerza kontener usług darmowego Reorder; bez niej pozostaje uśpiony.'],
        ],
    ],
];
