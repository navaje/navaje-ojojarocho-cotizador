# Cotizador Ojo Jarocho (cotizador.ojojarocho.online)

Sitio estático de un solo archivo, mobile-first y sin dependencias: carga instantánea en celular (buenas Core Web Vitals por defecto).

## Archivos
- `index.html` — el cotizador completo (HTML + CSS + JS inline).
- `sitemap.xml` — para Google Search Console.

## Flujo del cotizador (9 pasos)
1. Tipo de espacio (casa, negocio, bodega…)
2. Número de cámaras (chips rápidos 1/2/4/8/16/24 o número exacto)
3. Ubicación (interior / exterior / mixto)
4. Calidad de imagen (HD / Full HD recomendada / 4K)
5. Días de retención (7/15/30/60/90+)
6. Grabación continua 24/7 o por movimiento
7. ¿Hay internet en el sitio?
8. Distancia al punto más lejano del router
9. Datos: nombre, WhatsApp (10 dígitos), zona y visita técnica

Resultado: resumen + **calculadora de almacenamiento** (GB/día, TB totales, disco recomendado en TB, días de retención con ese disco) + sistema sugerido + botón para **enviar todo por WhatsApp con mensaje pre-rellenado** (`wa.me`), copiar, imprimir o llamar.

## Cómo subirlo a HostGator (cPanel)
1. cPanel → **Administrador de archivos** → carpeta del subdominio `cotizador` (normalmente `public_html/cotizador`).
2. Sube `index.html` y `sitemap.xml` ahí (si ya hay un `index.html` viejo del cotizador inconcluso, haz backup y reemplázalo).
3. Verifica que `https://cotizador.ojojarocho.online/` cargue con **HTTPS** (SSL activo en cPanel → SSL/TLS Status).
4. Prueba en tu celular: completar los 9 pasos y enviar el WhatsApp.

## Configurar GA4 (medición)
1. Abre `index.html` y reemplaza `G-XXXXXXXXXX` en `CONFIG.ga4Id` por tu ID real de GA4 (el de la propiedad de ojojarocho.online sirve; el subdominio se mide en la misma propiedad si es del mismo dominio raíz `*.ojojarocho.online`).
2. En GA4 → Admin → **Eventos clave**: marca como clave `cotizacion_completada` y `whatsapp_click`.
3. Eventos que se envían: `cotizador_iniciado`, `paso_visto` (con paso e id), `cotizacion_completada` (con cámaras/calidad/días/disco), `whatsapp_click`, `phone_click`, `copiar_resumen`.

## Configurar Google Search Console
1. Agrega la propiedad `https://cotizador.ojojarocho.online/` (verificación por registro DNS o etiqueta HTML).
2. Envía el sitemap: `https://cotizador.ojojarocho.online/sitemap.xml`.
3. Vincula la propiedad de GSC con GA4 (GSC → Configuración → Asociaciones).

## Enlazar desde el sitio principal (WordPress)
- Menú principal: agrega **"Cotizador online"** → `https://cotizador.ojojarocho.online/`.
- En la home, junto a los botones "Cotizar por WhatsApp", agrega un botón **"Cotizador en 2 minutos"** que apunte al subdominio.
- En cada página de servicio, el CTA puede abrir el cotizador con el servicio preseleccionado (se puede agregar con un parámetro `?tipo=negocio` en una versión futura).

## Fotos (para la web principal, no para el cotizador)
Con **6 a 10 fotos reales** de tus instalaciones basta: 1 para el hero (fachada con cámara visible, horizontal 1600 px), 3-4 de cámaras/DVR/tablero instalado, 2-3 de antes/después. Optimízalas a **WebP o JPG ≤ 200 KB** antes de subirlas (en cPanel o con un plugin como ShortPixel/WebP Express). Si tienes menos fotos, se compensa con reseñas de Google incrustadas y la sección de confianza.

## Mantenimiento
- Si cambias el número de WhatsApp o el correo, actualiza `CONFIG` al inicio del `<script>` y el footer.
- Para agregar un paso nuevo, agrégalo al arreglo `pasos` (cada paso tiene `html()` y `validar()`).
