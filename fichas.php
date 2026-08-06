<?php
$productos = require __DIR__ . '/data/productos.php';

$slug     = $_GET['cat'] ?? '';
$producto = null;
foreach ($productos as $p) {
	if ($p['slug'] === $slug) {
		$producto = $p;
		break;
	}
}

if (!$producto) {
	header('Location: equipos.php');
	exit;
}

// Familias reales si existen; si no, se derivan temporalmente de los bullets del catálogo.
$familias = $producto['familias'] ?? array_map(
	fn($item) => ['name' => $item, 'group' => $item, 'desc' => '', 'file' => null],
	$producto['items']
);

foreach ($familias as &$fam) {
	$fam['pdf_url'] = null;
	if (!empty($producto['fichas_dir']) && !empty($fam['file'])) {
		$abs = __DIR__ . '/assets/fichas-tecnicas/' . $producto['fichas_dir'] . '/' . $fam['file'];
		if (is_file($abs)) {
			$fam['pdf_url'] = 'assets/fichas-tecnicas/' . rawurlencode($producto['fichas_dir']) . '/' . rawurlencode($fam['file']);
		}
	}
}
unset($fam);

$grupos     = array_values(array_unique(array_column($familias, 'group')));
$fichaTitle = $producto['ficha_title'] ?? $producto['title'];

$page_title       = 'Fichas Técnicas – ' . $fichaTitle . ' | Fluidtec México';
$page_description = 'Descarga las fichas técnicas de nuestra línea de ' . mb_strtolower($fichaTitle) . '.';
$page_body_class  = 'page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'fichas';
$page_extra_css   = <<<'CSS'
<style>
/* ── Fichas Técnicas ── */
#Content .fx-hero .container,
#Content .fx-body .container { width: 90%; max-width: 90%; margin: 0 auto; }

.fx-hero { background: linear-gradient(135deg, #001F5C 0%, #2029BD 100%); padding: 70px 0 54px; overflow: hidden; }
.fx-hero-icon { width: 74px; height: 74px; border-radius: 16px; background: rgba(255,255,255,.12); display: flex; align-items: center; justify-content: center; margin-bottom: 26px; }
.fx-hero-icon i { font-size: 32px; color: #fff; }
.fx-hero h1 { font-family: 'Poppins', sans-serif; font-size: 42px; font-weight: 700; color: #fff; line-height: 1.25; margin: 0 0 18px; }
.fx-hero h1 span { color: #9db4ff; display: block; }
.fx-hero p.fx-lead { color: rgba(255,255,255,.8); font-size: 17px; max-width: 480px; margin: 0 0 32px; }
.fx-badges { display: flex; flex-wrap: wrap; gap: 32px; }
.fx-badge { display: flex; align-items: center; gap: 14px; }
.fx-badge i { font-size: 24px; color: #4ED199; flex-shrink: 0; }
.fx-badge strong { display: block; color: #fff; font-size: 14px; font-weight: 700; }
.fx-badge span { display: block; color: rgba(255,255,255,.7); font-size: 13px; }
.fx-hero-photo { background: #fff; border-radius: 16px; padding: 26px; box-shadow: 0 20px 50px rgba(0,0,0,.25); }
.fx-hero-photo img { width: 100%; height: auto; display: block; border-radius: 10px; }
.fx-hero-photo--no-card { background: none; padding: 0; box-shadow: none; }
.fx-hero-photo--no-card img { border-radius: 0; }

.fx-body { padding: 56px 0 80px; background: #f8f9fc; }
.fx-sidebar { background: #fff; border-radius: 12px; padding: 28px; box-shadow: 0 2px 16px rgba(32,41,189,.06); margin-bottom: 24px; }
.fx-sidebar h6 { font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 1px; color: #1a1f3c; text-transform: uppercase; margin-bottom: 18px; }
.fx-filter-btn { display: flex; align-items: center; gap: 12px; width: 100%; text-align: left; background: none; border: none; padding: 13px 12px; border-radius: 6px; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; color: #555; cursor: pointer; transition: all .2s; }
.fx-filter-btn i { font-size: 17px; color: #8890b5; }
.fx-filter-btn.active, .fx-filter-btn:hover { background: #2029BD; color: #fff; }
.fx-filter-btn.active i, .fx-filter-btn:hover i { color: #fff; }
.fx-note { background: #f4f6fb; border-radius: 12px; padding: 22px; display: flex; gap: 14px; align-items: flex-start; }
.fx-note i { font-size: 24px; color: #2029BD; flex-shrink: 0; margin-top: 2px; }
.fx-note strong { display: block; font-size: 14px; color: #1a1f3c; margin-bottom: 3px; }
.fx-note span { font-size: 13px; color: #777; }

.fam-card { background: #fff; border-radius: 12px; box-shadow: 0 2px 16px rgba(32,41,189,.06); padding: 26px; display: flex; gap: 22px; align-items: center; margin-bottom: 24px; transition: box-shadow .2s, transform .2s; }
.fam-card:hover { box-shadow: 0 8px 28px rgba(32,41,189,.14); transform: translateY(-2px); }
.fam-card-photo { width: 130px; height: 130px; border-radius: 10px; overflow: hidden; background: #f4f6fb; flex-shrink: 0; }
.fam-card-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.fam-card-body { flex: 1; min-width: 0; }
.fam-card-body h4 { font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 700; color: #1a1f3c; margin: 0 0 6px; }
.fam-card-body p { font-size: 14px; color: #777; margin: 0 0 16px; line-height: 1.55; }
.btn-descargar { background: #2029BD; color: #fff; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; padding: 11px 20px; border-radius: 5px; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: background .2s; border: none; cursor: pointer; }
.btn-descargar:hover { background: #141ba7; color: #fff; }
.btn-descargar.disabled { background: #e3e6f2; color: #9096b8; cursor: not-allowed; pointer-events: none; }

.fx-cta-bar { background: #eef1fb; border-radius: 12px; padding: 28px 32px; display: flex; align-items: center; justify-content: space-between; gap: 24px; flex-wrap: wrap; margin-top: 14px; }
.fx-cta-bar-left { display: flex; align-items: center; gap: 16px; }
.fx-cta-bar-left i { font-size: 26px; color: #2029BD; }
.fx-cta-bar-left strong { display: block; font-size: 15px; color: #1a1f3c; }
.fx-cta-bar-left span { font-size: 13.5px; color: #777; }

@media (max-width: 767px) {
  .fx-hero-photo { margin-top: 24px; }
  .fam-card { flex-direction: column; align-items: flex-start; }
  .fam-card-photo { width: 100%; height: 200px; }
}
</style>
CSS;
$page_extra_js    = <<<'JS'
<script>
(function () {
    var btns  = document.querySelectorAll('.fx-filter-btn');
    var cards = document.querySelectorAll('.fam-card-col');

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            btns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            var filter = btn.dataset.group;

            cards.forEach(function (col) {
                var match = filter === 'all' || col.dataset.group === filter;
                col.style.display = match ? 'block' : 'none';
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
			<div class="fx-hero">
				<div class="container">
					<div class="row" style="align-items:center;">
						<div class="col-md-6">
							<div class="fx-hero-icon"><i class="icon-doc-text-inv"></i></div>
							<h1>Fichas Técnicas – <span><?= htmlspecialchars($fichaTitle) ?></span></h1>
							<p class="fx-lead">Descarga las fichas técnicas de nuestra línea de <?= htmlspecialchars(mb_strtolower($fichaTitle)) ?> de alta calidad.</p>
							<div class="fx-badges">
								<div class="fx-badge">
									<i class="icon-lock"></i>
									<div><strong>Alta calidad</strong><span>Estándares internacionales</span></div>
								</div>
								<div class="fx-badge">
									<i class="icon-network"></i>
									<div><strong>Variedad</strong><span>Amplio portafolio</span></div>
								</div>
								<div class="fx-badge">
									<i class="icon-download"></i>
									<div><strong>Descarga inmediata</strong><span>Fichas técnicas actualizadas</span></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="fx-hero-photo<?= !empty($producto['img_no_card']) ? ' fx-hero-photo--no-card' : '' ?>">
								<img src="<?= htmlspecialchars($producto['img'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($fichaTitle, ENT_QUOTES) ?>">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fx-body">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="fx-sidebar">
								<h6>Familias de <?= htmlspecialchars(mb_strtolower($fichaTitle)) ?></h6>
								<button type="button" class="fx-filter-btn active" data-group="all">
									<i class="icon-layout"></i> Todas las familias
								</button>
								<?php foreach ($grupos as $grupo): ?>
									<button type="button" class="fx-filter-btn" data-group="<?= htmlspecialchars($grupo, ENT_QUOTES) ?>">
										<i class="icon-tag"></i> <?= htmlspecialchars($grupo) ?>
									</button>
								<?php endforeach; ?>
							</div>
							<div class="fx-note">
								<i class="icon-download"></i>
								<div><strong>Descarga inmediata</strong><span>Fichas técnicas siempre actualizadas.</span></div>
							</div>
						</div>

						<div class="col-md-9">
							<div class="row">
								<?php foreach ($familias as $fam): ?>
									<div class="col-md-6 fam-card-col" data-group="<?= htmlspecialchars($fam['group'], ENT_QUOTES) ?>">
										<div class="fam-card">
											<div class="fam-card-photo">
												<img src="<?= htmlspecialchars($fam['img'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($fam['name'], ENT_QUOTES) ?>" loading="lazy">
											</div>
											<div class="fam-card-body">
												<h4><?= htmlspecialchars($fam['name']) ?></h4>
												<?php if (!empty($fam['desc'])): ?>
													<p><?= htmlspecialchars($fam['desc']) ?></p>
												<?php endif; ?>
												<?php if ($fam['pdf_url']): ?>
													<a href="<?= htmlspecialchars($fam['pdf_url'], ENT_QUOTES) ?>" class="btn-descargar" download>
														<i class="icon-download"></i> Descargar
													</a>
												<?php else: ?>
													<span class="btn-descargar disabled">
														<i class="icon-download"></i> Próximamente
													</span>
												<?php endif; ?>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

							<div class="fx-cta-bar">
								<div class="fx-cta-bar-left">
									<i class="icon-help-circled"></i>
									<div><strong>¿No encuentras el archivo que buscas?</strong><span>Contáctanos y con gusto te ayudaremos.</span></div>
								</div>
								<a href="contacto.php" class="button button_size_2" style="background:#2029BD;border-color:#2029BD;color:#fff"><span class="button_label">CONTACTAR</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php require 'partials/footer.php'; ?>
	</div>
	<?php require 'partials/scripts.php'; ?>
