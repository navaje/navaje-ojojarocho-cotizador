# Paquete Rendimiento (Core Web Vitals móvil) — ojojarocho.online en HostGator

Metas en móvil (percentil 75, datos de campo de Google): **LCP ≤ 2.5 s · INP ≤ 200 ms · CLS ≤ 0.1**.

## Orden de aplicación
1. **Servidor (cPanel)** — 10 min
   - cPanel → MultiPHP Manager → dominio → **PHP 8.3**.
   - Plugin de caché de página: **FlyingPress** (recomendado en HostGator/Apache) o WP Rocket. Si el servidor usa LiteSpeed, usa **LiteSpeed Cache** (gratis). No actives la caché de cPanel si usas plugin.
   - Limpieza: elimina plugins inactivos y temas que no uses; limpia revisiones y transitorios (WP-Optimize o el módulo de base de datos del plugin de caché).
2. **Imágenes a WebP** — ver `04-cloudflare-e-imagenes.md`
3. **Cloudflare gratis (CDN)** — ver `04-cloudflare-e-imagenes.md`
4. **Código listo para pegar** — `03-functions-tema-hijo.php` al `functions.php` de tu **tema hijo** (nunca en el tema padre; se pierde al actualizar). Crea el tema hijo si no existe: carpeta `wp-content/themes/tu-tema-hijo/` con `style.css` que declare `Template: nombre-del-tema-padre` y `functions.php` con el contenido de `03`.
5. **.htaccess** — `02-htaccess-cache-compresion.txt`: pégalo al FINAL de `.htaccess` (cPanel → Administrador de archivos → mostrar ocultos). **Solo la parte de caché de navegador/estáticos si tu plugin de caché ya comprime**; si no usas plugin de caché, pega todo el bloque.
6. **Medición** — `05-medicion-ga4-clarity.md`: PageSpeed Insights antes/después, GSC → Core Web Vitals, Microsoft Clarity y eventos GA4 de contacto en la web principal.

## Diagnóstico rápido esperado
- El widget de chat RobotCam es un script de terceros que afecta INP: el snippet `03` lo manda a `defer`; a mediano plazo evalúa reemplazarlo por el botón flotante de WhatsApp (más ligero y convierte más).
- La imagen del hero debe ser WebP, ≤ 1600 px de ancho, con preload + `fetchpriority="high"` (el snippet lo hace con la imagen destacada de la home).

## Archivos
- `02-htaccess-cache-compresion.txt` — caché de navegador y compresión (Gzip/Brotli).
- `03-functions-tema-hijo.php` — quita bloat de WP (emojis, embeds, REST links), diferir JS de terceros, preload del hero LCP.
- `04-cloudflare-e-imagenes.md` — Cloudflare gratis paso a paso + conversión de imágenes a WebP.
- `05-medicion-ga4-clarity.md` — cómo medir (PSI/GSC), metas y snippets de GA4 + Clarity para la web principal.
