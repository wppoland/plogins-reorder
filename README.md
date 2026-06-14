# Reorder - Quick Reorder for WooCommerce

A free, wp.org-ready WooCommerce plugin that adds a one-click **"Order again"** button to past
orders. Customers re-add every still-purchasable item from an order to the cart and check out fast.

Self-contained: no external runtime dependencies.

## What it does (FREE)

- Adds a reorder button to each qualifying order in **My Account → Orders**, and (optionally) on
  the single order view.
- Re-adds every still-purchasable line item to the cart, preserving variations.
- Skips items that are no longer available and tells the customer which ones, instead of breaking
  the cart.
- Redirects to the cart or straight to checkout (configurable).
- **Security:** nonce-protected links + server-side ownership check (the handler refuses to act on
  an order the current user does not own — no IDOR).

## Settings (WooCommerce → Reorder)

- Button text
- Which order statuses show the button (Completed, Processing, On hold)
- Redirect target after reordering (cart or checkout)
- Show the button on the single order view as well as the orders list

## Architecture

- `reorder.php` — bootstrap: WC/PHP guards, HPOS + Blocks compatibility, boots on `init:0` and
  fires `do_action('reorder/booted', Plugin::instance())`.
- `src/Plugin.php` — DI container wiring + boot order.
- `src/Service/ReorderService.php` — button rendering + the nonce-checked, ownership-verified
  reorder handler.
- `src/Settings/SettingsRepository.php` — typed, defaulted settings access.
- `src/Admin/Settings.php` / `src/Admin/Assets.php` — WooCommerce-submenu settings page + scoped
  admin assets.
- `templates/reorder-button.php` — theme-overridable button markup (`yourtheme/reorder/…`).

## Development

```bash
composer install
composer cs        # PHPCS (WordPress security ruleset)
composer analyse   # PHPStan level 6
```

The PRO companion lives in the separate private repo `wppoland/reorder-pro` and boots via the
`reorder/booted` action.

## License

GPL-2.0-or-later.
