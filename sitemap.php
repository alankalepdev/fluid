<?php
/**
 * Sitemap XML dinámico: páginas principales + una ficha por categoría
 * de data/productos.php. Se sirve también como /sitemap.xml (.htaccess).
 */

$site      = require __DIR__ . '/config/site.php';
$productos = require __DIR__ . '/data/productos.php';
$base      = rtrim($site['url'], '/');

$lastmod = fn(string $file): string => date('Y-m-d', @filemtime(__DIR__ . '/' . $file) ?: time());

$urls = [
	['loc' => $base . '/',              'file' => 'index.php',     'priority' => '1.0'],
	['loc' => $base . '/equipos.php',   'file' => 'equipos.php',   'priority' => '0.9'],
	['loc' => $base . '/about.php',     'file' => 'about.php',     'priority' => '0.7'],
	['loc' => $base . '/proyectos.php', 'file' => 'proyectos.php', 'priority' => '0.7'],
	['loc' => $base . '/contacto.php',  'file' => 'contacto.php',  'priority' => '0.8'],
];
foreach ($productos as $p) {
	$urls[] = ['loc' => $base . '/fichas.php?cat=' . rawurlencode($p['slug']), 'file' => 'data/productos.php', 'priority' => '0.8'];
}

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $u): ?>
	<url>
		<loc><?= htmlspecialchars($u['loc'], ENT_XML1) ?></loc>
		<lastmod><?= $lastmod($u['file']) ?></lastmod>
		<priority><?= $u['priority'] ?></priority>
	</url>
<?php endforeach; ?>
</urlset>
