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

Dodaje przycisk «Zamów ponownie» do poprzednich zamówień WooCommerce. Jedno kliknięcie ponownie dodaje dostępne pozycje do koszyka i przenosi klienta dalej.

== Description ==

Reorder dodaje przycisk <strong>«Zamów ponownie»</strong> do każdego poprzedniego zamówienia w WooCommerce <strong>Moje konto → Zamówienia</strong>. Gdy klient go kliknie, każda wciąż dostępna pozycja z tego zamówienia wraca do koszyka, a klient trafia na stronę koszyka lub kasy — zależnie od tego, co wybierzesz w ustawieniach.

Pozycje, których już nie ma (usunięte, ukryte lub niedostępne), są pomijane, a klient widzi powiadomienie z nazwami produktów, których nie udało się dodać, więc w koszyku nie ma cichych niespodzianek.

Co robi wtyczka:

* Ponownie dodaje produkty z całego zamówienia jednym kliknięciem, zamiast zmuszać klienta do szukania każdej pozycji od nowa.
* Zachowuje oryginalną wariantę: jeśli kupiono rozmiar M w kolorze niebieskim, wraca właśnie ta wariant.
* Sprawdza nonce w każdym linku ponownego zamówienia i potwierdza, że zalogowany klient jest właścicielem zamówienia, zanim dotknie koszyka — jeden klient nie może ponowić zamówienia innego.
* Pomija niedostępne produkty z powiadomieniem, zamiast zostawiać klienta z uszkodzonym lub w połowie wypełnionym koszykiem.
* Nie dodaje JavaScriptu front-endu ani dodatkowego znacznika. Przycisk to zwykła akcja zamówienia WooCommerce z małym, tematycznym arkuszem stylów (ładowanym tylko na stronie zamówień), więc wyróżnia się bez zmiany układu strony konta.

Ustawienia znajdują się w <strong>WooCommerce → Reorder</strong>: zmień etykietę przycisku, wybierz, które statusy zamówień dostają przycisk (Zrealizowane, W trakcie realizacji, Wstrzymane), i zdecyduj, czy ponowne zamówienie trafia do koszyka, czy do kasy.

Kod źródłowy i zgłoszenia błędów na GitHubie: https://github.com/wppoland/plogins-reorder — zgłoszenia i poprawki mile widziane.

== Installation ==

1. Zainstaluj i włącz WooCommerce (8.0 lub nowsze).
2. Zainstaluj Reorder z katalogu wtyczek WordPress lub prześlij folder `reorder` do `/wp-content/plugins/`.
3. Włącz wtyczkę na ekranie <strong>Wtyczki</strong>.
4. Opcjonalnie wejdź w <strong>WooCommerce → Reorder</strong>, aby ustawić tekst przycisku, statusy i przekierowanie; rozsądne ustawienia domyślne działają od razu.
5. Przycisk «Zamów ponownie» pojawia się teraz przy kwalifikujących się poprzednich zamówieniach w <strong>Moje konto → Zamówienia</strong>.

== Frequently Asked Questions ==

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-reorder/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-reorder/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-reorder
* <strong>Zgłoszenia błędów i propozycje funkcji</strong> - https://github.com/wppoland/plogins-reorder/issues


= Is Reorder free? =
Tak. Reorder jest darmowy i objęty licencją GPL.

= Does Reorder require WooCommerce? =
Tak. Reorder to rozszerzenie WooCommerce i wymaga WooCommerce 8.0 lub nowszego. Wyświetla powiadomienie w panelu i pozostaje nieaktywny, jeśli WooCommerce brakuje lub jest nieaktualne.

= What happens to items that are no longer available? =
Są pomijane, a klient widzi powiadomienie z nazwami produktów, których nie udało się ponownie dodać. Wszystko, co wciąż można kupić, trafia do koszyka.

= Which orders show the button? =
Domyślnie zamówienia zrealizowane. Możesz też włączyć W trakcie realizacji i Wstrzymane w <strong>WooCommerce → Reorder</strong>. Przycisk widzi tylko klient będący właścicielem zamówienia.

= Does it work with product variations? =
Tak. Oryginalna wariant jest zachowana (np. rozmiar i kolor), więc do koszyka wraca właściwa wariant.

= Where does the customer go after reordering? =
Domyślnie do koszyka lub prosto do kasy — według Twojego wyboru w ustawieniach.

= How do I remove all plugin data? =
Usunięcie wtyczki z ekranu <strong>Wtyczki</strong> uruchamia procedurę dezinstalacji, która usuwa opcje `reorder_settings` i `reorder_db_version`. Reorder nie tworzy własnych tabel.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest zgodna z WordPress Multisite. Włącz ją w całej sieci lub na poszczególnych witrynach; każda witryna zachowuje własne ustawienia i dane.

== External Services ==

Reorder nie łączy się z żadnymi usługami zewnętrznymi. Ponownie dodaje pozycje tylko do standardowego koszyka WooCommerce w Twojej witrynie.

== Screenshots ==

1. Przycisk «Zamów ponownie» na liście zamówień w Moim koncie.
2. Strona ustawień: tekst przycisku, statusy zamówień i cel przekierowania.

== Translations ==

Wtyczka Plogins Reorder zawiera polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki. Domena tekstowa to `plogins-reorder`, więc pakiety językowe z WordPress.org mogą również nadpisywać lub rozszerzać te dołączone tłumaczenia.

== Changelog ==

= 1.0.2 =
* Dodano dołączone polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki.

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.1 =
* Zmieniono nazwę na Plogins Reorder dla WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.0 =
* Pierwsza wersja: przycisk ponownego zamówienia jednym kliknięciem przy poprzednich zamówieniach, z kontrolą własności i ochroną nonce, z konfigurowalną etykietą, statusami i celem przekierowania.
