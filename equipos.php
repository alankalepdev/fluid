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
				['bg'=>'#2029BD','icon'=>'icon-flow-branch','title'=>'Sensores','items'=>['Inductivos','Capacitivos','Fotoeléctricos']],
				['bg'=>'#4ED199','icon'=>'icon-flow-line','title'=>'Relevadores de control','items'=>['De estado sólido','Electromecánicos','Monofásicos y trifásicos']],
				['bg'=>'#2029BD','icon'=>'icon-flash','title'=>'Botoneria de 22 MM','items'=>['Pulsador sostenido','Pulsador momentáneo','De arranque y paro']],
				['bg'=>'#4ED199','icon'=>'icon-water','title'=>'Fuentes de alimentación','items'=>['Monofásicas','Trifásicas','Varias capacidades']],
				['bg'=>'#2029BD','icon'=>'icon-cog-line','title'=>'Interruptores de limite','items'=>['De leva','De rodillo fijo','Rodillo ajustable']],
				['bg'=>'#4ED199','icon'=>'icon-tools','title'=>'Cables y accesorios','items'=>['Cable para sensor','Conector codo M12','Conectores armables M8']],
			];
			?>
			<div class="row">
				<?php foreach ($productos as $p): ?>
				<div class="col-md-4" style="margin-bottom:30px">
					<div style="border:1px solid #e8e8e8;border-radius:4px;overflow:hidden;height:100%">
						<div style="background:<?= $p['bg'] ?>;padding:30px;text-align:center">
							<i class="<?= $p['icon'] ?>" style="font-size:48px;color:#fff;"></i>
						</div>
						<div style="padding:30px">
							<h4 style="color:#2029BD"><?= $p['title'] ?></h4>
							<ul style="list-style:none;padding:0;color:#555;line-height:2">
								<?php foreach ($p['items'] as $item): ?>
								<li>✔ <?= $item ?></li>
								<?php endforeach; ?>
							</ul>
							<a href="contacto.php" class="button button_size_2 button_theme" style="margin-top:10px"><span class="button_label">COTIZAR</span></a>
                            <a href="catalogo.php" class="button button_size_2 button_theme" style="margin-top:10px"><span class="button_label"><i class="icon-doc-text-inv"></i> CATÁLOGO</span></a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
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
