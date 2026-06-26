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
<style>
	.fluidtec-hero-slider {
		position: relative;
		width: 100%;
		height: 720px;
		overflow: hidden;
	}

	.fluidtec-hero-slider .swiper {
		width: 100%;
		height: 100%;
	}

	.fluidtec-hero-slider .swiper-slide {
		position: relative;
		background-size: cover;
		background-position: center;
		display: flex;
		align-items: center;
	}

	.fluidtec-hero-slider .slide-overlay {
		position: absolute;
		inset: 0;
		background: linear-gradient(105deg, rgba(10, 14, 60, 0.82) 0%, rgba(10, 14, 60, 0.45) 60%, rgba(0, 0, 0, 0.15) 100%);
	}

	.fluidtec-hero-slider .slide-content {
		position: relative;
		z-index: 2;
		padding: 0 80px;
		max-width: 680px;
		opacity: 0;
		transform: translateY(40px);
		transition: opacity .7s ease .3s, transform .7s ease .3s;
	}

	.fluidtec-hero-slider .swiper-slide-active .slide-content {
		opacity: 1;
		transform: translateY(0);
	}

	.fluidtec-hero-slider .slide-tag {
		display: inline-block;
		background: #4ED199;
		color: #fff;
		font-family: 'Poppins', sans-serif;
		font-size: 11px;
		font-weight: 700;
		letter-spacing: 3px;
		text-transform: uppercase;
		padding: 5px 14px;
		border-radius: 2px;
		margin-bottom: 22px;
	}

	.fluidtec-hero-slider .slide-title {
		font-family: 'Poppins', sans-serif;
		font-size: 48px;
		font-weight: 700;
		line-height: 1.15;
		color: #fff;
		margin-bottom: 18px;
	}

	.fluidtec-hero-slider .slide-title span {
		color: #4ED199;
	}

	.fluidtec-hero-slider .slide-desc {
		font-family: 'Poppins', sans-serif;
		font-size: 16px;
		color: rgba(255, 255, 255, 0.82);
		line-height: 1.7;
		margin-bottom: 36px;
		max-width: 520px;
	}

	.fluidtec-hero-slider .slide-btns {
		display: flex;
		gap: 14px;
		flex-wrap: wrap;
	}

	.fluidtec-hero-slider .btn-primary-ft {
		background: #2029BD;
		color: #fff;
		font-family: 'Poppins', sans-serif;
		font-size: 13px;
		font-weight: 700;
		letter-spacing: 1.5px;
		padding: 14px 32px;
		border-radius: 2px;
		text-decoration: none;
		text-transform: uppercase;
		transition: background .25s, transform .2s;
		display: inline-block;
	}

	.fluidtec-hero-slider .btn-primary-ft:hover {
		background: #141ba7;
		transform: translateY(-2px);
	}

	.fluidtec-hero-slider .btn-outline-ft {
		background: transparent;
		color: #fff;
		border: 2px solid #4ED199;
		font-family: 'Poppins', sans-serif;
		font-size: 13px;
		font-weight: 700;
		letter-spacing: 1.5px;
		padding: 12px 32px;
		border-radius: 2px;
		text-decoration: none;
		text-transform: uppercase;
		transition: background .25s, color .25s, transform .2s;
		display: inline-block;
	}

	.fluidtec-hero-slider .btn-outline-ft:hover {
		background: #4ED199;
		color: #fff;
		transform: translateY(-2px);
	}

	.fluidtec-hero-slider .swiper-button-next,
	.fluidtec-hero-slider .swiper-button-prev {
		width: 50px;
		height: 50px;
		background: rgba(255, 255, 255, 0.12);
		border: 1px solid rgba(255, 255, 255, 0.3);
		border-radius: 2px;
		transition: background .25s;
	}

	.fluidtec-hero-slider .swiper-button-next:hover,
	.fluidtec-hero-slider .swiper-button-prev:hover {
		background: #2029BD;
		border-color: #2029BD;
	}

	.fluidtec-hero-slider .swiper-button-next::after,
	.fluidtec-hero-slider .swiper-button-prev::after {
		font-size: 16px;
		color: #fff;
		font-weight: 700;
	}

	.fluidtec-hero-slider .swiper-pagination-bullet {
		width: 10px;
		height: 10px;
		background: rgba(255, 255, 255, 0.5);
		opacity: 1;
	}

	.fluidtec-hero-slider .swiper-pagination-bullet-active {
		background: #4ED199;
	}

	.fluidtec-hero-slider .slider-progress {
		position: absolute;
		bottom: 0;
		left: 0;
		height: 4px;
		background: #4ED199;
		z-index: 10;
		width: 0%;
		transition: width linear;
	}

	@media (max-width: 768px) {
		.fluidtec-hero-slider {
			height: 560px;
		}

		.fluidtec-hero-slider .slide-content {
			padding: 0 24px;
			max-width: 100%;
		}

		.fluidtec-hero-slider .slide-title {
			font-size: 30px;
		}
	}
	.mvov-card {
		position: relative;
		overflow: hidden;
		border-radius: 8px;
		box-shadow: 0 2px 20px rgba(0,0,0,0.08);
		transition: transform 0.3s, box-shadow 0.3s;
		margin-bottom: 30px;
		background: #fff;
	}
	.mvov-card:hover {
		transform: translateY(-5px);
		box-shadow: 0 8px 30px rgba(32,41,189,0.15);
	}
	.mvov-card-header {
		background: linear-gradient(135deg, #001F5C 0%, #2029BD 100%);
		padding: 40px 30px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.mvov-card-body {
		padding: 28px 24px;
		text-align: center;
	}
	.mvov-card-body h3 {
		font-size: 20px;
		font-weight: 700;
		color: #2029BD;
		margin-bottom: 12px;
	}
	.mvov-card-body p {
		font-size: 14px;
		color: #666;
		line-height: 1.75;
		margin: 0;
	}
</style>

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
							<h3>Soluciones industriales con experiencia, compromiso y confianza.</h3>
							<p>Somos un equipo de especialistas en automatización y control industrial. Acompañamos a nuestros clientes en cada etapa del proyecto, con productos confiables y un servicio técnico de alto nivel.</p>
							<hr class="no_line" style="margin:0 auto 20px">
							<i class="icon-check" style="color:#000">Asesoría técnica especializada</i><br>
							<i class="icon-check" style="color:#000">Productos de marcas líderes</i><br>
							<i class="icon-check" style="color:#000">Compatibilidad y selección adecuada</i><br>
							<i class="icon-check" style="color:#000">Instalación, puesta en marcha y mantenimiento</i>
							<hr class="no_line" style="margin:0 auto 50px">
							<a class="button button_size_2 button_theme" href="about.php"><span class="button_label">CONÓCENOS</span></a>
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
			<!-- Misión, Visión, Objetivos y Valores -->
			<div class="section" style="padding-top:60px;padding-bottom:60px;background:#f4f6fb;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center" style="margin-bottom:50px">
							<h6 style="color:#4ED199;letter-spacing:3px;font-family:'Poppins',sans-serif;">FILOSOFÍA EMPRESARIAL</h6>
							<h2 style="color:#2029BD;">Misión, Visión, Objetivos y Valores</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="mvov-card">
								<div class="mvov-card-header">
									<svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8">
										<circle cx="12" cy="12" r="10"/>
										<circle cx="12" cy="12" r="6"/>
										<circle cx="12" cy="12" r="2"/>
									</svg>
								</div>
								<div class="mvov-card-body">
									<h3>Misión</h3>
									<p>Somos una empresa que brinda comodidad en la comercialización de equipos de automatización respondiendo oportunamente a las necesidades de nuestros clientes, colaboradores, accionistas y proveedores manteniendo una alta calidad de servicio.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mvov-card">
								<div class="mvov-card-header">
									<svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8">
										<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
										<circle cx="12" cy="12" r="3"/>
									</svg>
								</div>
								<div class="mvov-card-body">
									<h3>Visión</h3>
									<p>Ser líder en la venta y distribución de equipos de automatización a nivel nacional como una empresa competitiva siendo eficientes y eficaces.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mvov-card">
								<div class="mvov-card-header">
									<svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8">
										<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
									</svg>
								</div>
								<div class="mvov-card-body">
									<h3>Objetivos</h3>
									<p>Consolidar el nombre de la empresa <strong>FLUIDTEC MÉXICO</strong> a nivel nacional a través de la calidad de los servicios que ofrecemos al usuario / cliente.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mvov-card">
								<div class="mvov-card-header">
									<svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8">
										<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
									</svg>
								</div>
								<div class="mvov-card-body">
									<h3>Valores</h3>
									<p>Respeto &nbsp;·&nbsp; Responsabilidad<br>Integridad &nbsp;·&nbsp; Honestidad<br>Pasión &nbsp;·&nbsp; Empatía</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section" style="padding-bottom:55px">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<hr class="no_line" style="margin:0 auto 70px">
						</div>
						<div class="col-md-5" style="padding:30px 30px 0px 0px">
							<div class="column_attr clearfix" style="padding:15px 10px 15px 0px;">
								<div class="image_frame image_item no_link scale-with-grid no_border">
									<div class="image_wrapper"><img class="scale-with-grid" src="assets/images/corporation2-home-pic1.jpg" alt="Fluidtec" width="780" height="780"></div>
								</div>
							</div>
						</div>
						<div class="col-md-7" style="padding:40px 2% 0px">
							<h2>Nuestro modelo<br>de negocios</h2>
							<p>Entregamos valor a la industria a través de soluciones integrales que combinan tecnología, conocimiento y servicio.</p>
							<hr class="no_line" style="margin:0 auto 20px">
							<div class="row" style="text-align:center;margin-bottom:20px;">
								<div class="col-md-3 col-6" style="padding:10px;">
									<i class="icon-cog-line" style="font-size:32px;color:#2029BD;"></i>
									<p style="font-size:12px;font-weight:700;margin:8px 0 4px;">Selección y<br>compatibilidad</p>
									<p style="font-size:11px;color:#777;">Elegimos los componentes ideales para cada aplicación.</p>
								</div>
								<div class="col-md-3 col-6" style="padding:10px;">
									<i class="icon-truck-line" style="font-size:32px;color:#2029BD;"></i>
									<p style="font-size:12px;font-weight:700;margin:8px 0 4px;">Envío inmediato</p>
									<p style="font-size:11px;color:#777;">Stock disponible y logística rápida para minimizar tiempos de paro.</p>
								</div>
								<div class="col-md-3 col-6" style="padding:10px;">
									<i class="icon-tools" style="font-size:32px;color:#2029BD;"></i>
									<p style="font-size:12px;font-weight:700;margin:8px 0 4px;">Instalación y puesta<br>en marcha</p>
									<p style="font-size:11px;color:#777;">Especialistas presentes para un arranque seguro y eficiente.</p>
								</div>
								<div class="col-md-3 col-6" style="padding:10px;">
									<i class="icon-phone" style="font-size:32px;color:#2029BD;"></i>
									<p style="font-size:12px;font-weight:700;margin:8px 0 4px;">Mantenimiento<br>y soporte</p>
									<p style="font-size:11px;color:#777;">Acompañamiento continuo para garantizar la operación.</p>
								</div>
							</div>
							<hr class="no_line" style="margin:0 auto 20px auto">
							<a class="button button_size_2 button_theme" href="proyectos.php"><span class="button_label">VER SOLUCIONES</span></a>
							<a class="button button_size_2" href="contacto.php"><span class="button_label">HABLAR CON UN EXPERTO &rarr;</span></a>
						</div>
						<div class="col-12">
							<hr class="no_line" style="margin:0 auto 70px">
						</div>
					</div>
				</div>
			</div>
			<!-- Slider de productos/servicios -->
			<!-- Slider de productos/servicios -->
			<div id="slide-about" class="section" style="padding-bottom:55px">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<hr class="no_line" style="margin:0 auto 70px">
						</div>
					</div>
				</div>
				<div id="about-slider" class="swiper about-slider-wrap" style="position:relative">
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
								'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-INTERRUPTOR-TERMOMAGNETICO.png',
								'title'  => 'Electroválvulas y Control',
								'tag'    => 'CONTROL DE FLUIDOS',
								'desc'   => 'Electroválvulas monoestables, biestables, distribuidores neumáticos e islas de válvulas para el control preciso de tus procesos industriales.',
								'label1' => 'VER CATÁLOGO',
								'href1'  => 'proyectos.php',
								'label2' => 'COTIZAR',
								'href2'  => 'contacto.php',
							],
							[
								'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-RELEVADOR-MECANICO.png',
								'title'  => 'Automatización Industrial',
								'tag'    => 'AUTOMATIZACIÓN',
								'desc'   => 'Módulos pick &amp; place, mesas de transferencia, guías lineales, servomotores y sistemas de visión artificial para optimizar tu línea de producción.',
								'label1' => 'VER PROYECTOS',
								'href1'  => 'proyectos.php',
								'label2' => 'COTIZAR',
								'href2'  => 'contacto.php',
							],
							[
								'img'    => 'assets/images/CUAD-FLUDITEC-BANNER-WEB-TORRETA-LED.png',
								'title'  => 'Hidráulica de Alta Presión',
								'tag'    => 'HIDRÁULICA INDUSTRIAL',
								'desc'   => 'Cilindros hidráulicos, bombas, válvulas y mangueras de alta presión para aplicaciones que requieren fuerzas elevadas con máxima confiabilidad.',
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
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<hr class="no_line" style="margin:0 auto 70px">
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php require 'partials/footer.php'; ?>
	</div>
	<?php require 'partials/scripts.php'; ?>