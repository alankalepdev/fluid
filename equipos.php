<?php
$page_title       = 'Equipos y Productos | Fluidtec México';
$page_description = 'Catálogo de equipos industriales Fluidtec: componentes neumáticos, electroválvulas, pistones, actuadores, sensores y más para la industria.';
$page_body_class  = 'page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'equipos';
$page_extra_css   = <<<'CSS'
<style>
/* ── Catálogo de Productos ── */
.cat-header { padding: 60px 0 30px; }
.cat-header h2 { font-family: 'Poppins', sans-serif; font-size: 32px; font-weight: 700; color: #1a1f3c; margin-bottom: 6px; }
.cat-header p  { color: #777; font-size: 14px; margin: 0; }
.cat-filters { display: flex; gap: 10px; flex-wrap: wrap; align-items: center; justify-content: flex-end; }
.cat-filter-btn { font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: .5px; padding: 8px 18px; border-radius: 4px; border: 1.5px solid #dde1f0; background: #fff; color: #555; cursor: pointer; transition: all .2s; }
.cat-filter-btn.active, .cat-filter-btn:hover { background: #2029BD; border-color: #2029BD; color: #fff; }

#Content .section > .container { width: 90%; max-width: none; margin: 0 auto; }

/* Banner de ayuda */
.help-banner { position: sticky; top: 100px; background: linear-gradient(160deg, #001F5C 0%, #2029BD 100%); border-radius: 16px; padding: 30px 26px; color: #fff; }
.help-banner-icon { width: 54px; height: 54px; border-radius: 12px; background: rgba(255,255,255,.12); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
.help-banner-icon i { font-size: 24px; color: #fff; }
.help-banner h3 { font-family: 'Poppins', sans-serif; font-size: 22px; font-weight: 700; color: #fff; line-height: 1.3; margin: 0 0 12px; }
.help-banner p.help-banner-lead { color: rgba(255,255,255,.78); font-size: 13.5px; line-height: 1.6; margin: 0 0 22px; }
.help-banner-actions { display: flex; flex-direction: column; gap: 10px; margin-bottom: 26px; }
.btn-whatsapp { background: #25D366; color: #fff; font-family: 'Poppins', sans-serif; font-size: 12.5px; font-weight: 700; letter-spacing: .3px; padding: 13px 18px; border-radius: 6px; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 9px; transition: background .2s; text-transform: uppercase; }
.btn-whatsapp:hover { background: #1fb857; color: #fff; }
.btn-whatsapp i { font-size: 17px; }
.btn-asesoria { background: rgba(255,255,255,.1); color: #fff; font-family: 'Poppins', sans-serif; font-size: 12.5px; font-weight: 700; letter-spacing: .3px; padding: 13px 18px; border-radius: 6px; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 9px; border: 1.5px solid rgba(255,255,255,.35); transition: background .2s; text-transform: uppercase; }
.btn-asesoria:hover { background: rgba(255,255,255,.18); color: #fff; }
.help-banner-features { list-style: none; padding: 0; margin: 0 0 26px; }
.help-banner-features li { display: flex; align-items: flex-start; gap: 14px; padding: 11px 0; }
.help-banner-features li i { font-size: 20px; color: #4ED199; flex-shrink: 0; margin-top: 1px; }
.help-banner-features li strong { display: block; font-size: 13.5px; color: #fff; }
.help-banner-features li span { display: block; font-size: 12px; color: rgba(255,255,255,.65); }
.help-banner-contact { background: rgba(255,255,255,.08); border-radius: 12px; padding: 18px 20px; margin-bottom: 18px; }
.help-banner-contact-row { display: flex; align-items: flex-start; gap: 12px; padding: 8px 0; }
.help-banner-contact-row i { font-size: 17px; color: #9db4ff; flex-shrink: 0; margin-top: 2px; }
.help-banner-contact-row strong { display: block; font-size: 12px; color: rgba(255,255,255,.65); font-weight: 600; }
.help-banner-contact-row a, .help-banner-contact-row span.contact-value { display: block; font-size: 13.5px; color: #fff; text-decoration: none; }
.help-banner-contact-row a:hover { text-decoration: underline; }
.help-banner-commitment { display: flex; align-items: flex-start; gap: 12px; border-top: 1px solid rgba(255,255,255,.15); padding-top: 18px; }
.help-banner-commitment i { font-size: 20px; color: #4ED199; flex-shrink: 0; margin-top: 2px; }
.help-banner-commitment strong { display: block; font-size: 13px; color: #fff; margin-bottom: 3px; }
.help-banner-commitment span { display: block; font-size: 12px; color: rgba(255,255,255,.65); line-height: 1.5; }
@media (max-width: 991px) {
  .help-banner { position: static; margin-top: 30px; }
}

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
$page_extra_js    = <<<'JS'
<script>
(function () {
    var btns  = document.querySelectorAll('.cat-filter-btn');
    var cards = document.querySelectorAll('.prod-card-col');

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            btns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            var filter = btn.dataset.filter;
            var visible = 0;

            cards.forEach(function (col) {
                var match = filter === 'all' || col.dataset.cat === filter;
                if (match) {
                    col.style.display = 'flex';
                    col.style.opacity = '0';
                    col.style.transform = 'translateY(12px)';
                    // force reflow then animate in
                    requestAnimationFrame(function () {
                        requestAnimationFrame(function () {
                            col.style.transition = 'opacity .3s ease, transform .3s ease';
                            col.style.opacity = '1';
                            col.style.transform = 'translateY(0)';
                        });
                    });
                    visible++;
                } else {
                    col.style.transition = 'none';
                    col.style.display = 'none';
                }
            });
        });
    });
})();
</script>
JS;
$page_header_extra = '';

require 'partials/head.php';
?>

<body class="<?= $page_body_class ?>" data-page="<?= $page_id ?>">
	<div id="Wrapper">
		<?php require 'partials/header.php'; ?>

		<div id="Content">
			<div class="section mcb-section no-margin-h full-width">
				<div class="row">
					<div class="col-md-6 text-center" style="background-color:#e7e9ee">
						<div class="mt-5">
							<i class="icon-cog" style="font-size:40px;color:#2029bd;"></i>
							<h2><span style="color:#2029bd;">Nuestros<br>Equipos</span></h2>
							<p style="color:#666;max-width:350px;margin:0 auto;">Soluciones industriales de alta calidad para automatización, control y fluidos.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
							<div class="image_wrapper"><img class="scale-with-grid" src="assets/images/img_equipos.png" alt="Equipos Fluidtec" width="960" height="360"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" style="padding-top:50px;padding-bottom:60px;background:#f8f9fc;">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<!-- Encabezado de sección -->
							<div class="cat-header">
								<div class="row" style="align-items:flex-end;">
									<div class="col-md-6">
										<h6 style="color:#4ED199;letter-spacing:3px;font-family:'Poppins',sans-serif;font-size:11px;font-weight:700;text-transform:uppercase;margin-bottom:8px;">CATÁLOGO COMPLETO</h6>
										<h2 class="cat-header" style="padding:0;margin:0 0 6px;">Categorías de productos</h2>
										<p>Soluciones para automatización y control industrial</p>
									</div>
									<div class="col-md-6">
										<div class="cat-filters">
											<button class="cat-filter-btn active" data-filter="all">Todas las categorías</button>
											<button class="cat-filter-btn" data-filter="neumatico">Neumático</button>
											<button class="cat-filter-btn" data-filter="electrico">Eléctrico</button>
										</div>
									</div>
								</div>
							</div>

							<?php $productos = require __DIR__ . '/data/productos.php'; ?>

							<div class="row" style="margin-top:10px;">
								<?php foreach ($productos as $idx => $p): ?>
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
													<a href="contacto.php" class="btn-cotizar">COTIZAR</a>
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

						<div class="col-lg-4">
							<div class="help-banner">
								<div class="help-banner-icon"><i class="icon-chat"></i></div>
								<h3>¿No encuentras lo que necesitas?</h3>
								<p class="help-banner-lead">Envíanos una foto, número de parte o descripción de tu equipo y te ayudamos a encontrar la mejor solución.</p>

								<div class="help-banner-actions">
									<a href="https://wa.me/525620119180?text=Hola%2C%20necesito%20ayuda%20para%20encontrar%20un%20equipo" class="btn-whatsapp" target="_blank" rel="noopener">
										<i class="fa-icon-whatsapp"></i> Enviar información por WhatsApp
									</a>
									<a href="contacto.php" class="btn-asesoria">
										<i class="icon-user"></i> Solicitar asesoría
									</a>
								</div>

								<ul class="help-banner-features">
									<li>
										<i class="icon-clock"></i>
										<div><strong>Respuesta rápida</strong><span>Atención ágil y personalizada.</span></div>
									</li>
									<li>
										<i class="icon-user"></i>
										<div><strong>Asesoría especializada</strong><span>Expertos listos para ayudarte.</span></div>
									</li>
									<li>
										<i class="icon-cog"></i>
										<div><strong>Soluciones a la medida</strong><span>Diseñadas para tu industria.</span></div>
									</li>
								</ul>

								<div class="help-banner-contact">
									<div class="help-banner-contact-row">
										<i class="icon-phone"></i>
										<div><strong>Teléfono</strong><a href="tel:+525620119180">+52 56 2011 9180</a></div>
									</div>
									<div class="help-banner-contact-row">
										<i class="icon-mail"></i>
										<div><strong>Correo</strong><a href="mailto:cotizaciones@fluidtec.mx">cotizaciones@fluidtec.mx</a></div>
									</div>
									<div class="help-banner-contact-row">
										<i class="icon-clock"></i>
										<div><strong>Tiempo de respuesta</strong><span class="contact-value">Menos de 2 horas hábiles</span></div>
									</div>
								</div>

								<div class="help-banner-commitment">
									<i class="icon-lock"></i>
									<div><strong>Compromiso Fluidtec</strong><span>Productos de calidad, respaldo técnico y disponibilidad garantizada.</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" style="padding:80px 0;background-color:#2029BD;margin-top:50px">
				<div class="container">
					<div class="row text-center">
						<div class="col-12">
							<h3 style="color:#fff">¿No encontraste lo que buscas?</h3>
							<p style="color:#9094de;margin-bottom:30px">Tenemos acceso a más de 50,000 referencias de componentes industriales. Contáctanos y te ayudamos.</p>
							<a href="contacto.php" class="button button_size_2" style="background:#4ED199;border-color:#4ED199;color:#fff"><span class="button_label">SOLICITAR COTIZACIÓN</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php require 'partials/footer.php'; ?>
	</div>
	<?php require 'partials/scripts.php'; ?>