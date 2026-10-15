# Fichas técnicas — avance

Registro de las categorías de `data/productos.php` ya actualizadas con su
array `familias` (imágenes, descripciones y grupos de filtro) para que
`fichas.php?cat={slug}` las renderice correctamente. `equipos.php` lee el
mismo archivo, así que cualquier cambio aquí se refleja en ambas páginas.

## Registro de cambios

### 2026-09-28

- **Slider principal del inicio más alto**: `.fluidtec-hero-slider` pasa de
  720px a 850px en escritorio y de 560px a 640px en móvil (≤768px). Cambio
  aplicado en `assets/css/custom.css` (usado por `index.php`) y en
  `src/pages/index.html` (versión estática).
- **Botonería**: `img_ficha` apunta ahora a
  `assets/images/equipos/fichas/BOTONERIA/BOTONERIA-FICHA.png` (nueva) y se
  agregó `img_no_card => true`.
- **PLC's**: `img_ficha` corregido a
  `assets/images/equipos/fichas/PLC/PLC-FICHA.png` (nueva; la ruta anterior
  `assets/images/equipos/PLC-FICHA.png` no existía) y se agregó
  `img_no_card => true`.
- **Correo de contacto** (`send_mail.php`): el cuerpo HTML del mensaje se
  rediseñó con plantilla de marca (encabezado con degradado azul/verde, tabla
  de Nombre/Correo/Empresa, bloque de mensaje y pie). El `AltBody` en texto
  plano no cambia.
- **Imágenes actualizadas/optimizadas**: banners del slider
  (`FLUDITEC-BANNER-3-WEB-3.png`, `fluidtec-banner-slider-1..5.png`) y
  collages `*SIN FONDO.png` de Contactores, Controladores, Fuentes,
  Interruptores, Potenciómetro, Riel DIN y Torretas.
- **Válvulas**: nueva carpeta `assets/images/equipos/fichas/VALVULAS/PDF/`
  con los PDFs de fichas y banners de productos 2026. Los `.pdf` están en
  `.gitignore`, así que deben subirse al servidor por separado.

## Categorías completadas

| Slug | Título | Familias | Notas |
|---|---|---|---|
| `sensores` | Sensores | Inductivos, Capacitivos, Fotoeléctricos, Cables con conector, Accesorios | Accesorios usa `IC_SENSORES.png` como imagen temporal (falta foto real de los soportes). |
| `fuentes-de-alimentacion` | Fuentes de alimentación | Monofásicas, Trifásicas | — |
| `interruptores` | Interruptores | Mini interruptores, Pedales, Interruptores de límite | Renombrado desde el slug `interruptores-de-limite` (no había otras referencias al slug viejo). |
| `potenciometro` | Potenciómetro | 10 vueltas, 1 vuelta | — |
| `riel-din` | Canaleta y Riel DIN | Canaleta ranurada, Riel DIN Omega | `fichas_dir` corregido a `RIEL_CANALETA`. |
| `torretas` | Torretas de Señalización | Torreta AC 110–220 VCA, Torreta 24 VCC, Luces y Buzzer, Accesorios | — |
| `controladores` | Controladores de temperatura y contadores | Control de temperatura, Contador digital | `fichas_dir` corregido a `CONTROLADORES-CONTADORES`. |
| `proteccion-de-motores` | Protección de Motores | Contactor, Relé de sobrecarga, Interruptor termomagnético, Contacto auxiliar, Accesorios | Fusiona las categorías `contactores`, `interruptores-termomagneticos` y `caja-para-arrancador` (eliminadas de `equipos.php`). |
| `relevadores-de-control` | Relevadores de Control | Estado Sólido, R1520, Tipo Clema, R2 y R4, RM85, Bases y Accesorios | R2/R4 y RM85 comparten el filtro "R2, R4 y RM85" del sidebar, igual que en el mockup. "Bases y Accesorios" usa `BASE_RELEVADOR.png`: la imagen `BASESACCESORIOS.png` subida es un duplicado de `RELEVADORES_R2.png`. |

## PDFs de fichas técnicas

Los PDFs ya subidos viven en `assets/images/equipos/fichas/{fichas_dir}/PDF/`
(no en `assets/fichas-tecnicas/`, que quedó sin usarse). `fichas.php` busca el
archivo ahí: si `is_file()` lo encuentra, muestra el botón "Descargar"; si no,
muestra "Próximamente". Por eso el campo `file` de cada familia debe ser el
nombre EXACTO (mayúsculas/espacios/acentos) del PDF real en esa carpeta.

Se corrigió `fichas_dir` en 3 categorías para que coincida con la carpeta real:
- `conexiones`: `CONECTORES` → `CONEXIONES`
- `tratamiento-de-aire`: `TRATAMIENTO DE AIRE` → `TRATAMIENTOS_DE_AIRE`
- `fuentes-de-alimentacion`: `FUENTES DE ALIMENTACION` → `FUENTES`

Categorías con PDFs ya enlazados (todas sus familias o casi todas):
cilindros, conexiones (falta "Reducciones BUSHING"), mangueras,
tratamiento-de-aire (las 9 familias), valvulas-neumaticas (faltan 4M, F-MFH,
F-SY — no hay PDF subido con esos nombres), valvulas-de-vacio (las 5 familias
comparten un único PDF general `FLUIDTEC VACIO.pdf`), sensores (faltan
"Cables con conector" y "Accesorios"), relevadores-de-control (falta "Bases y
Accesorios"), fuentes-de-alimentacion, interruptores (falta "Pedales"),
proteccion-de-motores (falta "Accesorios"; hay un PDF suelto sin usar,
`GUARDA MOTOR .pdf`, que no se pudo emparejar con una familia con certeza),
potenciometro, riel-din.

Categorías sin carpeta `PDF/` todavía (todos sus botones en "Próximamente"):
botoneria, cables-y-accesorios, plc, ventiladores, torretas, controladores.

## Pendientes

- Imagen real de **Accesorios** para Sensores (soportes de montaje).
- Confirmar/reemplazar imagen de **Bases y Accesorios** en Relevadores (duplicado detectado).
- Subir los PDFs faltantes listados arriba y, si el nombre de archivo no
  coincide con el patrón `nombre-familia.pdf`, actualizar el campo `file`
  de la familia correspondiente en `data/productos.php`.
- Revisar `valvulas-neumaticas`: confirmar a qué familia corresponde
  `Fluidtec VALVULAS PROCESOS .pdf` (F-MFH? F-SY?) y si `Fluidtec
  Electroválvulas NAMUR*.pdf` / `VALVULAS NEUMATICAS 2026 - copia.pdf`
  deben usarse en vez de los archivos ya asignados.
- Revisar `proteccion-de-motores`: confirmar si `GUARDA MOTOR .pdf`
  corresponde a la familia "Accesorios" o a otra.

## Patrón general aplicado por categoría

1. Revisar imágenes disponibles en `assets/images/fichas/{CARPETA}/`.
2. Corregir `img_ficha` para apuntar al collage `*SIN FONDO.png` (varias
   entradas apuntaban a archivos `*-FICHA.png` en `assets/images/equipos/`
   que no existían) y agregar `img_no_card => true`.
3. Igualar `fichas_dir` al nombre real de la carpeta de imágenes cuando no
   coincidía.
4. Completar `familias` con `name`, `group` (para el filtro del sidebar),
   `desc` (texto del mockup) e `img`.
