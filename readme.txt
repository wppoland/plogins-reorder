=== Ripeto - One-Click Reorder for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, reorder, buy again, repeat order, order again
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 8.1
Requires Plugins: woocommerce
Stable tag: 1.1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds an "Order again" button to past WooCommerce orders. One click re-adds the still-available items to the cart and sends the customer onward.

== Description ==

Ripeto adds an **"Order again"** button to each past order in WooCommerce **My Account > Orders**. When a customer clicks it, every still-purchasable item from that order goes back into the cart, and they land on the cart page or the checkout, whichever you've chosen in the settings.

Items that are gone (deleted, hidden, or out of stock) are left out, and the customer sees a notice naming what couldn't be added so there are no silent surprises in the cart.

What the plugin does:

* Re-adds a whole order's worth of products in one click, instead of the customer searching for each item again.
* Keeps the original variation: if they bought the medium in blue, that's the variation that comes back.
* Checks the nonce on every reorder link and confirms the logged-in customer owns the order before touching the cart, so one customer can't reorder another's order.
* Skips unavailable products with a notice rather than leaving the customer with a broken or half-filled cart.
* Adds no front-end JavaScript and no extra markup. The button is a normal WooCommerce order action with a small, themeable stylesheet (loaded only on the orders page), so it stands out without shifting your account-page layout.

Settings live under **WooCommerce > Reorder**: change the button label, pick which order statuses get the button (Completed, Processing, On hold), and decide whether reordering lands on the cart or the checkout.

Source and bug reports live on GitHub at [github.com/wppoland/plogins-reorder](https://github.com/wppoland/plogins-reorder); issues and patches welcome.

== Installation ==

1. Install and activate WooCommerce (8.0 or later).
2. Install Ripeto from the WordPress plugin directory, or upload the `ripeto` folder to `/wp-content/plugins/`.
3. Activate the plugin through the **Plugins** screen.
4. Optionally visit **WooCommerce > Reorder** to set the button text, statuses, and redirect; sensible defaults work out of the box.
5. An "Order again" button now appears on qualifying past orders in **My Account > Orders**.

== Frequently Asked Questions ==

= Documentation and links =

* **Documentation**: [plogins.com/plogins-reorder/docs/](https://plogins.com/plogins-reorder/docs/)
* **Plugin page**: [plogins.com/plogins-reorder/](https://plogins.com/plogins-reorder/)
* **Source code**: [github.com/wppoland/plogins-reorder](https://github.com/wppoland/plogins-reorder)
* **Bug reports and feature requests**: [github.com/wppoland/plogins-reorder/issues](https://github.com/wppoland/plogins-reorder/issues)


= Is Ripeto free? =
Yes. Ripeto is free and licensed under the GPL.

= Does Ripeto require WooCommerce? =
Yes. Ripeto is a WooCommerce extension and requires WooCommerce 8.0 or later. It shows an admin notice and stays inactive if WooCommerce is missing or out of date.

= What happens to items that are no longer available? =
They are skipped, and the customer sees a notice naming the products that could not be re-added. Everything still purchasable is added to the cart.

= Which orders show the button? =
By default, completed orders. You can enable Processing and On hold too under **WooCommerce > Reorder**. The button only shows to the customer who owns the order.

= Does it work with product variations? =
Yes. The original variation (e.g. size and colour) is preserved, so the correct variation is added back to the cart.

= Where does the customer go after reordering? =
To the cart by default, or straight to checkout, your choice in the settings.

= How do I remove all plugin data? =
Deleting the plugin from the **Plugins** screen runs the uninstall routine, which removes the `reorder_settings` and `reorder_db_version` options. Ripeto stores no custom tables.


= Does this plugin work on WordPress Multisite? =

Yes. This plugin is compatible with WordPress Multisite. Network activate it or activate it on individual sites; each site keeps its own settings and data.

== External Services ==

Ripeto does not connect to any external services. It only re-adds items to the standard WooCommerce cart on your own site.

== Screenshots ==

1. The "Order again" button on the My Account orders list.
2. Settings page: button text, order statuses, and redirect target.

== Translations ==

Ripeto is fully translatable and ships the `ripeto.pot` template. Translations are delivered by WordPress.org language packs from translate.wordpress.org, which is where Polish, German and Spanish are being contributed; the package itself carries no compiled translation files.

== Changelog ==

= 1.1.1 =
* The settings screen is reachable by a shop manager, but saving it went through options.php, which checks manage_options. A shop manager could fill the form in and be told they were not allowed to manage options for this site. Saving now uses the same capability as the menu.
* The sidebar upgrade promo follows the banner's dismissal, so dismissing it no longer leaves a permanent advert on the screen.

= 1.1.0 =
* Renamed to Ripeto. The WordPress.org review team asks a plugin name to lead with a distinctive, coined identifier rather than a generic descriptive word. Ripeto is Esperanto for a repetition. The text domain follows the name; the stored settings, the "Order again" button and every hook are unchanged.

= 1.0.13 =
* Fixed: the PRO upgrade promo kept selling to people who had already bought the paid edition. Only the banner could be dismissed, so the sidebar promo and the locked feature cards followed a paying customer around for good. The promo now checks whether the paid edition is active and steps aside when it is.
* Fixed: arrow glyphs in the admin menu paths, and in the strings handed to translators. An arrow inside a translatable string makes the glyph every translator's problem and changes the layout in any locale that drops it.

= 1.0.12 =
* Fixed: the reorder button was unstyled on a single order view. WooCommerce 10.9 started rendering the my-account order actions there as well, and the stylesheet was still loading only on the orders list.
* Fixed: deleting the plugin left the per-user "dismiss" flag from the PRO notice in the database. Uninstall now removes it for every user, not just the one who dismissed it.

= 1.0.11 =
* The translation template was regenerated. It still named an older version of the plugin and pointed at source lines that had since moved, which is what translation tools read to show a string in context.

= 1.0.10 =
* Renamed to Plogins Reorder - One-Click Reorder for WooCommerce so the name leads with the brand rather than a generic word, which is what the WordPress.org plugin review team asks for. The plugin slug is unchanged.

= 1.0.9 =
* Removed the "Tested up to" header from the main PHP file. It belongs in readme.txt only, where it is already declared; present in both, the header can override the readme and show a compatibility version that was never intended.

= 1.0.8 =
* Fixed: the "Order again" link appeared on the order confirmation screen, straight after checkout. WooCommerce 10.9 began rendering My Account order actions there as well, and offering a repeat of the order a shopper has just placed made no sense there. The link stays on My Account.

= 1.0.7 =
* Tested against WordPress 7.1. Verified by activating this build on a clean 7.1 install with WooCommerce 11.1, not by editing the header.

= 1.0.6 =
* Fixed the PRO promo on the settings screen quoting a price in PLN. PRO is priced and charged in EUR, so an admin on a Polish site was shown a zloty amount and then billed in euro, and the zloty figure was a fixed conversion that drifted from the real charge as the rate moved. The promo now shows the euro price that is actually taken.

= 1.0.4 =
* Translations: completed Polish, German and Spanish for the PRO upgrade panel.

= 1.0.3 =
* Fixed low-contrast admin headings under an OS dark-mode preference.

= 1.0.2 =
* Added bundled Polish, German and Spanish translations for the plugin interface.

= 1.0.1 =
* First stable release.

= 0.1.1 =
* Renamed to Plogins Reorder for WooCommerce for a more distinctive plugin name.

= 0.1.0 =
* Initial release: one-click reorder button on past orders, ownership-checked and nonce-protected, with configurable label, statuses, and redirect target.
