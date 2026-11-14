# Rendimiento móvil en HostGator (cPanel) — Core Web Vitals

Metas en móvil (percentil 75, datos de campo): **LCP ≤ 2.5 s · INP ≤ 200 ms · CLS ≤ 0.1**. Solo ~48% de los sitios móviles las cumplen; cumplirlas sube ranking y conversión.

## 1. Baseline (antes de tocar nada)
- PageSpeed Insights (pagespeed.web.dev) en modo móvil para `https://www.ojojarocho.online/` y para el cotizador. Guarda captura.
- Search Console → Experiencia → Core Web Vitals (si hay datos de campo).
- Anota peso total de la home (GTmetrix o WebPageTest, ubicación México si existe).

## 2. Servidor (cPanel)
- **MultiPHP Manager** → dominio → PHP **8.3** (≈40% más rápido que 7.4 en WordPress).
- Caché: en plan Business (Apache) usa un plugin de caché de página: **FlyingPress** (recomendado en HostGator) o WP Rocket. Si tu servidor usa LiteSpeed, usa **LiteSpeed Cache** (gratis). No actives la caché de cPanel si usas plugin.
- Compresión Brotli/Gzip y caché de navegador para estáticos (el plugin lo configura; si no, .htaccess con `expires 30d` para jpg/png/webp/css/js/woff2).

## 3. Imágenes (mayor impacto en LCP)
- Convierte todas las imágenes a **WebP** (plugin ShortPixel o WebP Express; o desde cPanel si hay herramienta). Calidad 80-82.
- Hero: ancho máx 1600 px, **preload** del LCP, `fetchpriority="high"`, sin lazy-load.
- Todas las imágenes con `width`/`height` o `aspect-ratio` (evita CLS) y `loading="lazy"` excepto el hero.
- Fotos de instalaciones que subas después: ≤ 200 KB cada una.

## 4. JavaScript de terceros (impacta INP)
- El chat RobotCam, mapas embebidos y sliders: cargar con `defer`/`async` o reemplazar el chat por el botón flotante de WhatsApp (más ligero y convierte más).
- Desactiva plugins que no uses; elimina temas inactivos; limpia revisiones/transitorios de la base de datos (WP-Optimize o módulo de LSCache).
- Limita el peso total de la home a < 1 MB y los JS a < 300 KB en móvil.

## 5. CDN gratis
- **Cloudflare** (plan gratuito): cambia los DNS de ojojarocho.online a Cloudflare, SSL "Full", activa caché y compresión Brotli. Mejora el TTFB desde celular en México.

## 6. Medición continua
- PageSpeed Insights después de cada cambio (modo móvil, perfil 4G lento).
- GSC → Core Web Vitals (verde = objetivo).
- **Microsoft Clarity** (gratis): instala el script en el tema (header) para ver grabaciones reales de usuarios en celular y detectar dónde se atoran.
- GA4 + GTM con eventos clave: `whatsapp_click`, `phone_click`, `generate_lead`, `cotizacion_completada` (ya vienen en el cotizador; en la web principal configúralos con GTM: activador clic en enlaces wa.me / tel:).
