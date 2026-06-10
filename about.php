<?php
$page_title       = 'Nosotros | Fluidtec México';
$page_description = 'Conoce a Fluidtec México, distribuidores especializados en componentes industriales y de automatización con años de experiencia.';
$page_body_class  = 'page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'about';
$page_extra_css   = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">';
$page_extra_js    = '<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
new Swiper("#about-slider", {
  loop: true,
  speed: 700,
  autoplay: { delay: 5000, disableOnInteraction: false },
  navigation: { nextEl: "#about-slider .swiper-button-next", prevEl: "#about-slider .swiper-button-prev" },
  pagination: { el: "#about-slider .swiper-pagination", clickable: true }
});
</script>';
$page_header_extra = '';

require 'partials/head.php';
?>
<body class="<?= $page_body_class ?>" data-page="<?= $page_id ?>">
<div id="Wrapper">
<?php require 'partials/header.php'; ?>

<div id="Content">
	<div class="section mcb-section no-margin-h full-width" style="padding-bottom:35px">
		<div class="row">
			<div class="col-md-6 text-center" style="padding:5% 0px 0px 0px;background-color:#e7e9ee">
				<img src="assets/images/corporation2-about-pic3.png" alt="Fluidtec" width="30" height="30">
				<hr class="no_line" style="margin:0 auto 10px auto">
				<h2><span style="color:#2029bd;">Quiénes somos<br>y nuestro equipo</span></h2>
			</div>
			<div class="col-md-6" style="padding:20px 5%;">
				<img src="assets/images/corporation2-about-pic2.jpg" alt="Fluidtec equipo" width="960" height="360">
			</div>
		</div>
	</div>
	<div class="section" style="padding-top:78px;padding-bottom:3px">
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="padding:0 3% 0 0">
					<h3>Distribuidores especializados en componentes industriales</h3>
					<p>Somos una empresa mexicana con amplia experiencia en la distribución de componentes industriales y de automatización, comprometidos con la calidad y el servicio a nuestros clientes.</p>
					<hr class="no_line" style="margin:0 auto 20px">
					<i class="icon-check" style="color:#000">Selección y compatibilidad de productos</i><br>
					<i class="icon-check" style="color:#000">Asesoría técnica especializada</i>
					<hr class="no_line" style="margin:0 auto 20px">
					<p>Nuestro equipo de expertos está disponible para ayudarte a identificar las necesidades técnicas de tu proyecto y ofrecerte los productos que mejor se adapten a tus requerimientos.</p>
					<hr class="no_line" style="margin:0 auto 50px">
					<a class="button button_size_2 button_theme" href="proyectos.php"><span class="button_label">PROYECTOS</span></a>
					<hr class="no_line" style="margin:0 auto 50px">
				</div>
				<div class="col-md-3" style="padding:0 0 0 3%">
					<div class="column_attr clearfix align_center" style="background-color:#000;padding:60px 0 50px 0;margin-right:10%">
						<div class="google_font" style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:69px;line-height:69px;font-weight:700;letter-spacing:0px;color:#fff;">
							<span class="counter-inline animate-math"><span class="number" data-to="96">96</span></span>
						</div>
					</div>
					<hr class="no_line" style="margin:0 auto 20px">
					<h3>Años de experiencia en la industria</h3>
					<p>Décadas brindando soluciones industriales de calidad en México.</p>
				</div>
				<div class="col-md-3" style="padding:0 0 0 3%">
					<div class="column_attr clearfix align_center" style="background-color:#e7e9ee;padding:60px 0 50px 0;margin-right:10%">
						<div class="google_font" style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:69px;line-height:69px;font-weight:700;letter-spacing:0px;color:#2029BD;">
							<span class="counter-inline animate-math"><span class="number" data-to="24">24</span></span>
						</div>
					</div>
					<hr class="no_line" style="margin:0 auto 20px">
					<h3>Soporte disponible todo el día</h3>
					<p>Atención técnica y comercial disponible para tus proyectos.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section mcb-section no-margin-h full-width" style="padding-top:50px">
		<div class="row">
			<div class="col-md-6">
				<img src="assets/images/corporation2-about-pic1.jpg" alt="Fluidtec instalaciones" width="960" height="720">
			</div>
			<div class="col-md-6" style="padding:5% 30px;background-color:#e7e9ee">
				<div class="row">
					<div class="col-md-10">
						<h3>Comprometidos con la calidad de servicio en cada proyecto industrial</h3>
						<h5>Brindamos a todos nuestros clientes asesoría integral, desde la selección hasta la instalación y mantenimiento.</h5>
						<p style="color:#000;">
							<i class="icon-check" style="color:#4ED199;"></i> Selección &amp; compatibilidad de productos<br>
							<i class="icon-check" style="color:#4ED199;"></i> Venta &amp; envío de mercancía<br>
							<i class="icon-check" style="color:#4ED199;"></i> Instalación de equipos<br>
							<i class="icon-check" style="color:#4ED199;"></i> Capacitación &amp; mantenimiento
						</p>
						<hr class="no_line" style="margin:0 auto 45px auto">
						<a class="button button_size_2 button_theme" href="contacto.php"><span class="button_label">CONTÁCTANOS</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section" style="padding-bottom:55px">
		<div class="container">
			<div class="row">
				<div class="col-12"><hr class="no_line" style="margin:0 auto 70px"></div>
				<div class="col-md-6" style="padding:30px 30px 0px 0px">
					<div class="column_attr clearfix" style="padding:15px 10px 15px 0px;">
						<div class="image_frame image_item no_link scale-with-grid no_border">
							<div class="image_wrapper"><img class="scale-with-grid" src="assets/images/corporation2-home-pic1.jpg" alt="Fluidtec" width="780" height="780"></div>
						</div>
					</div>
				</div>
				<div class="col-md-5" style="padding:40px 2% 0px">
					<h2>Nuestro modelo de negocios</h2>
					<p>Somos distribuidores especializados en componentes industriales y de automatización, comprometidos con la calidad y el servicio.</p>
					<hr class="no_line" style="margin:0 auto 20px">
					<div class="column_attr clearfix" style="background-image:url('assets/images/corporation2-icon1.png');background-repeat:no-repeat;background-position:left top;">
						<h5 style="padding:0px 0px 0px 50px">Selección y compatibilidad de productos para tu industria.</h5>
						<h6 style="padding:0px 0px 0px 50px">ASESORÍA TÉCNICA</h6>
					</div>
					<hr class="no_line" style="margin:0 auto 20px">
					<p>Venta y envío inmediato de mercancía, instalación de equipos, capacitación y mantenimiento.</p>
					<hr class="no_line" style="margin:0 auto 40px auto">
					<a class="button button_size_2 button_theme" href="contacto.php"><span class="button_label">COTIZAR AHORA</span></a>
					<a class="button button_size_2" href="proyectos.php"><span class="button_label">PROYECTOS</span></a>
				</div>
				<div class="col-12"><hr class="no_line" style="margin:0 auto 70px"></div>
			</div>
		</div>
	</div>
	<!-- Slider de productos/servicios -->
	<div id="slide-about" class="section" style="padding-bottom:55px">
		<div class="container">
			<div class="row"><div class="col-12"><hr class="no_line" style="margin:0 auto 70px"></div></div>
		</div>
		<style>
			#about-slider { padding-bottom: 50px; }
			#about-slider .swiper-pagination { bottom: 10px; }
			#about-slider .swiper-pagination-bullet { background: #2029BD; opacity: 0.35; width: 10px; height: 10px; }
			#about-slider .swiper-pagination-bullet-active { background: #2029BD; opacity: 1; }
		</style>
		<div id="about-slider" class="swiper" style="position:relative">
			<div class="swiper-wrapper">
				<?php
				$about_slides = [
					[
						'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-CONTACTOR.png',
						'title'  => 'Contactores y Arrancadores',
						'tag'    => 'COMPONENTES ELÉCTRICOS',
						'desc'   => 'Distribuimos contactores industriales, arrancadores directos y estrella-triángulo para el control confiable de motores eléctricos en cualquier aplicación.',
						'label1' => 'COTIZAR AHORA',
						'href1'  => 'contacto.php',
						'label2' => 'PROYECTOS',
						'href2'  => 'proyectos.php',
					],
					[
						'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-CONTROLADOR-DE-TEMPERATURA.png',
						'title'  => 'Sistema Neumático Completo',
						'tag'    => 'NEUMÁTICA INDUSTRIAL',
						'desc'   => 'Cilindros, actuadores, pistones, unidades FRL y todo lo necesario para tus sistemas de aire comprimido con marcas líderes como SMC, Festo y Parker.',
						'label1' => 'VER EQUIPOS',
						'href1'  => 'equipos.php',
						'label2' => 'COTIZAR',
						'href2'  => 'contacto.php',
					],
					[
						'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-CONTROLADOR-DE-TEMPERATURA.png',
						'title'  => 'Electroválvulas y Control',
						'tag'    => 'CONTROL DE FLUIDOS',
						'desc'   => 'Electroválvulas monoestables, biestables, distribuidores neumáticos e islas de válvulas para el control preciso de tus procesos industriales.',
						'label1' => 'VER CATÁLOGO',
						'href1'  => 'proyectos.php',
						'label2' => 'COTIZAR',
						'href2'  => 'contacto.php',
					],
					[
						'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-INTERRUPTOR-TERMOMAGNETICO.png',
						'title'  => 'Automatización Industrial',
						'tag'    => 'AUTOMATIZACIÓN',
						'desc'   => 'Módulos pick &amp; place, mesas de transferencia, guías lineales, servomotores y sistemas de visión artificial para optimizar tu línea de producción.',
						'label1' => 'VER PROYECTOS',
						'href1'  => 'proyectos.php',
						'label2' => 'COTIZAR',
						'href2'  => 'contacto.php',
					],
					[
						'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-RELEVADOR-MECANICO.png',
						'title'  => 'Hidráulica de Alta Presión',
						'tag'    => 'HIDRÁULICA INDUSTRIAL',
						'desc'   => 'Cilindros hidráulicos, bombas, válvulas y mangueras de alta presión para aplicaciones que requieren fuerzas elevadas con máxima confiabilidad.',
						'label1' => 'VER EQUIPOS',
						'href1'  => 'equipos.php',
						'label2' => 'COTIZAR',
						'href2'  => 'contacto.php',
					],
					[
						'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-TORRETA-LED.png',
						'title'  => 'Filtración y Vacío',
						'tag'    => 'FILTRACIÓN INDUSTRIAL',
						'desc'   => 'Generadores de vacío, ventosas, filtros de línea, secadores de aire comprimido y separadores de condensado para mantener tu sistema en óptimas condiciones.',
						'label1' => 'VER EQUIPOS',
						'href1'  => 'equipos.php',
						'label2' => 'COTIZAR',
						'href2'  => 'contacto.php',
					],
				];
				foreach ($about_slides as $slide): ?>
				<div class="swiper-slide">
					<div class="container">
						<div class="row" style="align-items:center">
							<div class="col-md-6" style="padding:30px 30px 0px 0px">
								<div class="column_attr clearfix" style="padding:15px 10px 15px 0px;">
									<div class="image_frame image_item no_link scale-with-grid no_border">
										<div class="image_wrapper">
											<img class="scale-with-grid" src="<?= $slide['img'] ?>" alt="<?= htmlspecialchars($slide['title']) ?>" width="780" height="780">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5" style="padding:40px 2% 0px">
								<h2><?= $slide['title'] ?></h2>
								<p><?= $slide['desc'] ?></p>
								<hr class="no_line" style="margin:0 auto 20px">
								<div class="column_attr clearfix" style="background-image:url('assets/images/corporation2-icon1.png');background-repeat:no-repeat;background-position:left top;">
									<h5 style="padding:0px 0px 0px 50px">Selección y compatibilidad de productos para tu industria.</h5>
									<h6 style="padding:0px 0px 0px 50px"><?= $slide['tag'] ?></h6>
								</div>
								<hr class="no_line" style="margin:0 auto 40px auto">
								<a class="button button_size_2 button_theme" href="<?= $slide['href1'] ?>"><span class="button_label"><?= $slide['label1'] ?></span></a>
								<a class="button button_size_2" href="<?= $slide['href2'] ?>"><span class="button_label"><?= $slide['label2'] ?></span></a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="swiper-button-prev" style="color:#2029BD"></div>
			<div class="swiper-button-next" style="color:#2029BD"></div>
			<div class="swiper-pagination"></div>
		</div>
		<div class="container">
			<div class="row"><div class="col-12"><hr class="no_line" style="margin:0 auto 70px"></div></div>
		</div>
	</div>
</div>

<?php require 'partials/footer.php'; ?>
</div>
<?php require 'partials/scripts.php'; ?>
