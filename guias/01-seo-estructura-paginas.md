# SEO on-page y estructura de páginas — ojojarocho.online

## Keywords objetivo (intención local + transaccional)
Primarias:
- cámaras de seguridad Veracruz
- instalación de cámaras de seguridad en Veracruz / Puerto de Veracruz
- instalador de cámaras CCTV Veracruz
- cámaras de seguridad Cardel
- venta de cámaras de seguridad Veracruz (envío nacional)
- mantenimiento de cámaras CCTV Veracruz
- redes y cableado estructurado Veracruz
- cotizador de cámaras de seguridad online

Cola larga (blog):
- cuánto cuesta instalar cámaras de seguridad en Veracruz
- cuántas cámaras necesita una casa
- cuánto dura la grabación en un disco de 1 TB
- Hikvision vs Dahua
- aviso de privacidad para cámaras en Veracruz

## Estructura de URLs recomendada
```
/                                     → home (landing general, ya existe)
/servicios/instalacion-camaras-cctv/
/servicios/mantenimiento-cctv/
/servicios/redes-cableado-estructurado/
/servicios/venta-de-equipos/          → enlaza a https://www.syscom.mx/tienda/ojojarocho
/servicios/visita-tecnica/
/instalacion-camaras-veracruz/        → landing zona
/instalacion-camaras-cardel/
/camaras-seguridad-boca-del-rio/
/camaras-seguridad-medellin/
/camaras-seguridad-alvarado/
/cotizador/                           → enlace a https://cotizador.ojojarocho.online/ (o página que incruste/enlace)
/blog/...                             → artículos (ver 05-blog-contenido.md)
/aviso-de-privacidad/                 → ya existe
```
Reglas:
- Una página por servicio (no todo en el home).
- Landings por zona con contenido genuinamente diferente (no solo cambiar el nombre de la ciudad): mencionar zonas/colonia reales, tiempos de traslado, ejemplo de proyecto local si existe.
- Cada landing: H1 = "[Servicio] en [Ciudad]", meta description única con servicio + ciudad + CTA, intro de 2-3 párrafos, lista de lo que incluye, CTA a cotizador online + WhatsApp, FAQ local (3-5 preguntas), enlace a catálogo SYSCOM, NAP en footer.
- Enlazado interno: home → servicios → landings de zona → blog; blog → servicios relacionados; todo con anchor descriptivo.
- URLs cortas, en español, sin acentos ni ñ (usa guiones).

## Home (ajustes on-page)
- Title actual OK, ajustar a: `Ojo Jarocho | Cámaras de seguridad e instalación CCTV en Veracruz y Cardel`
- Meta description: `Venta e instalación profesional de cámaras de seguridad (Hikvision, Dahua) en Veracruz, Cardel y Boca del Río. Cotizador online en 2 minutos, envío de equipos a todo México. WhatsApp 999 918 5208.`
- Un solo H1 (ya existe: "Instalación de cámaras de seguridad en Veracruz").
- Agregar sección visible "Zonas de servicio" con enlaces a las landings (Veracruz, Cardel, Boca del Río, Medellín, Alvarado).
- Agregar botón/enlace destacado "Cotizador online" → https://cotizador.ojojarocho.online/ en el hero y en el menú.
- Mantener NAP idéntico en todo el sitio: Ojo Jarocho · 999 918 5208 · ventas@ojojarocho.online.

## Técnico
- Enviar sitemap.xml a Google Search Console (verificar dominio con registro DNS).
- robots.txt: permitir todo, apuntar al sitemap.
- HTTPS forzado (ya debe estar en HostGator).
- Velocidad: ver 04-rendimiento-hostgator.md (afecta ranking móvil).
- Medir en GSC las consultas reales ("cámaras de seguridad veracruz", "instalar cámaras cardel") y reforzar esas páginas.
