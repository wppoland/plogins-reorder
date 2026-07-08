=== Plogins Reorder - One-Click Reorder for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, reorder, buy again, repeat order, order again
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Erfordert Plugins: woocommerce
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Fügt früheren WooCommerce-Bestellungen eine Schaltfläche „Erneut bestellen“ hinzu. Ein Klick genügt, um die noch verfügbaren Artikel wieder in den Warenkorb zu legen und den Kunden weiterzuleiten.

== Description ==

„Neu bestellen“ fügt jeder vergangenen Bestellung in WooCommerce <strong>Mein Konto → Bestellungen</strong> die Schaltfläche <strong>„Erneut bestellen“</strong> hinzu. Wenn ein Kunde darauf klickt, wird jeder noch kaufbare Artikel aus dieser Bestellung zurück in den Warenkorb gelegt und er landet auf der Warenkorbseite oder der Kasse, je nachdem, was du in den Einstellungen ausgewählt haben.

Artikel, die nicht mehr verfügbar sind (gelöscht, ausgeblendet oder nicht mehr vorrätig), werden weggelassen, und der Kunde sieht einen Hinweis mit dem Namen, was nicht hinzugefügt werden konnte, sodass es im Warenkorb keine stillen Überraschungen gibt.

Was das Plugin macht:

* Fügt die Produkte einer gesamten Bestellung mit einem Klick erneut hinzu, anstatt dass der Kunde erneut nach jedem Artikel suchen muss.
* Behält die ursprüngliche Variante bei: Wenn sie das Medium in Blau gekauft haben, ist es die Variante, die zurückkommt.
* Überprüft die Nonce auf jedem Nachbestellungslink und bestätigt, dass der angemeldete Kunde der Eigentümer der Bestellung ist, bevor er den Warenkorb berührt, sodass ein Kunde die Bestellung eines anderen nicht erneut bestellen kann.
* Überspringt nicht verfügbare Produkte mit einer Benachrichtigung, anstatt den Kunden mit einem kaputten oder halbvollen Warenkorb zurückzulassen.
* Fügt kein Front-End-JavaScript und kein zusätzliches Markup hinzu. Die Schaltfläche ist eine normale WooCommerce-Bestellaktion mit einem kleinen, thematisch anpassbaren Stylesheet (das nur auf der Bestellseite geladen wird), sodass sie hervorsticht, ohne das Layout deiner Kontoseite zu verändern.

Die Einstellungen findest du unter <strong>WooCommerce → Nachbestellen</strong>: Ändere die Beschriftung der Schaltfläche, wähle aus, welche Bestellstatus die Schaltfläche erhalten (Abgeschlossen, In Bearbeitung, Angehalten) und entscheide, ob die Nachbestellung im Warenkorb oder an der Kasse landet.

Quell- und Fehlerberichte live auf GitHub unter https://github.com/wppoland/plogins-reorder; Probleme und Patches willkommen.

== Installation ==

1. Installieren und aktiviere WooCommerce (8.0 oder höher).
2. Installiere Reorder aus dem WordPress-Plugin-Verzeichnis oder lade den Ordner „reorder“ nach „/wp-content/plugins/“ hoch.
3. Aktiviere das Plugin über den Bildschirm <strong>Plugins<strong>. 4. Besuche optional </strong>WooCommerce → Neu anordnen<strong>, um den Schaltflächentext, den Status und die Weiterleitung festzulegen. Sinnvolle Standardeinstellungen funktionieren sofort. 5. Die Schaltfläche „Erneut bestellen“ wird jetzt bei qualifizierten früheren Bestellungen unter </strong>Mein Konto → Bestellungen</strong> angezeigt.

== Frequently Asked Questions ==

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-reorder/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-reorder/
* <strong>Quellcode</strong> – https://github.com/wppoland/plogins-reorder
* <strong>Fehlerberichte und Funktionsanfragen</strong> – https://github.com/wppoland/plogins-reorder/issues


= Is Reorder free? =
Ja. Die Nachbestellung ist kostenlos und unter der GPL lizenziert.

= Does Reorder require WooCommerce? =
Ja. Reorder ist eine WooCommerce-Erweiterung und erfordert WooCommerce 8.0 oder höher. Es zeigt einen Administratorhinweis an und bleibt inaktiv, wenn WooCommerce fehlt oder veraltet ist.

= What happens to items that are no longer available? =
Du wirst übersprungen und der Kunde sieht einen Hinweis mit den Namen der Produkte, die nicht erneut hinzugefügt werden konnten. Alles, was noch zu kaufen ist, wird in den Warenkorb gelegt.

= Which orders show the button? =
Standardmäßig abgeschlossene Bestellungen. Du kannst „Verarbeitung“ und „Angehalten“ auch unter <strong>WooCommerce → Nachbestellen</strong> aktivieren. Die Schaltfläche wird nur dem Kunden angezeigt, dem die Bestellung gehört.

= Does it work with product variations? =
Ja. Die ursprüngliche Variante (z. B. Größe und Farbe) bleibt erhalten, sodass die richtige Variante wieder in den Warenkorb gelegt wird.

= Where does the customer go after reordering? =
Standardmäßig zum Warenkorb oder direkt zur Kasse, je nach Wahl in den Einstellungen.

= How do I remove all plugin data? =
Wenn du das Plugin aus dem Bildschirm <strong>Plugins</strong> löschen, wird die Deinstallationsroutine ausgeführt, die die Optionen „reorder_settings“ und „reorder_db_version“ entfernt. Reorder speichert keine benutzerdefinierten Tabellen.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es im Netzwerk oder auf einzelnen Websites. Jede Site behält ihre eigenen Einstellungen und Daten.

== External Services ==

Reorder stellt keine Verbindung zu externen Diensten her. Es werden lediglich Artikel wieder zum Standard-WooCommerce-Warenkorb auf deiner eigenen Website hinzugefügt.

== Screenshots ==

1. Die Schaltfläche „Erneut bestellen“ in der Bestellliste „Mein Konto“.
2. Einstellungsseite: Schaltflächentext, Bestellstatus und Weiterleitungsziel.

== Changelog ==

= 1.0.1 =
* Erste stabile Version.

= 0.1.1 =
* Für einen eindeutigeren Plugin-Namen in Plogins Reorder for WooCommerce umbenannt.

= 0.1.0 =
* Erstveröffentlichung: Ein-Klick-Nachbestellungsschaltfläche für frühere Bestellungen, Eigentumsüberprüfung und Nonce-Schutz, mit konfigurierbarer Beschriftung, Status und Weiterleitungsziel.
