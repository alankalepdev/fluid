/**
 * Fluidtec – Static Site Builder
 * Uso: node build.js
 * Genera los archivos HTML finales en la raíz del proyecto leyendo:
 *   - src/partials/  → fragmentos compartidos (head, header, footer, scripts)
 *   - src/pages/     → contenido único de cada página
 */

const fs   = require('fs');
const path = require('path');

const ROOT     = __dirname;
const PAGES    = path.join(ROOT, 'src/pages');
const PARTIALS = path.join(ROOT, 'src/partials');
const DIST     = ROOT; // Los HTML finales van a la raíz

// ── Helpers ────────────────────────────────────────────────────────────────

function readPartial(name) {
	const file = path.join(PARTIALS, name + '.html');
	if (!fs.existsSync(file)) { console.warn(`⚠  Partial no encontrado: ${name}`); return ''; }
	return fs.readFileSync(file, 'utf8');
}

/**
 * Extrae los metadatos del bloque de comentario al inicio del archivo de página.
 * Soporta valores multilínea: el bloque termina con la siguiente línea PAGE_* o con -->
 */
function parseMeta(source) {
	const meta = {
		PAGE_TITLE:        'Fluidtec México',
		PAGE_DESCRIPTION:  'Componentes Industriales & Automatización',
		PAGE_BODY_CLASS:   'page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky',
		PAGE_ID:           'page',
		PAGE_EXTRA_CSS:    '',
		PAGE_EXTRA_JS:     '',
		PAGE_HEADER_EXTRA: '',
	};

	const commentMatch = source.match(/^<!--([\s\S]*?)-->/);
	if (!commentMatch) return meta;

	const block = commentMatch[1];
	const keys  = Object.keys(meta);

	keys.forEach((key, idx) => {
		// Boundary: until next PAGE_ key or end of block
		const nextKey  = keys.slice(idx + 1).find(k => block.includes(k));
		const start    = block.indexOf(key + ':');
		if (start === -1) return;
		const valueStart = start + key.length + 1;
		const end        = nextKey ? block.indexOf(nextKey + ':') : block.length;
		meta[key]        = block.slice(valueStart, end).trim();
	});

	return meta;
}

/** Reemplaza todos los tokens {{TOKEN}} en una cadena */
function interpolate(str, meta) {
	return str.replace(/\{\{([A-Z_]+)\}\}/g, (_, key) => meta[key] !== undefined ? meta[key] : '');
}

/** Resuelve @@partial:nombre dentro de un valor meta */
function resolvePartialRefs(value) {
	return value.replace(/@@partial:([a-z0-9-]+)/g, (_, name) => readPartial(name));
}

// ── Build ──────────────────────────────────────────────────────────────────

const headTemplate    = readPartial('head');
const headerTemplate  = readPartial('header');
const footerHTML      = readPartial('footer');
const scriptsTemplate = readPartial('scripts');

const pageFiles = fs.readdirSync(PAGES).filter(f => f.endsWith('.html'));

pageFiles.forEach(file => {
	const src    = fs.readFileSync(path.join(PAGES, file), 'utf8');
	const meta   = parseMeta(src);

	// Resolver referencias a partials dentro de los meta
	Object.keys(meta).forEach(k => { meta[k] = resolvePartialRefs(meta[k]); });

	// Extraer el contenido de la página (todo lo que va después del bloque de comentario)
	const content = src.replace(/^<!--[\s\S]*?-->/, '').trim();

	// Ensamblar
	const head    = interpolate(headTemplate,    meta);
	const header  = interpolate(headerTemplate,  meta);
	const scripts = interpolate(scriptsTemplate, meta);

	const html = [
		'<!DOCTYPE html>',
		'<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->',
		'<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->',
		'<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->',
		'<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->',
		'<!--[if gt IE 8]><!-->',
		'<html class="no-js">',
		'<!--<![endif]-->',
		'',
		// Head (ya incluye <!DOCTYPE hasta </head>)
		head.replace(/^<!DOCTYPE html>[\s\S]*?<head>/m, '<head>'),
		'',
		`<body class="${meta.PAGE_BODY_CLASS}" data-page="${meta.PAGE_ID}">`,
		'<div id="Wrapper">',
		header,
		content,
		footerHTML,
		'</div>',
		scripts,
		'</body>',
		'</html>',
	].join('\n');

	const outFile = path.join(DIST, file);
	fs.writeFileSync(outFile, html, 'utf8');
	console.log(`✅  ${file}`);
});

console.log(`\n🎉  Build completo — ${pageFiles.length} página(s) generada(s).`);
