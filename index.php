<?php
$page_title       = 'Fluidtec México | Componentes Industriales & Automatización';
$page_description = 'Distribuidores de componentes industriales y equipo de automatización. Electroválvulas, pistones, conectores neumáticos y más con envío inmediato.';
$page_body_class  = 'home page template-slider style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'index';
$page_extra_css   = <<<'CSS'
<style>
	.fluidtec-hero-slider { position: relative; width: 100%; height: 720px; overflow: hidden; }
	.fluidtec-hero-slider .swiper { width: 100%; height: 100%; }
	.fluidtec-hero-slider .swiper-slide { position: relative; background-size: cover; background-position: center; display: flex; align-items: center; }
	.fluidtec-hero-slider .slide-overlay { position: absolute; inset: 0; background: linear-gradient(105deg, rgba(10,14,60,0.82) 0%, rgba(10,14,60,0.45) 60%, rgba(0,0,0,0.15) 100%); }
	.fluidtec-hero-slider .slide-content { position: relative; z-index: 2; padding: 0 80px; max-width: 680px; opacity: 0; transform: translateY(40px); transition: opacity .7s ease .3s, transform .7s ease .3s; }
	.fluidtec-hero-slider .swiper-slide-active .slide-content { opacity: 1; transform: translateY(0); }
	.fluidtec-hero-slider .slide-tag { display: inline-block; background: #4ED199; color: #fff; font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; padding: 5px 14px; border-radius: 2px; margin-bottom: 22px; }
	.fluidtec-hero-slider .slide-title { font-family: 'Poppins', sans-serif; font-size: 48px; font-weight: 700; line-height: 1.15; color: #fff; margin-bottom: 18px; }
	.fluidtec-hero-slider .slide-title span { color: #4ED199; }
	.fluidtec-hero-slider .slide-desc { font-family: 'Poppins', sans-serif; font-size: 16px; color: rgba(255,255,255,0.82); line-height: 1.7; margin-bottom: 36px; max-width: 520px; }
	.fluidtec-hero-slider .slide-btns { display: flex; gap: 14px; flex-wrap: wrap; }
	.fluidtec-hero-slider .btn-primary-ft { background: #2029BD; color: #fff; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 1.5px; padding: 14px 32px; border-radius: 2px; text-decoration: none; text-transform: uppercase; transition: background .25s, transform .2s; display: inline-block; }
	.fluidtec-hero-slider .btn-primary-ft:hover { background: #141ba7; transform: translateY(-2px); }
	.fluidtec-hero-slider .btn-outline-ft { background: transparent; color: #fff; border: 2px solid #4ED199; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 1.5px; padding: 12px 32px; border-radius: 2px; text-decoration: none; text-transform: uppercase; transition: background .25s, color .25s, transform .2s; display: inline-block; }
	.fluidtec-hero-slider .btn-outline-ft:hover { background: #4ED199; color: #fff; transform: translateY(-2px); }
	.fluidtec-hero-slider .swiper-button-next, .fluidtec-hero-slider .swiper-button-prev { width: 50px; height: 50px; background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.3); border-radius: 2px; transition: background .25s; }
	.fluidtec-hero-slider .swiper-button-next:hover, .fluidtec-hero-slider .swiper-button-prev:hover { background: #2029BD; border-color: #2029BD; }
	.fluidtec-hero-slider .swiper-button-next::after, .fluidtec-hero-slider .swiper-button-prev::after { font-size: 16px; color: #fff; font-weight: 700; }
	.fluidtec-hero-slider .swiper-pagination-bullet { width: 10px; height: 10px; background: rgba(255,255,255,0.5); opacity: 1; }
	.fluidtec-hero-slider .swiper-pagination-bullet-active { background: #4ED199; }
	.fluidtec-hero-slider .slider-progress { position: absolute; bottom: 0; left: 0; height: 4px; background: #4ED199; z-index: 10; width: 0%; transition: width linear; }
	@media (max-width: 768px) {
		.fluidtec-hero-slider { height: 560px; }
		.fluidtec-hero-slider .slide-content { padding: 0 24px; max-width: 100%; }
		.fluidtec-hero-slider .slide-title { font-size: 30px; }
	
</style>
CSS;
$page_extra_js = <<<'JS'
<script>
	(function () {
		var AUTOPLAY_MS = 6000;
		var progressEl = document.getElementById('sliderProgress');
		var swiper = new Swiper('#fluidtecSwiper', {
			loop: true, speed: 900, effect: 'fade', fadeEffect: { crossFade: true },
			autoplay: { delay: AUTOPLAY_MS, disableOnInteraction: false },
			pagination: { el: '.swiper-pagination', clickable: true },
			navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
			on: {
				autoplayTimeLeft: function (s, time, progress) {
					if (progressEl) { progressEl.style.transition = 'none'; progressEl.style.width = ((1 - progress) * 100) + '%'; }
				},
				slideChangeTransitionStart: function () {
					if (progressEl) { progressEl.style.transition = 'none'; progressEl.style.width = '0%'; }
				}
			}
		});
	})();
new Swiper("#about-slider", {
  loop: true,
  speed: 700,
  autoplay: { delay: 5000, disableOnInteraction: false },
  navigation: { nextEl: "#about-slider .swiper-button-next", prevEl: "#about-slider .swiper-button-prev" },
  pagination: { el: "#about-slider .swiper-pagination", clickable: true }
});
</script>
JS;
ob_start();
require 'partials/hero-slider.php';
$page_header_extra = ob_get_clean();

require 'partials/head.php';
?>

<body class="<?= $page_body_class ?>" data-page="<?= $page_id ?>">
	<div id="Wrapper">
		<?php require 'partials/header.php'; ?>

		<div id="Content">
			<div class="section" style="padding-top:70px;padding-bottom:20px">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center" style="margin-bottom:40px">
							<h6 style="color:#4ED199;letter-spacing:3px;">CATÁLOGO COMPLETO</h6>
							<h2>Líneas de Productos</h2>
							<p style="color:#666;max-width:600px;margin:0 auto;">Distribuimos las mejores marcas en componentes industriales con disponibilidad inmediata y soporte técnico especializado.</p>
						</div>
					</div>
					<?php
					$productos = [
						[
							'bg' => '#2029BD', 'icon' => 'icon-flow-branch', 'title' => 'Cilindros',
							'fichas_dir' => 'CILINDROS',
							'img' => 'assets/images/conectores.png',
							'items' => ['Cilindros de doble efecto', 'Cilindros compactos', 'Cilindros con guía']
						],
						[
							'bg' => '#4ED199', 'icon' => 'icon-flow-line', 'title' => 'Conectores',
							'fichas_dir' => 'CONECTORES',
							'img' => 'assets/images/conectores.png',
							'items' => ['Conexiones rectas', 'Conexiones en codo', 'Acoplamientos neumáticos']
						],
						[
							'bg' => '#2029BD', 'icon' => 'icon-flash', 'title' => 'Mangueras',
							'fichas_dir' => 'MANGUERAS',
							'img' => 'assets/images/conectores.png',
							'items' => ['Manguera nylon', 'Manguera poliuretano', 'Manguera teflón']
						],
						[
							'bg' => '#4ED199', 'icon' => 'icon-water', 'title' => 'Tratamientos de aire',
							'fichas_dir' => 'TRATAMIENTO DE AIRE',
							'img' => 'assets/images/conectores.png',
							'items' => ['Unidades FRL', 'Reguladores de presión', 'Lubricadores']
						],
						[
							'bg' => '#2029BD', 'icon' => 'icon-cog-line', 'title' => 'Válvulas',
							'fichas_dir' => 'VALVULAS',
							'img' => 'assets/images/conectores.png',
							'items' => ['Electroválvulas serie 4V', 'Válvulas de proceso', 'Válvulas de escape rápido']
						],
						[
							'bg' => '#4ED199', 'icon' => 'icon-tools', 'title' => 'Cables y accesorios',
							'fichas_dir' => null,
							'img' => 'assets/images/conectores.png',
							'items' => ['Cable para sensor', 'Conector codo M12', 'Conectores armables M8']
						],
					];

					// Recopilar fichas por producto
					$fichas_base = __DIR__ . '/assets/fichas-tecnicas/';
					foreach ($productos as &$p) {
						$p['fichas'] = [];
						if ($p['fichas_dir']) {
							$dir = $fichas_base . $p['fichas_dir'];
							if (is_dir($dir)) {
								$files = array_values(array_filter(scandir($dir), fn($f) => pathinfo($f, PATHINFO_EXTENSION) === 'pdf'));
								foreach ($files as $f) {
									$p['fichas'][] = ['name' => $f, 'url' => 'assets/fichas-tecnicas/' . rawurlencode($p['fichas_dir']) . '/' . rawurlencode($f)];
								}
							}
						}
					}
					unset($p);
					?>
					<div class="row">
						<?php foreach ($productos as $idx => $p): ?>
							<div class="col-md-4" style="margin-bottom:30px">
								<div style="border:1px solid #e8e8e8;border-radius:4px;overflow:hidden;height:100%;display:flex;flex-direction:column;">
									<div style="background:<?= $p['bg'] ?>;padding:30px;text-align:center">
										<i class="<?= $p['icon'] ?>" style="font-size:48px;color:#fff;"></i>
									</div>

									<!-- Imagen demo del producto (reemplazar por imagen real) -->
									<div style="background:#fff;">
										<img
											src="<?= htmlspecialchars($p['img'] ?? 'assets/images/demo-producto.jpg', ENT_QUOTES) ?>"
											alt="Imagen de <?= htmlspecialchars($p['title'], ENT_QUOTES) ?>"
											style="width:100%;height:190px;object-fit:cover;display:block;"
											loading="lazy"
										>
									</div>

									<div style="padding:30px;flex:1;display:flex;flex-direction:column;">
										<h4 style="color:#2029BD"><?= $p['title'] ?></h4>
										<ul style="list-style:none;padding:0;color:#555;line-height:2;flex:1">
											<?php foreach ($p['items'] as $item): ?>
												<li>✔ <?= $item ?></li>
											<?php endforeach; ?>
										</ul>
										<div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:14px;">
											<a href="contacto.php" class="button button_size_2 button_theme"><span class="button_label">COTIZAR</span></a>
											<?php if (!empty($p['fichas'])): ?>
												<button type="button"
													class="button button_size_2"
													style="cursor:pointer;border:none;background:#f4f4f4;color:#2029BD;font-weight:700;letter-spacing:1px;"
													onclick="abrirFichas(<?= $idx ?>)">
													<span class="button_label"><i class="icon-doc-text-inv"></i> FICHAS TÉCNICAS</span>
												</button>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

					<!-- Modal Fichas Técnicas -->
					<div id="fichas-modal-overlay" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,.55);z-index:99999;align-items:center;justify-content:center;">
						<div id="fichas-modal-box" style="background:#fff;border-radius:6px;width:90%;max-width:560px;max-height:80vh;overflow-y:auto;box-shadow:0 8px 40px rgba(0,0,0,.25);">
							<div style="background:#2029BD;padding:22px 28px;display:flex;align-items:center;justify-content:space-between;border-radius:6px 6px 0 0;">
								<h4 id="fichas-modal-title" style="color:#fff;margin:0;font-size:18px;"></h4>
								<button onclick="cerrarFichas()" style="background:none;border:none;color:#fff;font-size:24px;cursor:pointer;line-height:1;">&times;</button>
							</div>
							<ul id="fichas-modal-list" style="list-style:none;padding:24px 28px;margin:0;"></ul>
						</div>
					</div>

					<?php
					// Pasar datos de fichas a JS
					$fichas_js = [];
					foreach ($productos as $idx => $p) {
						$fichas_js[$idx] = ['title' => $p['title'], 'fichas' => $p['fichas']];
					}
					?>
					<script>
						var fichasData = <?= json_encode(array_values($fichas_js), JSON_UNESCAPED_UNICODE) ?>;

						function abrirFichas(idx) {
							var data = fichasData[idx];
							document.getElementById('fichas-modal-title').textContent = 'Fichas Técnicas – ' + data.title;
							var list = document.getElementById('fichas-modal-list');
							list.innerHTML = '';
							data.fichas.forEach(function(f) {
								var li = document.createElement('li');
								li.style = 'border-bottom:1px solid #f0f0f0;padding:12px 0;display:flex;align-items:center;gap:12px;';
								li.innerHTML = '<i class="icon-doc-text-inv" style="color:#2029BD;font-size:22px;flex-shrink:0;"></i>'
									+ '<span style="flex:1;color:#333;font-size:14px;">' + f.name.replace(/\.pdf$/i,'') + '</span>'
									+ '<a href="' + f.url + '" download style="background:#2029BD;color:#fff;padding:7px 16px;border-radius:3px;font-size:12px;font-weight:700;text-decoration:none;letter-spacing:1px;white-space:nowrap;">'
									+ '<i class="icon-download"></i> DESCARGAR</a>';
								list.appendChild(li);
							});
							var overlay = document.getElementById('fichas-modal-overlay');
							overlay.style.display = 'flex';
						}

						function cerrarFichas() {
							document.getElementById('fichas-modal-overlay').style.display = 'none';
						}

						document.getElementById('fichas-modal-overlay').addEventListener('click', function(e) {
							if (e.target === this) cerrarFichas();
						});
					</script>
				</div>
			</div>


			<div class="section mcb-section bg-cover" style="background-image:url(assets/images/corporation2-sectionbg1.jpg);background-repeat:no-repeat;background-position:center">
				<div class="container">
					<div class="row" style="padding:0% 11%">
						<div class="col-12">
							<div class="text-center" style="padding:180px 0px 170px 0px;">
								<h3 style="text-align:center;"><span style="color:#fafafa;">Segmentos de actividad<br>y reportes actuales</span></h3>
								<h5 style="text-align:center;"><span style="color:#ac9d94;">Contamos con una amplia variedad de soluciones para la industria manufacturera, alimentaria, automotriz y más.</span></h5>
								<hr class="no_line" style="margin:0 auto 35px auto">
								<a class="button button_size_2 button_theme" href="proyectos.php"><span class="button_label">VER MÁS</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>

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
	<?php require 'partials/scripts.php';