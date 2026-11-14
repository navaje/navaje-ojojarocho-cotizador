# CTAs de WhatsApp por página (wa.me con mensaje predefinido)

Número: 999 918 5208 → formato internacional wa.me: **5219999185208**
Formato: `https://wa.me/5219999185208?text=MENSAJE_URL_ENCODIFICADO`

## Mensajes predefinidos por página
- Home: `Hola Ojo Jarocho, vi su sitio y quiero cotizar cámaras de seguridad en Veracruz.`
- /servicios/instalacion-camaras-cctv/: `Hola, quiero cotizar la instalación de un sistema CCTV en Veracruz/Cardel.`
- /servicios/mantenimiento-cctv/: `Hola, necesito mantenimiento o revisión de mi sistema de cámaras.`
- /servicios/redes-cableado-estructurado/: `Hola, quiero cotizar instalación de red / WiFi en mi casa o negocio.`
- /servicios/venta-de-equipos/ y catálogo SYSCOM: `Hola, quiero consultar precio y disponibilidad de equipos del catálogo Ojo Jarocho en SYSCOM.`
- Landings por zona (/instalacion-camaras-cardel/ etc.): `Hola, quiero cotizar cámaras de seguridad en [CIUDAD].`
- Resultado del cotizador: el mensaje completo autogenerado (ya incluido en cotizador.ojojarocho.online).

Ejemplo codificado (home):
`https://wa.me/5219999185208?text=Hola%20Ojo%20Jarocho%2C%20vi%20su%20sitio%20y%20quiero%20cotizar%20c%C3%A1maras%20de%20seguridad%20en%20Veracruz.`

## Reglas
- Un solo botón flotante abajo a la derecha, sin animaciones agresivas; en móvil que no tape contenido.
- Botón sticky en móvil con Llamar / WhatsApp / Cotizar.
- WhatsApp Business (app gratuita): mensaje de bienvenida, mensaje de ausencia fuera de horario, respuestas rápidas, catálogo y etiquetas (nuevo lead / cotizado / instalado).
- Medir en GA4: evento `whatsapp_click` al hacer clic (GTM: activador clic en enlaces que contengan wa.me).
