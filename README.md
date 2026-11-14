# Ojo Jarocho — Cotizador online y guías de mejora web

Proyecto para mejorar **oj ojarocho.online** (videovigilancia profesional y redes; servicio local en Puerto de Veracruz y Cardel, venta de equipos con envío nacional vía SYSCOM).

## Contenido

### `cotizador/` — cotizador terminado para `cotizador.ojojarocho.online`
- `index.html` — sitio estático de un solo archivo, mobile-first, sin dependencias. Flujo de 9 pasos con validaciones, calculadora de almacenamiento (GB/día, TB totales, disco recomendado en TB, días de retención), sistema sugerido y botón "Enviar por WhatsApp" con el resumen pre-rellenado (`wa.me/5219999185208`).
- `sitemap.xml` — para Google Search Console.
- `README.md` — instrucciones para subirlo a HostGator (cPanel), configurar GA4 y Search Console, y enlazarlo desde el WordPress principal.

### `guias/` — guías listas para aplicar en el sitio principal (WordPress en HostGator)
- `01-seo-estructura-paginas.md` — keywords objetivo, estructura de URLs, páginas por servicio y por zona (Veracruz, Cardel, Boca del Río, Medellín, Alvarado), ajustes on-page de la home.
- `02-schema-json-ld.json` — datos estructurados (Organization + LocalBusiness + Service) para pegar en la home.
- `03-google-business-profile.md` — plan completo de Google Business Profile: categorías, área de servicio, fotos, publicaciones, Q&A y estrategia de reseñas.
- `04-rendimiento-hostgator.md` — checklist de Core Web Vitals en cPanel (PHP 8.3, caché, WebP, Cloudflare gratis, medición en PageSpeed/GSC).
- `05-blog-contenido.md` — calendario de 12 artículos SEO que enlazan al cotizador.
- `06-whatsapp-ctas.md` — enlaces `wa.me` con mensaje predefinido por página y eventos GA4.

## Orden recomendado de implementación
1. Subir el cotizador al subdominio `cotizador` en HostGator y enlazarlo desde el menú del sitio principal.
2. Rendimiento móvil (guía 04).
3. SEO on-page + schema + landings por zona (guías 01 y 02).
4. Google Business Profile y reseñas (guía 03).
5. Blog mensual (guía 05) y CTAs de WhatsApp por página (guía 06).
