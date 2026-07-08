=== Plogins Reorder - One-Click Reorder for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, reorder, buy again, repeat order, order again
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Wymaga wtyczek: woocommerce
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dodaje przycisk „Zamów ponownie” do poprzednich zamówień WooCommerce. Jedno kliknięcie powoduje ponowne dodanie dostępnych artykułów do koszyka i przesłanie klienta dalej.

== Description ==

Opcja Reorder dodaje przycisk <strong>Zamów ponownie</strong> do każdego poprzedniego zamówienia w WooCommerce <strong>Moje konto → Zamówienia</strong>. Kiedy klient to kliknie, każdy możliwy do kupienia przedmiot z tego zamówienia wraca do koszyka i ląduje na stronie koszyka lub na stronie realizacji transakcji, w zależności od tego, co wybrałeś w ustawieniach.

Pozycje, których nie ma (usunięte, ukryte lub niedostępne) są pomijane, a klient widzi informację o tym, czego nie można dodać, dzięki czemu w koszyku nie ma cichych niespodzianek.

Co robi wtyczka:

* Ponownie dodaje produkty o wartości całego zamówienia jednym kliknięciem, zamiast ponownego wyszukiwania każdego artykułu przez klienta.
* Zachowuje oryginalną odmianę: jeśli kupili medium w kolorze niebieskim, powraca ta odmiana.
* Sprawdza wartość każdego linku do ponownego zamówienia i potwierdza, że ​​zalogowany klient jest właścicielem zamówienia przed dotknięciem koszyka, więc jeden klient nie może zmienić zamówienia innego.
* Pomija niedostępne produkty z powiadomieniem, zamiast zostawiać klienta z uszkodzonym lub w połowie wypełnionym koszykiem.
* Nie dodaje interfejsu JavaScript ani dodatkowych znaczników. Przycisk to normalna akcja zamówienia WooCommerce z małym, tematycznym arkuszem stylów (ładowanym tylko na stronie zamówień), dzięki czemu wyróżnia się bez zmiany układu strony konta.

Ustawienia znajdują się w sekcji <strong>WooCommerce → Zmień kolejność</strong>: zmień etykietę przycisku, wybierz, które statusy zamówienia mają mieć przycisk (Zakończone, Przetwarzanie, Wstrzymane) i zdecyduj, czy ponowne zamówienie wyląduje w koszyku czy w kasie.

Raporty o źródłach i błędach są dostępne na GitHubie pod adresem https://github.com/wppoland/plogins-reorder; problemy i poprawki mile widziane.

== Installation ==

1. Zainstaluj i aktywuj WooCommerce (8.0 lub nowszy).
2. Zainstaluj Reorder z katalogu wtyczek WordPress lub prześlij folder `reorder` do `/wp-content/plugins/`.
3. Aktywuj wtyczkę na ekranie <strong>Wtyczki<strong>. 4. Opcjonalnie odwiedź </strong>WooCommerce → Zmień kolejność<strong>, aby ustawić tekst przycisku, statusy i przekierowanie; rozsądne ustawienia domyślne działają od razu po wyjęciu z pudełka. 5. Przycisk „Zamów ponownie” pojawia się teraz przy kwalifikujących się poprzednich zamówieniach w </strong>Moje konto → Zamówienia</strong>.

== Frequently Asked Questions ==

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-reorder/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-reorder/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-reorder
* <strong>Raporty o błędach i prośby o nowe funkcje</strong> - https://github.com/wppoland/plogins-reorder/issues


= Is Reorder free? =
Tak. Ponowne zamówienie jest bezpłatne i objęte licencją GPL.

= Does Reorder require WooCommerce? =
Tak. Reorder jest rozszerzeniem WooCommerce i wymaga WooCommerce 8.0 lub nowszego. Pokazuje powiadomienie administratora i pozostaje nieaktywny, jeśli brakuje WooCommerce lub jest on nieaktualny.

= What happens to items that are no longer available? =
Są one pomijane, a klient widzi informację o produktach, których nie można było ponownie dodać. Wszystko, co można jeszcze kupić, zostaje dodane do koszyka.

= Which orders show the button? =
Domyślnie zrealizowane zamówienia. Możesz włączyć opcję Przetwarzanie i Wstrzymanie w <strong>WooCommerce → Zmień kolejność</strong>. Przycisk jest widoczny tylko dla klienta będącego właścicielem zamówienia.

= Does it work with product variations? =
Tak. Oryginalna odmiana (np. rozmiar i kolor) zostaje zachowana, więc poprawna odmiana zostanie dodana z powrotem do koszyka.

= Where does the customer go after reordering? =
Domyślnie do koszyka lub bezpośrednio do kasy, wybór w ustawieniach.

= How do I remove all plugin data? =
Usunięcie wtyczki z ekranu <strong>Wtyczki</strong> powoduje uruchomienie procedury odinstalowywania, która usuwa opcje `reorder_settings` i `reorder_db_version`. Opcja Reorder nie przechowuje niestandardowych tabel.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest kompatybilna z WordPress Multisite. Aktywuj go w sieci lub aktywuj na poszczególnych stronach; każda witryna przechowuje własne ustawienia i dane.

== External Services ==

Ponowne zamówienie nie łączy się z żadnymi usługami zewnętrznymi. Dodaje ponownie pozycje do standardowego koszyka WooCommerce tylko w Twojej witrynie.

== Screenshots ==

1. Przycisk „Zamów ponownie” na liście zamówień Moje Konto.
2. Strona ustawień: tekst przycisku, statusy zamówień i cel przekierowania.

== Changelog ==

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.1 =
* Zmieniono nazwę na Plogins Reorder dla WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.0 =
* Pierwsza wersja: przycisk ponownego zamówienia jednym kliknięciem w przypadku poprzednich zamówień, sprawdzany pod kątem własności i chroniony jednorazowo, z konfigurowalną etykietą, statusami i celem przekierowania.
