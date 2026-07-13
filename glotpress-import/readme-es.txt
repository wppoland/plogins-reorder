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

Añade un botón «Pedir de nuevo» a pedidos anteriores de WooCommerce. Un clic vuelve a añadir los artículos aún disponibles al carrito y envía al cliente adelante.

== Description ==

Reorder añade un botón <strong>«Pedir de nuevo»</strong> a cada pedido anterior en WooCommerce <strong>Mi cuenta → Pedidos</strong>. Cuando un cliente hace clic, cada artículo que aún se puede comprar de ese pedido vuelve al carrito y llega a la página del carrito o al pago, según lo que hayas elegido en los ajustes.

Los artículos que ya no están (eliminados, ocultos o agotados) se omiten y el cliente ve un aviso con los productos que no se pudieron añadir, para que no haya sorpresas silenciosas en el carrito.

Qué hace el plugin:

* Vuelve a añadir los productos de un pedido completo con un solo clic, en lugar de que el cliente busque cada artículo de nuevo.
* Mantiene la variación original: si compraron la talla M en azul, vuelve esa variación.
* Verifica el nonce en cada enlace de repetición de pedido y confirma que el cliente con sesión iniciada es el propietario del pedido antes de tocar el carrito, así un cliente no puede repetir el pedido de otro.
* Omite productos no disponibles con un aviso en lugar de dejar al cliente con un carrito roto o a medias.
* No añade JavaScript de interfaz ni marcado extra. El botón es una acción de pedido normal de WooCommerce con una hoja de estilos pequeña y temática (cargada solo en la página de pedidos), así destaca sin cambiar el diseño de tu página de cuenta.

Los ajustes están en <strong>WooCommerce → Reorder</strong>: cambia la etiqueta del botón, elige qué estados de pedido muestran el botón (Completado, En proceso, En espera) y decide si la repetición del pedido va al carrito o al pago.

Código fuente e informes de errores en GitHub: https://github.com/wppoland/plogins-reorder — incidencias y parches bienvenidos.

== Installation ==

1. Instala y activa WooCommerce (8.0 o posterior).
2. Instala Reorder desde el directorio de plugins de WordPress o sube la carpeta `reorder` a `/wp-content/plugins/`.
3. Activa el plugin en la pantalla <strong>Plugins</strong>.
4. Opcionalmente entra en <strong>WooCommerce → Reorder</strong> para configurar el texto del botón, los estados y la redirección; los valores predeterminados sensatos funcionan de inmediato.
5. El botón «Pedir de nuevo» aparece ahora en pedidos anteriores que cumplan los requisitos en <strong>Mi cuenta → Pedidos</strong>.

== Frequently Asked Questions ==

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-reorder/docs/
* <strong>Página del plugin</strong> - https://plogins.com/es/plogins-reorder/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-reorder
* <strong>Informes de errores y peticiones de funciones</strong> - https://github.com/wppoland/plogins-reorder/issues


= Is Reorder free? =
Sí. Reorder es gratuito y tiene licencia GPL.

= Does Reorder require WooCommerce? =
Sí. Reorder es una extensión de WooCommerce y requiere WooCommerce 8.0 o posterior. Muestra un aviso de administración y permanece inactivo si falta WooCommerce o está desactualizado.

= What happens to items that are no longer available? =
Se omiten y el cliente ve un aviso con los productos que no se pudieron volver a añadir. Todo lo que aún se puede comprar se añade al carrito.

= Which orders show the button? =
Por defecto, pedidos completados. También puedes activar En proceso y En espera en <strong>WooCommerce → Reorder</strong>. El botón solo lo ve el cliente propietario del pedido.

= Does it work with product variations? =
Sí. Se conserva la variación original (p. ej. talla y color), así que vuelve la variación correcta al carrito.

= Where does the customer go after reordering? =
Al carrito por defecto o directamente al pago, según elijas en los ajustes.

= How do I remove all plugin data? =
Al borrar el plugin desde la pantalla <strong>Plugins</strong> se ejecuta la rutina de desinstalación, que elimina las opciones `reorder_settings` y `reorder_db_version`. Reorder no crea tablas personalizadas.


= Does this plugin work on WordPress Multisite? =

Sí. Este plugin es compatible con WordPress Multisite. Actívalo en toda la red o en sitios concretos; cada sitio conserva sus propios ajustes y datos.

== External Services ==

Reorder no se conecta a ningún servicio externo. Solo vuelve a añadir artículos al carrito estándar de WooCommerce en tu propio sitio.

== Screenshots ==

1. El botón «Pedir de nuevo» en la lista de pedidos de Mi cuenta.
2. Página de ajustes: texto del botón, estados de pedido y destino de redirección.

== Translations ==

Plogins Reorder incluye traducciones al polaco, al alemán y al español para la interfaz del plugin. El dominio de texto es `plogins-reorder`, por lo que los paquetes de idioma de WordPress.org también pueden sobrescribir o ampliar estas traducciones incluidas.

== Changelog ==

= 1.0.2 =
* Se añadieron traducciones incluidas al polaco, al alemán y al español para la interfaz del plugin.

= 1.0.1 =
* Primera versión estable.

= 0.1.1 =
* Renombrado a Plogins Reorder para WooCommerce para conseguir un nombre de plugin más distintivo.

= 0.1.0 =
* Versión inicial: botón de repetición de pedido con un clic en pedidos anteriores, con comprobación de propiedad y protección nonce, con etiqueta, estados y destino de redirección configurables.
