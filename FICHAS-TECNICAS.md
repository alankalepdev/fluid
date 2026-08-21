# Fichas técnicas — avance

Registro de las categorías de `data/productos.php` ya actualizadas con su
array `familias` (imágenes, descripciones y grupos de filtro) para que
`fichas.php?cat={slug}` las renderice correctamente. `equipos.php` lee el
mismo archivo, así que cualquier cambio aquí se refleja en ambas páginas.

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

## Pendientes

- Imagen real de **Accesorios** para Sensores (soportes de montaje).
- Confirmar/reemplazar imagen de **Bases y Accesorios** en Relevadores (duplicado detectado).
- No existen PDFs todavía en `assets/fichas-tecnicas/`, por lo que todos los
  botones "Descargar" muestran "Próximamente" hasta subir los archivos con
  los nombres definidos en el campo `file` de cada familia.

## Patrón general aplicado por categoría

1. Revisar imágenes disponibles en `assets/images/fichas/{CARPETA}/`.
2. Corregir `img_ficha` para apuntar al collage `*SIN FONDO.png` (varias
   entradas apuntaban a archivos `*-FICHA.png` en `assets/images/equipos/`
   que no existían) y agregar `img_no_card => true`.
3. Igualar `fichas_dir` al nombre real de la carpeta de imágenes cuando no
   coincidía.
4. Completar `familias` con `name`, `group` (para el filtro del sidebar),
   `desc` (texto del mockup) e `img`.
