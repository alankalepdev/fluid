<?php
/**
 * Metas SEO, Open Graph / Twitter y datos estructurados (JSON-LD).
 *
 * Variables opcionales que puede definir cada página antes de head.php:
 *   $page_path        Ruta canónica relativa (por defecto, el script actual).
 *   $page_og_image    Imagen para redes sociales (ruta relativa).
 *   $page_noindex     true para que no se indexe.
 *   $page_breadcrumb  [['Nombre', 'ruta.php'], ...] (Inicio se agrega solo).
 *   $page_schema      Nodos JSON-LD adicionales (array de arrays).
 */

$site = require __DIR__ . '/../config/site.php';
$base = rtrim($site['url'], '/');
$abs  = fn(string $path): string => $base . '/' . ltrim($path, '/');

$seo_path  = $page_path ?? basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$seo_path  = $seo_path === 'index.php' ? '' : $seo_path;
$canonical = $abs($seo_path);
$og_image  = $abs($page_og_image ?? $site['og_image']);
$seo_title = $page_title ?? $site['name'];
$seo_desc  = $page_description ?? $site['description'];

$org_id = $base . '/#organization';
$graph  = [
	[
		'@type'       => ['Organization', 'LocalBusiness'],
		'@id'         => $org_id,
		'name'        => $site['name'],
		'legalName'   => $site['legal_name'],
		'slogan'      => $site['tagline'],
		'description' => $site['description'],
		'url'         => $base . '/',
		'logo'        => $abs($site['logo']),
		'image'       => $abs($site['og_image']),
		'telephone'   => $site['phone'],
		'email'       => $site['email'],
		'address'     => [
			'@type'           => 'PostalAddress',
			'streetAddress'   => $site['address']['street'],
			'addressLocality' => $site['address']['locality'],
			'addressRegion'   => $site['address']['region'],
			'postalCode'      => $site['address']['postal'],
			'addressCountry'  => $site['address']['country'],
		],
		'hasMap'      => $site['map_url'],
		'areaServed'  => ['@type' => 'Country', 'name' => 'México'],
		'openingHoursSpecification' => [[
			'@type'     => 'OpeningHoursSpecification',
			'dayOfWeek' => $site['hours']['days'],
			'opens'     => $site['hours']['opens'],
			'closes'    => $site['hours']['closes'],
		]],
		'contactPoint' => [[
			'@type'             => 'ContactPoint',
			'contactType'       => 'sales',
			'telephone'         => $site['phone'],
			'email'             => $site['email'],
			'areaServed'        => 'MX',
			'availableLanguage' => 'es',
		]],
		'knowsAbout'  => ['Neumática industrial', 'Automatización industrial', 'Cilindros neumáticos', 'Válvulas neumáticas', 'Tratamiento de aire', 'Sistemas de vacío', 'Sensores industriales', 'PLC', 'Control eléctrico'],
	] + (empty($site['same_as']) ? [] : ['sameAs' => $site['same_as']]),
	[
		'@type'      => 'WebSite',
		'@id'        => $base . '/#website',
		'url'        => $base . '/',
		'name'       => $site['name'],
		'inLanguage' => 'es-MX',
		'publisher'  => ['@id' => $org_id],
	],
	[
		'@type'       => 'WebPage',
		'@id'         => $canonical . '#webpage',
		'url'         => $canonical,
		'name'        => $seo_title,
		'description' => $seo_desc,
		'inLanguage'  => 'es-MX',
		'isPartOf'    => ['@id' => $base . '/#website'],
		'about'       => ['@id' => $org_id],
		'primaryImageOfPage' => $og_image,
	],
];

if (!empty($page_breadcrumb)) {
	$items = [['Inicio', '']];
	foreach ($page_breadcrumb as $crumb) $items[] = $crumb;
	$graph[] = [
		'@type'           => 'BreadcrumbList',
		'itemListElement' => array_map(fn($c, $i) => [
			'@type'    => 'ListItem',
			'position' => $i + 1,
			'name'     => $c[0],
			'item'     => $abs($c[1]),
		], $items, array_keys($items)),
	];
}

foreach ($page_schema ?? [] as $node) $graph[] = $node;

$e = fn($v) => htmlspecialchars((string) $v, ENT_QUOTES);
?>
	<meta name="robots" content="<?= !empty($page_noindex) ? 'noindex, follow' : 'index, follow, max-image-preview:large, max-snippet:-1' ?>">
	<link rel="canonical" href="<?= $e($canonical) ?>">
	<link rel="alternate" hreflang="es-MX" href="<?= $e($canonical) ?>">
	<meta name="theme-color" content="#2029BD">
	<meta name="geo.region" content="MX-MEX">
	<meta name="geo.placename" content="<?= $e($site['address']['locality']) ?>">
	<!-- Open Graph / Twitter -->
	<meta property="og:type" content="website">
	<meta property="og:locale" content="es_MX">
	<meta property="og:site_name" content="<?= $e($site['name']) ?>">
	<meta property="og:title" content="<?= $e($seo_title) ?>">
	<meta property="og:description" content="<?= $e($seo_desc) ?>">
	<meta property="og:url" content="<?= $e($canonical) ?>">
	<meta property="og:image" content="<?= $e($og_image) ?>">
	<meta property="og:image:alt" content="<?= $e($site['name'] . ' – ' . $site['tagline']) ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?= $e($seo_title) ?>">
	<meta name="twitter:description" content="<?= $e($seo_desc) ?>">
	<meta name="twitter:image" content="<?= $e($og_image) ?>">
	<!-- Datos estructurados -->
	<script type="application/ld+json"><?= json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?></script>
