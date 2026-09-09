<?php
$page_title       = 'Fluidtec México | Componentes Industriales & Automatización';
$page_description = 'Distribuidores de componentes industriales y equipo de automatización. Electroválvulas, pistones, conectores neumáticos y más con envío inmediato.';
$page_body_class  = 'home page template-slider style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'index';
$page_extra_css   = <<<'CSS'
<style>
/* ── Líneas de Productos ── */
.cat-header { padding: 60px 0 30px; }
.cat-header h2 { font-family: 'Poppins', sans-serif; font-size: 32px; font-weight: 700; color: #1a1f3c; margin-bottom: 6px; }
.cat-header p  { color: #777; font-size: 14px; margin: 0; }
.cat-filters { display: flex; gap: 10px; flex-wrap: wrap; align-items: center; justify-content: flex-end; }
.cat-filter-btn { font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: .5px; padding: 8px 18px; border-radius: 4px; border: 1.5px solid #dde1f0; background: #fff; color: #555; cursor: pointer; transition: all .2s; }
.cat-filter-btn.active, .cat-filter-btn:hover { background: #2029BD; border-color: #2029BD; color: #fff; }

/* Cards */
.prod-card { background: #fff; border-radius: 10px; box-shadow: 0 2px 16px rgba(32,41,189,.08); overflow: hidden; display: flex; flex-direction: column; height: 100%; transition: transform .25s, box-shadow .25s; }
.prod-card:hover { transform: translateY(-4px); box-shadow: 0 8px 32px rgba(32,41,189,.16); }
.prod-card-photo { position: relative; height: 200px; overflow: hidden; background: #f4f6fb; }
.prod-card-photo img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .4s; }
.prod-card:hover .prod-card-photo img { transform: scale(1.04); }
.prod-card-icon { position: absolute; top: 14px; left: 14px; width: 52px; height: 52px; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.18); }
.prod-card-icon img { width: 100%; height: 100%; display: block; }
.prod-card-body { padding: 22px 22px 18px; flex: 1; display: flex; flex-direction: column; }
.prod-card-body h4 { font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 700; color: #1a1f3c; margin-bottom: 12px; }
.prod-card-features { list-style: none; padding: 0; margin: 0 0 18px; flex: 1; }
.prod-card-features li { font-size: 13px; color: #555; line-height: 1.75; padding-left: 20px; position: relative; }
.prod-card-features li::before { content: '✓'; position: absolute; left: 0; color: #4ED199; font-weight: 700; }
.prod-card-actions { display: flex; gap: 8px; flex-wrap: wrap; }
.btn-cotizar { background: #2029BD; color: #fff; font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; padding: 9px 18px; border-radius: 4px; text-decoration: none; display: inline-block; transition: background .2s; border: none; cursor: pointer; }
.btn-cotizar:hover { background: #141ba7; color: #fff; }
.btn-ficha { background: #f4f6fb; color: #2029BD; font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; padding: 9px 18px; border-radius: 4px; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: background .2s; border: none; cursor: pointer; }
.btn-ficha:hover { background: #e8ecf8; }
@media (max-width: 767px) {
  .cat-filters { justify-content: flex-start; margin-top: 16px; }
  .prod-card-photo { height: 170px; }
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
			pagination: { el: '#fluidtecSwiper .swiper-pagination', clickable: true },
			navigation: { nextEl: '#fluidtecSwiper .swiper-button-next', prevEl: '#fluidtecSwiper .swiper-button-prev' },
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
(function () {
    var btns  = document.querySelectorAll('.cat-filter-btn');
    var cards = document.querySelectorAll('.prod-card-col');

    function applyFilter(filter) {
        cards.forEach(function (col) {
            var match = col.dataset.cat === filter;
            if (match) {
                col.style.display = 'flex';
                col.style.opacity = '0';
                col.style.transform = 'translateY(12px)';
                requestAnimationFrame(function () {
                    requestAnimationFrame(function () {
                        col.style.transition = 'opacity .3s ease, transform .3s ease';
                        col.style.opacity = '1';
                        col.style.transform = 'translateY(0)';
                    });
                });
            } else {
                col.style.transition = 'none';
                col.style.display = 'none';
            }
        });
    }

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            btns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');
            applyFilter(btn.dataset.filter);
        });
    });

    // Aplicar filtro por defecto al cargar
    applyFilter('neumatico');
})();
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
			<div class="section" style="padding-top:50px;padding-bottom:60px;background:#f8f9fc;">
				<div class="container">
					<!-- Encabezado de sección -->
					<div class="cat-header">
						<div class="row" style="align-items:flex-end;">
							<div class="col-md-6">
								<h6 style="color:#4ED199;letter-spacing:3px;font-family:'Poppins',sans-serif;font-size:11px;font-weight:700;text-transform:uppercase;margin-bottom:8px;">CATÁLOGO COMPLETO</h6>
								<h2 class="cat-header" style="padding:0;margin:0 0 6px;">Líneas de Productos</h2>
								<p>Distribuimos las mejores marcas en componentes industriales con disponibilidad inmediata y soporte técnico especializado.</p>
							</div>
							<div class="col-md-6">
								<div class="cat-filters">
									<button class="cat-filter-btn active" data-filter="neumatico">Neumático</button>
									<button class="cat-filter-btn" data-filter="electrico">Eléctrico</button>
								</div>
							</div>
						</div>
					</div>

					<?php $productos = require __DIR__ . '/data/productos.php'; ?>

					<div class="row" style="margin-top:10px;">
						<?php foreach ($productos as $p): ?>
							<div class="col-md-4 prod-card-col" data-cat="<?= htmlspecialchars($p['cat'], ENT_QUOTES) ?>" style="margin-bottom:28px;display:flex;">
								<div class="prod-card" style="width:100%;">
									<div class="prod-card-photo">
										<img src="<?= htmlspecialchars($p['img_category'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($p['title'], ENT_QUOTES) ?>" loading="lazy">
										<div class="prod-card-icon">
											<img src="<?= htmlspecialchars($p['icon'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($p['title'], ENT_QUOTES) ?>">
										</div>
									</div>
									<div class="prod-card-body">
										<h4><?= htmlspecialchars($p['title']) ?></h4>
										<ul class="prod-card-features">
											<?php foreach ($p['items'] as $item): ?>
												<li><?= htmlspecialchars($item) ?></li>
											<?php endforeach; ?>
										</ul>
										<div class="prod-card-actions">
											<a href="fichas.php?cat=<?= urlencode($p['slug']) ?>" class="btn-ficha">
												<i class="icon-doc-text-inv"></i> FICHA TÉCNICA
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
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