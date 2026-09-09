# Propuesta: Tienda en línea Fluidtec (tienda.fluidtec.com)

Desarrollo de un e-commerce independiente, enlazado desde el sitio actual fluidtec.com.

## Objetivo

- Habilitar venta en línea con pago directo (tarjeta / transferencia) para el catálogo de productos neumáticos y eléctricos de Fluidtec.
- Operar como sitio independiente en un subdominio (tienda.fluidtec.com), sin modificar el sitio institucional actual.
- Aprovechar el catálogo ya existente (~19 categorías: cilindros, conexiones, mangueras, válvulas, sensores, relevadores, PLC, etc.) como base de productos.

## Contexto actual

- El sitio actual (fluidtec.com) es informativo: catálogo, fichas técnicas descargables y formulario de contacto — no tiene carrito ni cobro en línea.
- No existe base de datos ni backend de e-commerce; el catálogo vive en archivos estáticos.
- Se requiere una plataforma nueva, dedicada a la venta, con su propio dominio/subdominio.

## Alcance propuesto

- Sitio nuevo en tienda.fluidtec.com.
- Catálogo de productos con precios públicos.
- Carrito de compra + checkout con pago en línea (tarjeta de crédito/débito, y opcionalmente transferencia/SPEI).
- Enlace desde el sitio actual ("Comprar en línea" → tienda.fluidtec.com).
- Panel de administración para gestionar productos, precios, pedidos e inventario.

## Alternativa 1: Plataforma lista (SaaS)

*Ejemplos: Shopify, Tiendanube/Nuvemshop, Mercado Shops*

**Ventajas**
- Lanzamiento más rápido (semanas, no meses).
- Pagos, seguridad, hosting e infraestructura ya resueltos.
- Pasarelas de pago mexicanas integradas (Mercado Pago, Stripe, Conekta, PayPal).
- Panel de administración ya hecho, fácil de usar sin conocimientos técnicos.
- Actualizaciones y mantenimiento a cargo del proveedor.

**Desventajas**
- Costo recurrente mensual de por vida (suscripción + comisiones por transacción).
- Menor control/flexibilidad para catálogos técnicos complejos (specs, fichas técnicas, tablas de compatibilidad).
- Dependencia total del proveedor (si suben precios o cambian políticas, no hay alternativa).
- Personalización visual limitada a plantillas/temas.

## Alternativa 2: WooCommerce (WordPress)

**Ventajas**
- Código abierto, sin cuota de licencia de la plataforma en sí.
- Muy flexible: miles de plugins (catálogo técnico, filtros avanzados, cotizaciones, multi-precio B2B).
- Control total del diseño, acorde a la identidad de marca de Fluidtec.
- Comunidad y soporte amplios en español; fácil encontrar desarrolladores en México.
- Se puede empezar simple y crecer (agregar funciones después sin migrar de plataforma).

**Desventajas**
- Requiere hosting propio y mantenimiento (actualizaciones de WordPress/plugins, seguridad, backups).
- Puede volverse lento o inestable si se acumulan muchos plugins sin buen mantenimiento.
- El costo inicial de desarrollo/diseño a medida es mayor que una plantilla SaaS.

## Alternativa 3: Desarrollo a medida (desde cero)

*Ejemplos de stack: Next.js/React + Laravel o Node.js + pasarela de pago directa (Stripe/Mercado Pago), base de datos propia*

**Ventajas**
- Control total: diseño, funcionalidades, integración con ERP/inventario interno, catálogo técnico avanzado (fichas, comparadores, buscador por especificaciones).
- Sin cuotas de licencia de plataforma ni comisiones adicionales de "marketplace".
- Escalable a largo plazo: se adapta a necesidades futuras (B2B con precios por cliente, cotizaciones, multi-almacén, etc.).
- Rendimiento y SEO optimizables al máximo.

**Desventajas**
- Mayor costo y tiempo de desarrollo inicial.
- Toda la infraestructura, seguridad y mantenimiento corren por cuenta de Fluidtec (o de un proveedor externo contratado).
- Cualquier función "de fábrica" en Shopify/WooCommerce hay que construirla desde cero (carrito, checkout, gestión de pedidos, panel admin, etc.).
- Requiere mantenimiento técnico continuo (actualizaciones, parches de seguridad, escalabilidad).

## Cuadro comparativo

| Criterio | SaaS (Shopify/Tiendanube) | WooCommerce | A medida |
|---|---|---|---|
| Velocidad de lanzamiento | Muy rápida (2-4 semanas) | Media (4-8 semanas) | Lenta (8-16+ semanas) |
| Costo inicial | Bajo | Medio | Alto |
| Costo recurrente | Medio-alto (suscripción + comisiones) | Bajo (solo hosting) | Bajo-medio (solo infraestructura) |
| Flexibilidad/control | Baja | Alta | Total |
| Mantenimiento técnico | Ninguno (lo hace el proveedor) | Requerido (moderado) | Requerido (alto) |
| Ideal para | Empezar rápido, validar el modelo | Balance costo/control, catálogo mediano-grande | Catálogo complejo B2B, integración con sistemas internos |

## Estimado de costos (referencia, mercado México)

> Nota: son rangos orientativos; el costo final depende del proveedor y del alcance exacto.

**Opción SaaS (Shopify/Tiendanube)**
- Desarrollo/configuración inicial: $15,000 – $35,000 MXN (una sola vez)
- Suscripción mensual: $500 – $1,600 MXN/mes
- Comisión por transacción: ~2.5% – 3.5% por venta (según pasarela)

**Opción WooCommerce**
- Desarrollo/diseño inicial: $35,000 – $80,000 MXN (una sola vez)
- Hosting: $150 – $600 MXN/mes
- Mantenimiento (opcional, recomendado): $1,500 – $4,000 MXN/mes
- Comisión por transacción: ~2.9% – 3.5% (solo de la pasarela de pago, no de la plataforma)

**Opción a medida**
- Desarrollo: $120,000 – $300,000+ MXN (según funciones: catálogo técnico, panel admin, integraciones)
- Hosting/infraestructura: $500 – $3,000 MXN/mes
- Mantenimiento evolutivo: variable, según acuerdo con el desarrollador/agencia

## Tiempos estimados

- SaaS: 2 – 4 semanas
- WooCommerce: 4 – 8 semanas
- Desarrollo a medida: 8 – 16+ semanas

## Recomendación

- Si la prioridad es lanzar rápido y validar la demanda de venta en línea con bajo riesgo: **SaaS (Shopify/Tiendanube)**.
- Si se busca un balance entre control, costo y flexibilidad a mediano plazo, aprovechando el catálogo técnico ya estructurado: **WooCommerce**.
- Si el objetivo es una plataforma robusta a largo plazo, con integración a sistemas internos (ERP/inventario) y catálogo B2B avanzado: **Desarrollo a medida**.
- Una ruta intermedia común: lanzar en WooCommerce o SaaS primero, y evaluar migrar a desarrollo a medida cuando el volumen de ventas lo justifique.

## Próximos pasos

- Definir presupuesto disponible para acotar la alternativa final.
- Definir catálogo inicial a publicar (todas las categorías o un subconjunto piloto).
- Elegir pasarela(s) de pago (Mercado Pago, Stripe, Conekta, etc.).
- Definir responsable de manejo de inventario y pedidos.
- Solicitar cotizaciones formales a 2-3 proveedores/desarrolladores para comparar contra estos rangos estimados.
