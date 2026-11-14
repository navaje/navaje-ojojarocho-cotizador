# Cloudflare gratis (CDN) + imágenes WebP — ojojarocho.online

## A. Cloudflare (plan gratuito) — mejora el TTFB desde celular en México
1. Crea cuenta en cloudflare.com y "Add site" → escribe `oj ojarocho.online`.
2. Cloudflare detectará los registros DNS actuales (copiará A/AAAA/CNAME/MX/TXT). **Verifica que estén en naranja (proxied) los de la web (www y raíz) y en gris (solo DNS) los de correo (MX, mail, etc.)** para no romper ventas@ojojarocho.online.
3. En tu registrador de dominio (o en HostGator si ahí están los NS), cambia los nameservers a los que te da Cloudflare.
4. En Cloudflare → SSL/TLS → selecciona **Full** (no "Flexible").
5. Speed → Optimization → activa **Brotli** y **Early Hints**.
6. Rules → Page Rules (o Configuration Rules): crea una regla para `*oj ojarocho.online/wp-admin*` y `*wp-login.php*` con "Cache Level: Bypass".
7. Espera a que los NS propaguen (puede tardar minutos a 24 h). Verifica en https://www.ojojarocho.online/ que siga cargando con HTTPS.

## B. Imágenes a WebP (impacto directo en LCP)
1. Instala un plugin de optimización: **ShortPixel** o **WebP Express** (gratis con créditos / local). Alternativa: LiteSpeed Cache (si el servidor es LiteSpeed) tiene conversión a WebP integrada.
2. Configura: formato WebP, calidad 80-82, generar srcset, lazy-load activado (WordPress ya pone loading="lazy" por defecto; el hero queda en eager con el snippet 03).
3. Ejecuta la optimización masiva de la biblioteca de medios existente y marca "optimizar también las nuevas subidas".
4. Reglas para las fotos de instalaciones que subas después:
   - Hero: máximo 1600 px de ancho, WebP, ≤ 200 KB.
   - Galería/detalle: máximo 1200 px, ≤ 150 KB cada una.
   - Todas con texto alternativo descriptivo (SEO local: "cámara Hikvision instalada en fachada de negocio en Veracruz").
5. Verifica que las imágenes nuevas se sirvan como WebP (inspeccionar elemento → network).

## C. Qué NO hacer
- No actives a la vez dos plugins de caché/optimización (conflicto y sitio lento).
- No pongas el caché de cPanel activo si usas plugin de caché.
- No cambies SSL a "Flexible" en Cloudflare (bucle de redirección con HostGator).
