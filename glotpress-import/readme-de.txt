=== Plogins Reorder - One-Click Reorder for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, reorder, buy again, repeat order, order again
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Requires Plugins: woocommerce
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Fügt früheren WooCommerce-Bestellungen einen «Erneut bestellen»-Button hinzu. Ein Klick legt die noch verfügbaren Artikel wieder in den Warenkorb und leitet den Kunden weiter.

== Description ==

Reorder fügt jeder vergangenen Bestellung in WooCommerce <strong>Mein Konto → Bestellungen</strong> einen <strong>«Erneut bestellen»</strong>-Button hinzu. Klickt ein Kunde darauf, landet jeder noch kaufbare Artikel aus dieser Bestellung wieder im Warenkorb, und er kommt auf die Warenkorbseite oder zur Kasse — je nachdem, was du in den Einstellungen gewählt hast.

Artikel, die nicht mehr verfügbar sind (gelöscht, ausgeblendet oder nicht vorrätig), werden ausgelassen, und der Kunde sieht einen Hinweis mit den Produkten, die nicht hinzugefügt werden konnten, sodass es im Warenkorb keine stillen Überraschungen gibt.

Was das Plugin macht:

* Legt die Produkte einer ganzen Bestellung mit einem Klick wieder in den Warenkorb, statt dass der Kunde jeden Artikel erneut suchen muss.
* Behält die ursprüngliche Variante bei: Wurde Medium in Blau gekauft, kommt genau diese Variante zurück.
* Prüft die Nonce auf jedem Nachbestell-Link und bestätigt, dass der eingeloggte Kunde der Bestellinhaber ist, bevor der Warenkorb angefasst wird — ein Kunde kann die Bestellung eines anderen nicht erneut auslösen.
* Überspringt nicht verfügbare Produkte mit einem Hinweis, statt den Kunden mit einem kaputten oder halb gefüllten Warenkorb zurückzulassen.
* Fügt kein Frontend-JavaScript und kein zusätzliches Markup hinzu. Der Button ist eine normale WooCommerce-Bestellaktion mit einem kleinen, thematisierbaren Stylesheet (nur auf der Bestellseite geladen), sodass er auffällt, ohne das Layout deiner Kontoseite zu verschieben.

Die Einstellungen liegen unter <strong>WooCommerce → Reorder</strong>: Ändere die Button-Beschriftung, wähle, welche Bestellstatus den Button bekommen (Abgeschlossen, In Bearbeitung, Angehalten), und entscheide, ob die Nachbestellung im Warenkorb oder an der Kasse landet.

Quellcode und Fehlerberichte auf GitHub: https://github.com/wppoland/plogins-reorder — Issues und Patches willkommen.

== Installation ==

1. Installiere und aktiviere WooCommerce (8.0 oder höher).
2. Installiere Reorder aus dem WordPress-Plugin-Verzeichnis oder lade den Ordner `reorder` nach `/wp-content/plugins/` hoch.
3. Aktiviere das Plugin über den Bildschirm <strong>Plugins</strong>.
4. Öffne optional <strong>WooCommerce → Reorder</strong>, um Button-Text, Status und Weiterleitung festzulegen; sinnvolle Standardwerte funktionieren sofort.
5. Der «Erneut bestellen»-Button erscheint jetzt bei passenden früheren Bestellungen unter <strong>Mein Konto → Bestellungen</strong>.

== Frequently Asked Questions ==

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-reorder/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-reorder/
* <strong>Quellcode</strong> - https://github.com/wppoland/plogins-reorder
* <strong>Fehlerberichte und Funktionswünsche</strong> - https://github.com/wppoland/plogins-reorder/issues


= Is Reorder free? =
Ja. Reorder ist kostenlos und unter der GPL lizenziert.

= Does Reorder require WooCommerce? =
Ja. Reorder ist eine WooCommerce-Erweiterung und erfordert WooCommerce 8.0 oder höher. Es zeigt einen Admin-Hinweis und bleibt inaktiv, wenn WooCommerce fehlt oder veraltet ist.

= What happens to items that are no longer available? =
Sie werden übersprungen, und der Kunde sieht einen Hinweis mit den Produkten, die nicht erneut hinzugefügt werden konnten. Alles, was noch kaufbar ist, landet im Warenkorb.

= Which orders show the button? =
Standardmäßig abgeschlossene Bestellungen. Du kannst In Bearbeitung und Angehalten ebenfalls unter <strong>WooCommerce → Reorder</strong> aktivieren. Der Button wird nur dem Kunden angezeigt, dem die Bestellung gehört.

= Does it work with product variations? =
Ja. Die ursprüngliche Variante (z. B. Größe und Farbe) bleibt erhalten, sodass die richtige Variante wieder in den Warenkorb gelegt wird.

= Where does the customer go after reordering? =
Standardmäßig in den Warenkorb oder direkt zur Kasse — deine Wahl in den Einstellungen.

= How do I remove all plugin data? =
Das Löschen des Plugins über den Bildschirm <strong>Plugins</strong> führt die Deinstallationsroutine aus, die die Optionen `reorder_settings` und `reorder_db_version` entfernt. Reorder speichert keine eigenen Tabellen.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es netzwerkweit oder auf einzelnen Websites; jede Website behält ihre eigenen Einstellungen und Daten.

== External Services ==

Reorder stellt keine Verbindung zu externen Diensten her. Es legt Artikel nur wieder in den Standard-WooCommerce-Warenkorb auf deiner eigenen Website.

== Screenshots ==

1. Der «Erneut bestellen»-Button in der Bestellliste unter Mein Konto.
2. Einstellungsseite: Button-Text, Bestellstatus und Weiterleitungsziel.

== Translations ==

Plogins Reorder enthält deutsche, polnische und spanische Übersetzungen für die Plugin-Oberfläche. Die Textdomain ist `plogins-reorder`, sodass Sprachpakete von WordPress.org diese mitgelieferten Übersetzungen ebenfalls überschreiben oder erweitern können.

== Changelog ==

= 1.0.2 =
* Mitgelieferte deutsche, polnische und spanische Übersetzungen für die Plugin-Oberfläche hinzugefügt.

= 1.0.1 =
* Erste stabile Version.

= 0.1.1 =
* Für einen eindeutigeren Plugin-Namen in Plogins Reorder für WooCommerce umbenannt.

= 0.1.0 =
* Erstveröffentlichung: Ein-Klick-Nachbestell-Button bei früheren Bestellungen, mit Eigentumsprüfung und Nonce-Schutz, konfigurierbarer Beschriftung, Status und Weiterleitungsziel.
