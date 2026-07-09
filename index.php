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
	.fluidtec-hero-slider .slide-overlay { position: absolute; inset: 0; background: linear-gradient(105deg, rgba(10,14,60,0.82) 0%, rgba(10,14,60,0.45) 60%, rgba(0,0,0,0.15) 75%); }
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
	}
	.btn-primary-ft { background: #2029BD; color: #fff; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 1.5px; padding: 14px 32px; border-radius: 2px; text-decoration: none; text-transform: uppercase; transition: background .25s, transform .2s; display: inline-block; }
	.btn-primary-ft:hover { background: #141ba7; transform: translateY(-2px); color: #fff; }
	.btn-outline-ft { background: transparent; color: #fff; border: 2px solid #4ED199; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 1.5px; padding: 12px 32px; border-radius: 2px; text-decoration: none; text-transform: uppercase; transition: background .25s, color .25s, transform .2s; display: inline-block; }
	.btn-outline-ft:hover { background: #4ED199; color: #fff; transform: translateY(-2px); }
	#about-slider { height: 620px; }
	#slide-about .swiper-slide { position: relative; background-size: cover; background-position: center right; display: flex; align-items: stretch; }
	#slide-about .swiper-slide::before { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.28); z-index: 1; }
	#slide-about .slide-inner { position: relative; z-index: 2; width: 52%; padding: 32px 48px 32px 80px; display: flex; flex-direction: column; justify-content: space-between; }
	#slide-about .slide-brand { font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 3px; color: #4ED199; text-transform: uppercase; margin-bottom: 4px; }
	#slide-about .slide-brand-line { width: 40px; height: 2px; background: #4ED199; margin-bottom: 18px; }
	#slide-about .slide-title { font-family: 'Poppins', sans-serif; font-size: 40px; font-weight: 700; line-height: 1.1; color: #fff; margin: 0 0 4px; }
	#slide-about .slide-title span { color: #4ED199; display: block; }
	#slide-about .slide-divider { width: 50px; height: 3px; background: #4ED199; margin: 12px 0; }
	#slide-about .slide-subtitle { font-family: 'Poppins', sans-serif; font-size: 14px; color: rgba(255,255,255,0.80); font-style: italic; margin-bottom: 10px; }
	#slide-about .slide-features { list-style: none; padding: 0; margin: 0 0 10px; }
	#slide-about .slide-features li { font-family: 'Poppins', sans-serif; font-size: 13px; color: rgba(255,255,255,0.82); line-height: 1.85; padding-left: 18px; position: relative; }
	#slide-about .slide-features li::before { content: '✓'; position: absolute; left: 0; color: #4ED199; font-weight: 700; }
	#slide-about .slide-ideal { display: flex; gap: 14px; align-items: flex-start; font-family: 'Poppins', sans-serif; font-size: 12px; margin-bottom: 10px; }
	#slide-about .ideal-label { color: #4ED199; font-weight: 700; letter-spacing: 1px; white-space: nowrap; flex-shrink: 0; }
	#slide-about .ideal-text { color: rgba(255,255,255,0.75); }
	#slide-about .slide-specs { border-top: 1px solid rgba(255,255,255,0.18); padding-top: 8px; }
	#slide-about .spec-row { display: flex; gap: 16px; font-family: 'Poppins', sans-serif; font-size: 12px; padding: 3px 0; }
	#slide-about .spec-key { color: #4ED199; font-weight: 700; letter-spacing: 1px; min-width: 90px; }
	#slide-about .spec-val { color: rgba(255,255,255,0.85); }
	#slide-about .slide-footer { display: flex; justify-content: space-between; font-family: 'Poppins', sans-serif; font-size: 10px; color: rgba(255,255,255,0.45); letter-spacing: 1.5px; text-transform: uppercase; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 8px; margin-top: 6px; }
	#slide-about .swiper-button-next, #slide-about .swiper-button-prev { width: 50px; height: 50px; background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.3); border-radius: 2px; transition: background .25s; }
	#slide-about .swiper-button-next:hover, #slide-about .swiper-button-prev:hover { background: #2029BD; border-color: #2029BD; }
	#slide-about .swiper-button-next::after, #slide-about .swiper-button-prev::after { font-size: 16px; color: #fff; font-weight: 700; }
	#slide-about .swiper-pagination-bullet { background: rgba(255,255,255,0.5); opacity: 1; }
	#slide-about .swiper-pagination-bullet-active { background: #4ED199; }
	@media (max-width: 768px) {
		#about-slider { height: auto; min-height: 560px; }
		#slide-about .slide-inner { width: 100%; padding: 28px 24px; }
		#slide-about .slide-title { font-size: 28px; }
		#slide-about .slide-features li { font-size: 12px; }
	}
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
													<span class="button_label"><i class="icon-doc-text-inv"></i> FICHA TÉCNICA</span>
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
						<div id="fichas-modal-box" style="background:#fff;border-radius:6px;width:90%;max-width:900px;max-height:80vh;overflow-y:auto;box-shadow:0 8px 40px rgba(0,0,0,.25);">
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


			<!-- Compromiso con la calidad -->
			<div class="section mcb-section" style="padding:70px 0 0;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center" style="margin-bottom:40px;">
							<h6 style="color:#4ED199;letter-spacing:3px;font-family:'Poppins',sans-serif;">ESTÁNDARES INDUSTRIALES</h6>
							<h2 style="color:#2029BD;">Compromiso con la calidad</h2>
							<p style="color:#666;max-width:600px;margin:0 auto;">Soluciones de ingeniería para la industria manufacturera, alimentaria, automotriz y más, con los más altos estándares de calidad.</p>
						</div>
					</div>
				</div>
				<div style="width:100%;line-height:0;">
					<video autoplay muted loop playsinline style="width:100%;display:block;">
						<source src="assets/images/fluidtec-industrial-video.mp4" type="video/mp4">
					</video>
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
								'img'      => 'assets/images/FLUDITEC-BANNER-2-WEB-INTERRUPTOR.png',
								'title1'   => 'Interruptor',
								'title2'   => 'Termomagnético',
								'subtitle' => 'Protección eléctrica en riel DIN',
								'features' => [
									'Tipo: interruptor automático termomagnético',
									'Polos: 1P / 2P / 3P',
									'Protección térmica contra sobrecarga',
									'Protección magnética contra cortocircuito',
									'Capacidad de interrupción alta (según modelo)',
									'Montaje: riel DIN',
								],
								'ideal' => 'AC industrial y residencial',
								'specs'  => [
									['POLOS',      '1P / 2P / 3P'],
									['MONTAJE',    'Riel DIN'],
									['PROTECCIÓN', 'Sobrecarga + cortocircuito'],
								],
							],
							[
								'img'      => 'assets/images/FLUDITEC-BANNER-2-WEB-CONTACTOR.png',
								'title1'   => 'Contactor',
								'title2'   => 'Electromagnético',
								'subtitle' => 'Control de potencia para motores y tableros',
								'features' => [
									'Tipo: contactor electromagnético',
									'Polos: 3P (trifásico)',
									'Bobina de control: 24V / 110V / 220V',
									'Alta capacidad de conmutación',
									'Contactos auxiliares disponibles',
									'Diseño compacto para tableros',
								],
								'ideal' => 'Arranque de motores • Sistemas automatizados • Tableros de control • Industria en general',
								'specs'  => [
									['POLOS',  '3P trifásico'],
									['BOBINA', '24V / 110V / 220V'],
									['USO',    'Arranque de motores'],
								],
							],
							[
								'img'      => 'assets/images/FLUDITEC-BANNER-2-WEB-TOPRRETA.png',
								'title1'   => 'Torreta',
								'title2'   => 'LED',
								'subtitle' => 'Señalización visual 360° para sistemas industriales',
								'features' => [
									'Tipo: torreta luminosa LED multicolor',
									'Rojo: paro / alarma',
									'Amarillo: advertencia / proceso',
									'Verde: operación normal',
									'Voltaje: 24V / 110V / 220V (según modelo)',
									'Montaje: base fija o ajustable',
									'Bajo consumo energético (tecnología LED)',
								],
								'ideal' => 'Líneas de producción • Tableros de control • Máquinas automatizadas • Sistemas industriales',
								'specs'  => [
									['ROJO',     'Paro / alarma'],
									['AMARILLO', 'Advertencia'],
									['VERDE',    'Operación normal'],
								],
							],
							[
								'img'      => 'assets/images/FLUDITEC-BANNER-2-WEB-CONTROLADOR.png',
								'title1'   => 'Controlador de',
								'title2'   => 'Temperatura',
								'subtitle' => 'Control PID digital para procesos térmicos',
								'features' => [
									'Tipo: controlador PID digital',
									'Pantalla: doble display (PV / SV)',
									'Control: PID con auto-tuning',
									'Entradas: termopar / RTD (PT100)',
									'Salidas: relevador / SSR / analógica',
									'Alta precisión y estabilidad',
									'Montaje: panel (tablero eléctrico)',
								],
								'ideal' => 'Hornos industriales • Inyección de plástico • Calderas • Procesos térmicos • Automatización',
								'specs'  => [
									['CONTROL',  'PID auto-tuning'],
									['DISPLAY',  'PV / SV'],
									['ENTRADAS', 'Termopar / RTD'],
								],
							],
							[
								'img'      => 'assets/images/FLUDITEC-BANNER-2-WEB-RELEVADOR-ESTADO-SOLIDO.png',
								'title1'   => 'Relevador de',
								'title2'   => 'Estado Sólido',
								'subtitle' => 'Conmutación rápida sin contacto mecánico',
								'features' => [
									'Tipo: relevador electrónico (SSR)',
									'Entrada de control: 4–32 VDC / 90–280 VCA',
									'Salida: 40–480 VCA / 15A–100A (según modelo)',
									'Conmutación sin contacto mecánico',
									'Alta velocidad de respuesta',
									'Montaje en disipador recomendado',
								],
								'ideal' => 'Control de resistencias • Hornos • Automatización',
								'specs'  => [
									['TIPO',   'SSR electrónico'],
									['SALIDA', '40–480 VCA'],
									['RANGO',  '15A – 100A'],
								],
							],
							[
								'img'      => 'assets/images/FLUDITEC-BANNER-2-WEB-RELEVADOR MECANICO.png',
								'title1'   => 'Relevador',
								'title2'   => 'Mecánico',
								'subtitle' => 'Interfaz eléctrica de fácil reemplazo',
								'features' => [
									'Tipo: relevador electromecánico',
									'Configuración: multipolos (SPDT / DPDT)',
									'Bobina: 12V / 24V / 110V / 220V',
									'Base: tipo socket (enchufable)',
									'Indicador visual de operación',
									'Fácil reemplazo',
								],
								'ideal' => 'Tableros de control • Automatización básica • Interfaces eléctricas • Sistemas industriales',
								'specs'  => [
									['CONFIG.', 'SPDT / DPDT'],
									['BOBINA',  '12V / 24V / 110V / 220V'],
									['BASE',    'Socket enchufable'],
								],
							],
						];
						foreach ($about_slides as $slide):
								$imgUrl = str_replace(' ', '%20', $slide['img']);
							?>
							<div class="swiper-slide" style="background-image:url('<?= htmlspecialchars($imgUrl, ENT_QUOTES) ?>');">
								<div class="slide-inner">
									<div>
										<div class="slide-brand">Fluidtec México</div>
										<div class="slide-brand-line"></div>
										<h2 class="slide-title"><?= htmlspecialchars($slide['title1']) ?><span><?= htmlspecialchars($slide['title2']) ?></span></h2>
										<div class="slide-divider"></div>
										<p class="slide-subtitle"><?= htmlspecialchars($slide['subtitle']) ?></p>
										<ul class="slide-features">
											<?php foreach ($slide['features'] as $feat): ?>
												<li><?= htmlspecialchars($feat) ?></li>
											<?php endforeach; ?>
										</ul>
										<div class="slide-ideal">
											<span class="ideal-label">IDEAL PARA</span>
											<span class="ideal-text"><?= htmlspecialchars($slide['ideal']) ?></span>
										</div>
									</div>
									<div>
										<div class="slide-specs">
											<?php foreach ($slide['specs'] as [$key, $val]): ?>
												<div class="spec-row">
													<span class="spec-key"><?= htmlspecialchars($key) ?></span>
													<span class="spec-val"><?= htmlspecialchars($val) ?></span>
												</div>
											<?php endforeach; ?>
										</div>
										<div class="slide-footer">
											<span>CALIDAD &bull; CONFIANZA &bull; AUTOMATIZACIÓN</span>
											<span>fluidtecmexico.com</span>
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