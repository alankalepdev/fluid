<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?= htmlspecialchars($page_title ?? 'Fluidtec México') ?></title>
	<meta name="description" content="<?= htmlspecialchars($page_description ?? '') ?>">
	<meta name="author" content="Fluidtec México">
	<!-- Content Security Policy -->
	<meta http-equiv="Content-Security-Policy" content="font-src 'self' data: https://fonts.googleapis.com https://fonts.gstatic.com https://cdn.jsdelivr.net;">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/cropped-Favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="assets/images/cropped-Favicon-192x192.png">
	<link rel="apple-touch-icon" href="assets/images/cropped-Favicon-192x192.png">
	<!-- FONTS -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--CSS -->
	<link rel='stylesheet' href='assets/css/structure.css'>
	<link rel='stylesheet' href='assets/css/corporation2.css'>
	<!-- Swiper Slider -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/plugins/rs-plugin/fonts/font-awesome/css/font-awesome.css">
	<!-- Custom global styles -->
	<link rel="stylesheet" href="assets/css/custom.css">
	<?= $page_extra_css ?? '' ?>
</head>
