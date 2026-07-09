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

					<?php
					$productos = [
						[
							'cat'        => 'neumatico',
							'icon'       => 'assets/images/IC_2.png',
							'title'      => 'Cilindros',
							'fichas_dir' => 'CILINDROS',
							'img'        => 'assets/images/cilindros.jpeg',
							'items'      => ['Cilindros de doble efecto', 'Cilindros compactos', 'Cilindros con guía'],
						],
						[
							'cat'        => 'neumatico',
							'icon'       => 'assets/images/IC_1.png',
							'title'      => 'Conectores',
							'fichas_dir' => 'CONECTORES',
							'img'        => 'assets/images/conectores.jpeg',
							'items'      => ['Conexiones rectas', 'Conexiones en codo', 'Acoplamientos neumáticos'],
						],
						[
							'cat'        => 'neumatico',
							'icon'       => 'assets/images/IC_3.png',
							'title'      => 'Mangueras',
							'fichas_dir' => 'MANGUERAS',
							'img'        => 'assets/images/mangueras.jpeg',
							'items'      => ['Manguera nylon', 'Manguera poliuretano', 'Manguera teflón'],
						],
						[
							'cat'        => 'neumatico',
							'icon'       => 'assets/images/IC_6.png',
							'title'      => 'Tratamientos de aire',
							'fichas_dir' => 'TRATAMIENTO DE AIRE',
							'img'        => 'assets/images/tratamiento-aire.jpeg',
							'items'      => ['Unidades FRL', 'Reguladores de presión', 'Lubricadores'],
						],
						[
							'cat'        => 'neumatico',
							'icon'       => 'assets/images/IC_4.png',
							'title'      => 'Válvulas neumáticas',
							'fichas_dir' => 'VALVULAS',
							'img'        => 'assets/images/valvula-neumaticas.jpeg',
							'items'      => ['Electroválvulas serie 4V', 'Válvulas de proceso', 'Válvulas de escape rápido'],
						],
						[
							'cat'        => 'neumatico',
							'icon'       => 'assets/images/IC_8.png',
							'title'      => 'Válvulas de vacío',
							'fichas_dir' => null,
							'img'        => 'assets/images/valvulas.jpeg',
							'items'      => ['Cable para sensor', 'Conector codo M12', 'Conectores armables M8'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_5.png',
							'title'      => 'Sensores',
							'fichas_dir' => 'SENSORES',
							'img'        => 'assets/images/equipos/SENSORES.png',
							'items'      => ['Sensores inductivos', 'Sensores capacitivos', 'Sensores fotoeléctricos'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_7.png',
							'title'      => 'Reveladores de control',
							'fichas_dir' => null,
							'img'        => 'assets/images/equipos/REVELADORES DE CONTROL.png',
							'items'      => ['Electroválvulas 2/2 vías', 'Electroválvulas 3/2 vías', 'Electroválvulas 5/2 vías'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_9.png',
							'title'      => 'Botoneria 22 mm',
							'fichas_dir' => null,
							'img'        => 'assets/images/equipos/BOTONERIA 22 MM.png',
							'items'      => ['Botones pulsadores', 'Interruptores de llave', 'Señalizadores luminosos'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_10.png',
							'title'      => 'Fuentes de alimentación',
							'fichas_dir' => null,
							'img'        => 'assets/images/equipos/FUENTES_DE_ALIMENTACION.png',
							'items'      => ['Fuentes de poder conmutadas', 'Fuentes de poder industriales', 'Fuentes de poder DIN'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_11.png',
							'title'      => 'Interruptores de limite',
							'fichas_dir' => null,
							'img'        => 'assets/images/equipos/INTERRUPTORES_DE_LIMITE.png',
							'items'      => ['Interruptores de palanca', 'Interruptores de rodillo', 'Interruptores de empuje'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_12.png',
							'title'      => 'Cables y accesorios',
							'fichas_dir' => null,
							'img'        => 'assets/images/equipos/CABLES_Y_ACCESORIOS.png',
							'items'      => ['Cables eléctricos', 'Conectores', 'Accesorios para cableado'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_13.png',
							'title'      => 'Contactores',
							'fichas_dir' => null,
							'img'        => 'assets/images/equipos/CONTACTORES.png',
							'items'      => ['Contactores de potencia', 'Contactores auxiliares', 'Contactores de estado sólido'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_14.png',
							'title'      => 'Potenciómetro',
							'fichas_dir' => null,
							'img'        => 'assets/images/equipos/POTENCIOMETRO.png',
							'items'      => ['Potenciómetros lineales', 'Potenciómetros rotativos', 'Potenciómetros digitales'],
						],
						[
							'cat'        => 'electrico',
							'icon'       => 'assets/images/IC_15.png',
							'title'      => 'Ventiladores',
							'fichas_dir' => null,
							'img'        => 'assets/images/equipos/VENTILADORES.png',
							'items'      => ['Ventiladores axiales', 'Ventiladores centrífugos', 'Ventiladores de techo'],
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

					<div class="row" style="margin-top:10px;">
						<?php foreach ($productos as $idx => $p): ?>
							<div class="col-md-4 prod-card-col" data-cat="<?= htmlspecialchars($p['cat'], ENT_QUOTES) ?>" style="margin-bottom:28px;display:flex;">
								<div class="prod-card" style="width:100%;">
									<div class="prod-card-photo">
										<img src="<?= htmlspecialchars($p['img'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($p['title'], ENT_QUOTES) ?>" loading="lazy">
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
											<?php if (!empty($p['fichas'])): ?>
												<button type="button" class="btn-ficha" onclick="abrirFichas(<?= $idx ?>)">
													<i class="icon-doc-text-inv"></i> FICHA TÉCNICA
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
						<div id="fichas-modal-box" style="background:#fff;border-radius:10px;width:90%;max-width:900px;max-height:80vh;overflow-y:auto;box-shadow:0 8px 40px rgba(0,0,0,.25);">
							<div style="background:#2029BD;padding:22px 28px;display:flex;align-items:center;justify-content:space-between;border-radius:10px 10px 0 0;">
								<h4 id="fichas-modal-title" style="color:#fff;margin:0;font-size:18px;font-family:'Poppins',sans-serif;"></h4>
								<button onclick="cerrarFichas()" style="background:none;border:none;color:#fff;font-size:24px;cursor:pointer;line-height:1;">&times;</button>
							</div>
							<ul id="fichas-modal-list" style="list-style:none;padding:24px 28px;margin:0;"></ul>
						</div>
					</div>

					<?php
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
								li.innerHTML = '<i class="icon-doc-text-inv" style="color:#2029BD;font-size:22px;flex-shrink:0;"></i>' +
									'<span style="flex:1;color:#333;font-size:14px;">' + f.name.replace(/\.pdf$/i, '') + '</span>' +
									'<a href="' + f.url + '" download style="background:#2029BD;color:#fff;padding:7px 16px;border-radius:4px;font-size:12px;font-weight:700;text-decoration:none;letter-spacing:1px;white-space:nowrap;"><i class="icon-download"></i> DESCARGAR</a>';
								list.appendChild(li);
							});
							document.getElementById('fichas-modal-overlay').style.display = 'flex';
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