# Medición: PageSpeed, Search Console, GA4 y Clarity

## 1. Baseline y seguimiento — PageSpeed Insights
- Entra a https://pagespeed.web.dev/ → analiza `https://www.ojojarocho.online/`.
- Guarda los valores **móviles** ANTES de los cambios: LCP, INP, CLS + peso total (transfer size) y cantidad de requests.
- Repite después de cada cambio (mismo modo móvil). Objetivo: LCP ≤ 2.5 s, INP ≤ 200 ms, CLS ≤ 0.1.
- También mide `https://cotizador.ojojarocho.online/` (debe estar casi perfecto por ser estático).

## 2. Datos de campo reales — Google Search Console
- GSC → Experiencia → Core Web Vitals: espera ~28 días de datos reales de usuarios Chrome y busca que la home quede en verde.
- GSC → Rendimiento: anota las consultas que traen clics ("cámaras de seguridad veracruz", "instalar cámaras cardel") para reforzar esas páginas.

## 3. Eventos GA4 en la web principal (oj ojarocho.online)
Si ya tienes GA4 instalado en el sitio (mismo ID que el cotizador), pega este snippet en el `<head>` ( Apariencia → Editor de temas → header.php, o con un plugin de "Header and Footer Scripts"), justo después del código de gtag:

```html
<script>
document.addEventListener('click', function (e) {
  var a = e.target.closest('a');
  if (!a) return;
  var href = a.getAttribute('href') || '';
  if (typeof gtag !== 'function') return;
  if (href.indexOf('wa.me') !== -1 || href.indexOf('api.whatsapp.com') !== -1 || href.indexOf('web.whatsapp.com') !== -1) {
    gtag('event', 'whatsapp_click', { page: location.pathname });
  }
  if (href.indexOf('tel:') === 0) {
    gtag('event', 'phone_click', { page: location.pathname });
  }
  if (href.indexOf('syscom.mx') !== -1) {
    gtag('event', 'catalogo_click', { page: location.pathname });
  }
  if (href.indexOf('cotizador.ojojarocho.online') !== -1) {
    gtag('event', 'cotizador_click', { page: location.pathname });
  }
});
</script>
```

En GA4 → Admin → Eventos clave, marca como clave: `whatsapp_click`, `phone_click`, `cotizador_click`, `cotizacion_completada`.

## 4. Microsoft Clarity (gratis) — ver cómo usan tu sitio en celular
1. Crea proyecto en https://clarity.microsoft.com con el dominio `oj ojarocho.online` (copia el ID del proyecto).
2. Pega el script de Clarity en el `<head>` del tema (igual que GA4).
3. Usa "Grabaciones" y "Mapas de calor" para ver en qué pantallas móvil se atoran los usuarios antes de hacer clic en WhatsApp/cotizador.

## 5. Checklist de verificación después de aplicar todo
- [ ] PSI móvil: LCP < 2.5 s en home y páginas de servicio principales.
- [ ] GSC → Core Web Vitals en verde tras 28 días.
- [ ] Todas las imágenes se sirven en WebP con width/height (sin CLS).
- [ ] El chat RobotCam carga con defer (ver en Network → Initiator).
- [ ] HTTPS activo y Cloudflare en Full.
- [ ] GA4 recibe whatsapp_click / phone_click / cotizador_click (revisar en "Tiempo real" haciendo clic tú mismo).
- [ ] Clarity graba sesiones.
