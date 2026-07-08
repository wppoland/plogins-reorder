=== Plogins Reorder - One-Click Reorder for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, reorder, buy again, repeat order, order again
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Requiere complementos: woocommerce
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Añade un botón "Ordenar nuevamente" a pedidos anteriores de WooCommerce. Un clic vuelve a añadir los artículos que aún están disponibles al carrito y envía al cliente hacia adelante.

== Description ==

Reordenar añade un botón <strong>"Pedir de nuevo"</strong> a cada pedido anterior en WooCommerce <strong>Mi cuenta → Pedidos</strong>. Cuando un cliente hace clic en él, todos los artículos que aún se pueden comprar de ese pedido regresan al carrito y llegan a la página del carrito o al pago, lo que haya elegido en la configuración.

Los artículos que ya no están (eliminados, ocultos o agotados) quedan fuera y el cliente ve un aviso que indica lo que no se pudo añadir para que no haya sorpresas silenciosas en el carrito.

Qué hace el complemento:

* Vuelve a añadir los productos de un pedido completo con un solo clic, en lugar de que el cliente vuelva a buscar cada artículo.
* Mantiene la variación original: si compraron el mediano en azul, esa es la variación que regresa.
* Verifica el nonce en cada enlace de reorden y confirma que el cliente que inició sesión es el propietario del pedido antes de tocar el carrito, por lo que un cliente no puede reordenar el pedido de otro.
* Omite productos no disponibles con un aviso en lugar de dejar al cliente con un carrito roto o medio lleno.
* No añade JavaScript de interfaz ni marcas adicionales. El botón es una acción de pedido normal de WooCommerce con una pequeña hoja de estilo temática (cargada solo en la página de pedidos), por lo que se destaca sin cambiar el diseño de la página de su cuenta.

La configuración se encuentra en <strong>WooCommerce → Reordenar</strong>: cambie la etiqueta del botón, elija qué estados de pedido obtienen el botón (Completado, Procesando, En espera) y decida si el reordenamiento llega al carrito o al finalizar la compra.

Los informes de fuentes y errores se encuentran disponibles en GitHub en https://github.com/wppoland/plogins-reorder; Se aceptan problemas y parches.

== Installation ==

1. Instale y active WooCommerce (8.0 o posterior).
2. Instale Reorder desde el directorio de complementos de WordPress o cargue la carpeta `reorder` en `/wp-content/plugins/`.
3. Active el complemento a través de la pantalla <strong>Complementos<strong>. 4. Opcionalmente, visite </strong>WooCommerce → Reordenar<strong> para configurar el texto del botón, los estados y la redirección; Los valores predeterminados sensatos funcionan de inmediato. 5. Ahora aparece un botón "Volver a realizar el pedido" en los pedidos anteriores que califican en </strong>Mi cuenta → Pedidos</strong>.

== Frequently Asked Questions ==

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-reorder/docs/
* <strong>Página de complementos</strong> - https://plogins.com/es/plogins-reorder/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-reorder
* <strong>Informes de errores y solicitudes de funciones</strong> - https://github.com/wppoland/plogins-reorder/issues


= Is Reorder free? =
Sí. Reordenar es gratuito y tiene licencia GPL.

= Does Reorder require WooCommerce? =
Sí. Reorder es una extensión de WooCommerce y requiere WooCommerce 8.0 o posterior. Muestra un aviso de administrador y permanece inactivo si WooCommerce falta o está desactualizado.

= What happens to items that are no longer available? =
Se omiten y el cliente ve un aviso que nombra los productos que no se pudieron volver a añadir. Todo lo que aún se puede comprar se añade al carrito.

= Which orders show the button? =
Por defecto, pedidos completados. También puedes habilitar Procesamiento y En espera en <strong>WooCommerce → Reordenar</strong>. El botón solo se muestra al cliente propietario del pedido.

= Does it work with product variations? =
Sí. La variación original (por ejemplo, tamaño y color) se conserva, por lo que la variación correcta se vuelve a añadir al carrito.

= Where does the customer go after reordering? =
Al carrito por defecto, o directamente al pago, tu elección en la configuración.

= How do I remove all plugin data? =
Al eliminar el complemento de la pantalla <strong>Complementos</strong> se ejecuta la rutina de desinstalación, que elimina las opciones `reorder_settings` y `reorder_db_version`. Reordenar tiendas sin tablas personalizadas.


= Does this plugin work on WordPress Multisite? =

Sí. Este complemento es compatible con WordPress Multisite. Activarlo en red o activarlo en sitios individuales; Cada sitio mantiene su propia configuración y datos.

== External Services ==

Reorder no se conecta a ningún servicio externo. Solo vuelve a añadir artículos al carrito estándar de WooCommerce en tu propio sitio.

== Screenshots ==

1. El botón "Ordenar nuevamente" en la lista de pedidos de Mi Cuenta.
2. Página de configuración: texto del botón, estados de pedidos y destino de redireccionamiento.

== Changelog ==

= 1.0.1 =
* Primera versión estable.

= 0.1.1 =
* Renombrado a Plogins Reorder for WooCommerce para obtener un nombre de complemento más distintivo.

= 0.1.0 =
* Lanzamiento inicial: botón para reordenar con un solo clic en pedidos anteriores, con propiedad verificada y no protegida, con etiqueta configurable, estados y destino de redireccionamiento.
