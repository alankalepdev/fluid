<?php
$page_title       = 'Equipos y Productos | Fluidtec México';
$page_description = 'Catálogo de equipos industriales Fluidtec: componentes neumáticos, electroválvulas, pistones, actuadores, sensores y más para la industria.';
$page_body_class  = 'page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'equipos';
$page_extra_css   = '';
$page_extra_js    = '';
$page_header_extra = '';

require 'partials/head.php';
?>

<body class="<?= $page_body_class ?>" data-page="<?= $page_id ?>">
	<div id="Wrapper">
		<?php require 'partials/header.php'; ?>

		<div id="Content">
			<div class="section mcb-section no-margin-h full-width">
				<div class="row">
					<div class="col-md-6 text-center" style="padding:5% 10px;background-color:#e7e9ee">
						<i class="icon-cog" style="font-size:40px;color:#2029bd;"></i>
						<h2><span style="color:#2029bd;">Nuestros<br>Equipos</span></h2>
						<p style="color:#666;max-width:350px;margin:0 auto;">Soluciones industriales de alta calidad para automatización, control y fluidos.</p>
					</div>
					<div class="col-md-6" style="padding:0 60px">
						<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
							<div class="image_wrapper"><img class="scale-with-grid" src="assets/images/fluidtec-banner-slider-2.png" alt="Equipos Fluidtec" width="960" height="360"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" style="padding-top:70px;padding-bottom:20px">
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
								'bg' => '#2029BD',
								'icon' => 'icon-flow-branch',
								'title' => 'Cilindros',
								'fichas_dir' => 'CILINDROS',
								'img' => 'assets/images/conectores.png',
								'items' => ['Cilindros de doble efecto', 'Cilindros compactos', 'Cilindros con guía']
							],
							[
								'bg' => '#4ED199',
								'icon' => 'icon-flow-line',
								'title' => 'Conectores',
								'fichas_dir' => 'CONECTORES',
								'img' => 'assets/images/conectores.png',
								'items' => ['Conexiones rectas', 'Conexiones en codo', 'Acoplamientos neumáticos']
							],
							[
								'bg' => '#2029BD',
								'icon' => 'icon-flash',
								'title' => 'Mangueras',
								'fichas_dir' => 'MANGUERAS',
								'img' => 'assets/images/conectores.png',
								'items' => ['Manguera nylon', 'Manguera poliuretano', 'Manguera teflón']
							],
							[
								'bg' => '#4ED199',
								'icon' => 'icon-water',
								'title' => 'Tratamientos de aire',
								'fichas_dir' => 'TRATAMIENTO DE AIRE',
								'img' => 'assets/images/conectores.png',
								'items' => ['Unidades FRL', 'Reguladores de presión', 'Lubricadores']
							],
							[
								'bg' => '#2029BD',
								'icon' => 'icon-cog-line',
								'title' => 'Válvulas',
								'fichas_dir' => 'VALVULAS',
								'img' => 'assets/images/conectores.png',
								'items' => ['Electroválvulas serie 4V', 'Válvulas de proceso', 'Válvulas de escape rápido']
							],
							[
								'bg' => '#4ED199',
								'icon' => 'icon-tools',
								'title' => 'Cables y accesorios',
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
												loading="lazy">
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
									li.innerHTML = '<i class="icon-doc-text-inv" style="color:#2029BD;font-size:22px;flex-shrink:0;"></i>' +
										'<span style="flex:1;color:#333;font-size:14px;">' + f.name.replace(/\.pdf$/i, '') + '</span>' +
										'<a href="' + f.url + '" download style="background:#2029BD;color:#fff;padding:7px 16px;border-radius:3px;font-size:12px;font-weight:700;text-decoration:none;letter-spacing:1px;white-space:nowrap;">' +
										'<i class="icon-download"></i> DESCARGAR</a>';
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