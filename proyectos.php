<?php
$page_title       = 'Proyectos | Fluidtec México';
$page_description = 'Casos de éxito y proyectos industriales realizados por Fluidtec México con las mejores empresas del país.';
$page_body_class  = 'page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'proyectos';
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
				<img src="assets/images/corporation2-relations-pic1.png" alt="Fluidtec Proyectos" width="30" height="30">
				<h2><span style="color:#2029bd;">Nuestros<br>Proyectos</span></h2>
			</div>
			<div class="col-md-6" style="padding:0 60px">
				<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
					<div class="image_wrapper"><img class="scale-with-grid" src="assets/images/corporation2-contact-pic2.jpg" alt="Fluidtec proyectos" width="960" height="360"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="section" style="padding-top:120px">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Resultados y<br>casos de éxito</h2>
					<h5>Proyectos industriales realizados con las mejores empresas de México.</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="section mcb-section no-margin-h" style="padding-top:50px;padding-bottom:70px">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-4">
					<div class="column_attr clearfix" style="padding:40px;border:1px solid #E7E9EE;">
						<h3>Automatización de línea de producción</h3>
						<p>Implementación de sistema neumático y de control para planta manufacturera en Estado de México.</p>
						<hr class="no_line" style="margin:0 auto 40px auto">
						<a class="button button_size_2 button_theme" href="contacto.php"><span class="button_label">COTIZAR</span></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="column_attr clearfix" style="padding:40px;border:1px solid #E7E9EE;">
						<h3>Sistema de tratamiento de aire</h3>
						<p>Instalación de unidades de mantenimiento y electroválvulas para planta de alimentos Citrofrut.</p>
						<hr class="no_line" style="margin:0 auto 40px auto">
						<a class="button button_size_2 button_theme" href="contacto.php"><span class="button_label">COTIZAR</span></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="column_attr clearfix" style="padding:40px;border:1px solid #E7E9EE;">
						<h3>Tableros de control eléctrico</h3>
						<p>Diseño y suministro de componentes eléctricos para tableros industriales en Daikin México.</p>
						<hr class="no_line" style="margin:0 auto 40px auto">
						<a class="button button_size_2 button_theme" href="contacto.php"><span class="button_label">COTIZAR</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section" style="padding-bottom:75px">
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="padding:40px 4% 40px 0">
					<h2>Empresas que confían en Fluidtec</h2>
					<p>Trabajamos con las mejores empresas de México brindando soluciones industriales de calidad y con disponibilidad inmediata.</p>
					<p>Loreal, Citrofrut, Daikin, Alpura, Berry Global y más.</p>
					<div class="image_frame image_item no_link scale-with-grid no_border">
						<div class="image_wrapper"><img class="scale-with-grid" src="assets/images/corporation2-relations-pic4.png" alt="Clientes Fluidtec" width="630" height="331"></div>
					</div>
				</div>
				<div class="col-md-6" style="padding:10% 50px;background-color:#e7e9ee">
					<h4>Indicadores de desempeño:</h4>
					<p>Resultados que respaldan nuestra trayectoria como distribuidores industriales en México.</p>
					<hr class="no_line" style="margin:0 auto 20px auto">
					<table>
						<tbody>
							<tr><td>Clientes activos</td><td><strong>+1,530</strong></td></tr>
							<tr><td>Productos entregados</td><td><strong>+2,960,000</strong></td></tr>
							<tr><td>Satisfacción del cliente</td><td><strong>98%</strong></td></tr>
							<tr><td>Envíos en tiempo</td><td><strong>+95%</strong></td></tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="section" style="padding-top:40px">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Fichas técnicas y catálogos</h2>
					<h5>Descarga información técnica de nuestros productos y soluciones</h5>
				</div>
			</div>
		</div>
	</div>
	<?php
	$catalogos = [
		'Catálogo General de Equipo Neumático',
		'Catálogo de Equipo de Control y Automatización',
		'Catálogo de Equipo Eléctrico Industrial',
	];
	foreach ($catalogos as $cat): ?>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-12"><hr class="no_line" style="margin:0 auto 30px"></div>
				<div class="col-md-2 text-center">
					<hr class="no_line" style="margin:0 auto 20px">
					<img src="assets/images/corporation2-relations-pic2.png" alt="documento" width="30" height="36">
					<hr class="no_line" style="margin:0 auto 40px">
				</div>
				<div class="col-md-8">
					<h6>2024</h6>
					<h4><?= htmlspecialchars($cat) ?></h4>
				</div>
				<div class="col-md-2">
					<div class="row">
						<div class="col-md-8">
							<div class="column_attr clearfix mobile_align_center">
								<hr class="no_line" style="margin:0 auto 10px auto">
								<h6><a href="#">DESCARGAR</a></h6>
							</div>
						</div>
						<div class="col-md-4">
							<div class="image_wrapper"><img class="scale-with-grid" src="assets/images/corporation2-relations-pic3.png" alt="pdf" width="36" height="36"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section"><div class="container"><div class="row"><div class="col-12 column_divider"><hr style="margin:0 auto 30px;"></div></div></div></div>
	<?php endforeach; ?>
	<div class="section" style="padding-top:120px;padding-bottom:100px">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="row no-gutters">
						<div class="col-md-2"><img src="assets/images/corporation2-home-icon1.png" alt="icon" width="48" height="48"></div>
						<div class="col-md-10 text-center">
							<div class="google_font" style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:36px;line-height:36px;font-weight:700;color:#222;">
								<span class="counter-inline animate-math"><span class="number" data-to="2960000">2960000</span></span>
							</div>
							<hr class="no_line" style="margin:0 auto 20px">
							<p style="font-size:12px;letter-spacing:3px;margin-top:-15px;">PRODUCTOS ENTREGADOS</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row no-gutters">
						<div class="col-md-2"><img src="assets/images/corporation2-home-icon2.png" alt="icon" width="48" height="48"></div>
						<div class="col-md-10 text-center">
							<div class="google_font" style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:36px;line-height:36px;font-weight:700;color:#222;">
								<span class="counter-inline animate-math"><span class="number" data-to="1530">1530</span></span>
							</div>
							<hr class="no_line" style="margin:0 auto 20px">
							<p style="font-size:12px;letter-spacing:3px;margin-top:-15px;">CLIENTES ACTIVOS</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row no-gutters">
						<div class="col-md-2"><img src="assets/images/corporation2-home-icon3.png" alt="icon" width="48" height="48"></div>
						<div class="col-md-10 text-center">
							<div class="google_font" style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:36px;line-height:36px;font-weight:700;color:#222;">
								<span class="counter-inline animate-math"><span class="number" data-to="98">98</span></span> %
							</div>
							<hr class="no_line" style="margin:0 auto 20px">
							<p style="font-size:12px;letter-spacing:3px;margin-top:-15px;">SATISFACCIÓN</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row no-gutters">
						<div class="col-md-2"><img src="assets/images/corporation2-home-icon3.png" alt="icon" width="48" height="48"></div>
						<div class="col-md-10 text-center">
							<div class="google_font" style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:36px;line-height:36px;font-weight:700;color:#222;">
								<span class="counter-inline animate-math"><span class="number" data-to="95">95</span></span> %
							</div>
							<hr class="no_line" style="margin:0 auto 20px">
							<p style="font-size:12px;letter-spacing:3px;margin-top:-15px;">ENVÍOS A TIEMPO</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require 'partials/footer.php'; ?>
</div>
<?php require 'partials/scripts.php'; ?>
