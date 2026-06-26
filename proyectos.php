<?php
$page_title       = 'Proyectos | Fluidtec México';
$page_description = 'Casos de éxito y proyectos industriales realizados por Fluidtec México con las mejores empresas del país.';
$page_body_class  = 'page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'proyectos';
$page_extra_css   = '<style>
	.hero-proyectos {
		position: relative;
		min-height: 600px;
		background: linear-gradient(135deg, #001F5C 0%, #2029BD 100%);
		overflow: hidden;
	}
	.hero-proyectos-content {
		position: relative;
		z-index: 2;
		padding: 120px 0 80px;
	}
	.hero-proyectos h1 {
		font-size: 48px;
		font-weight: 700;
		color: #fff;
		margin-bottom: 20px;
		line-height: 1.2;
	}
	.hero-proyectos p {
		font-size: 18px;
		color: rgba(255,255,255,0.9);
		margin-bottom: 30px;
	}
	.hero-proyectos .location {
		display: inline-flex;
		align-items: center;
		gap: 10px;
		background: rgba(255,255,255,0.15);
		padding: 10px 20px;
		border-radius: 50px;
		color: #fff;
		font-size: 14px;
		backdrop-filter: blur(10px);
	}
	.hero-proyectos .hero-image {
		position: absolute;
		right: 0;
		top: 50%;
		transform: translateY(-50%);
		width: 50%;
		height: 100%;
		object-fit: cover;
		opacity: 0.3;
	}
	.proyecto-card {
		position: relative;
		overflow: hidden;
		border-radius: 8px;
		box-shadow: 0 2px 20px rgba(0,0,0,0.08);
		transition: transform 0.3s, box-shadow 0.3s;
		margin-bottom: 30px;
		background: #fff;
	}
	.proyecto-card:hover {
		transform: translateY(-5px);
		box-shadow: 0 8px 30px rgba(32,41,189,0.15);
	}
	.proyecto-card-image {
		position: relative;
		height: 280px;
		overflow: hidden;
	}
	.proyecto-card-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		transition: transform 0.5s;
	}
	.proyecto-card:hover .proyecto-card-image img {
		transform: scale(1.08);
	}
	.proyecto-card-icon {
		position: absolute;
		bottom: 20px;
		left: 20px;
		width: 60px;
		height: 60px;
		background: #2029BD;
		border-radius: 12px;
		display: flex;
		align-items: center;
		justify-content: center;
		color: #fff;
		font-size: 28px;
		box-shadow: 0 4px 15px rgba(32,41,189,0.4);
	}
	.proyecto-card-body {
		padding: 30px;
	}
	.proyecto-card-body h3 {
		font-size: 22px;
		font-weight: 700;
		color: #222;
		margin-bottom: 12px;
	}
	.proyecto-card-body p {
		font-size: 15px;
		color: #666;
		line-height: 1.6;
		margin-bottom: 20px;
	}
	.proceso-step {
		text-align: center;
		padding: 30px 20px;
		position: relative;
	}
	.proceso-icon {
		width: 100px;
		height: 100px;
		background: linear-gradient(135deg, #2029BD 0%, #4A56E2 100%);
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		margin: 0 auto 20px;
		color: #fff;
		font-size: 40px;
		position: relative;
		box-shadow: 0 8px 25px rgba(32,41,189,0.3);
	}
	.proceso-number {
		position: absolute;
		top: -10px;
		right: -10px;
		width: 35px;
		height: 35px;
		background: #fff;
		border: 3px solid #2029BD;
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		font-weight: 700;
		font-size: 14px;
		color: #2029BD;
	}
	.proceso-step h4 {
		font-size: 18px;
		font-weight: 700;
		color: #222;
		margin-bottom: 10px;
	}
	.proceso-step p {
		font-size: 14px;
		color: #666;
		line-height: 1.5;
	}
	.indicador-item {
		display: flex;
		align-items: center;
		gap: 20px;
		margin-bottom: 25px;
	}
	.indicador-icon {
		width: 60px;
		height: 60px;
		background: #2029BD;
		border-radius: 12px;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-shrink: 0;
	}
	.indicador-content h3 {
		font-size: 32px;
		font-weight: 700;
		color: #2029BD;
		margin: 0;
	}
	.indicador-content p {
		font-size: 13px;
		color: #666;
		margin: 0;
		text-transform: uppercase;
		letter-spacing: 1px;
	}
	.catalogo-item {
		display: flex;
		align-items: center;
		padding: 30px;
		border: 1px solid #E7E9EE;
		border-radius: 8px;
		margin-bottom: 20px;
		transition: box-shadow 0.3s, border-color 0.3s;
	}
	.catalogo-item:hover {
		border-color: #2029BD;
		box-shadow: 0 4px 20px rgba(32,41,189,0.1);
	}
	.catalogo-icon {
		width: 70px;
		height: 70px;
		flex-shrink: 0;
		margin-right: 25px;
	}
	.catalogo-content {
		flex: 1;
	}
	.catalogo-content .year {
		font-size: 12px;
		color: #999;
		text-transform: uppercase;
		letter-spacing: 1px;
		margin-bottom: 5px;
	}
	.catalogo-content h4 {
		font-size: 18px;
		font-weight: 600;
		color: #222;
		margin: 0;
	}
	.catalogo-download {
		display: flex;
		align-items: center;
		gap: 10px;
		color: #2029BD;
		font-weight: 600;
		font-size: 14px;
		text-decoration: none;
		transition: gap 0.3s;
	}
	.catalogo-download:hover {
		gap: 15px;
	}
	@media (max-width: 768px) {
		.hero-proyectos h1 { font-size: 36px; }
		.proyecto-card-image { height: 220px; }
		.proceso-icon { width: 80px; height: 80px; font-size: 32px; }
	}
</style>';
$page_extra_js    = '';
$page_header_extra = '';

require 'partials/head.php';
?>
<body class="<?= $page_body_class ?>" data-page="<?= $page_id ?>">
<div id="Wrapper">
<?php require 'partials/header.php'; ?>

<div id="Content">
	<!-- Hero Section -->
	<div class="hero-proyectos">
		<div class="container hero-proyectos-content">
			<div class="row">
				<div class="col-lg-7">
					<h1>Proyectos industriales que<br>transforman procesos</h1>
					<p>Integramos automatización, control eléctrico, neumática e ingeniería aplicada para soluciones reales en planta.</p>
					<div style="margin-bottom: 30px;">
						<a class="button button_size_2" href="#casos" style="background: #fff; color: #2029BD; margin-right: 15px;">
							<span class="button_label">Ver casos de éxito</span>
						</a>
						<a class="button button_size_2" href="contacto.php" style="background: transparent; border: 2px solid #fff; color: #fff;">
							<span class="button_label">Solicitar cotización</span>
						</a>
					</div>
					<div class="location">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
							<circle cx="12" cy="10" r="3"/>
						</svg>
						<span><strong>Cuautitlán Izcalli</strong><br>Estado de México</span>
					</div>
				</div>
			</div>
		</div>
		<img src="assets/images/corporation2-sectionbg1.jpg" alt="Proyectos" class="hero-image">
	</div>

	<!-- Resultados y casos de éxito -->
	<div id="casos" class="section" style="padding: 80px 0;">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center" style="margin-bottom: 60px;">
					<h2 style="font-size: 40px; font-weight: 700; margin-bottom: 15px;">Resultados y casos de éxito</h2>
					<p style="font-size: 18px; color: #666;">Proyectos industriales realizados con las mejores estándares de ingeniería y calidad.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="proyecto-card">
						<div class="proyecto-card-image">
							<img src="assets/images/IM_1.png" alt="Automatización de línea de producción">
							<div class="proyecto-card-icon">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
									<rect x="3" y="3" width="18" height="18" rx="2"/>
									<path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
								</svg>
							</div>
						</div>
						<div class="proyecto-card-body">
							<h3>Automatización de línea de producción</h3>
							<p>Implementación de sistema neumático y control para planta manufacturera.</p>
							<a class="button button_size_2 button_theme" href="contacto.php">
								<span class="button_label">Ver proyecto</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="proyecto-card">
						<div class="proyecto-card-image">
							<img src="assets/images/IM_2.png" alt="Sistema de tratamiento de aire">
							<div class="proyecto-card-icon">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
									<circle cx="12" cy="12" r="10"/>
									<path d="M12 6v6l4 2"/>
								</svg>
							</div>
						</div>
						<div class="proyecto-card-body">
							<h3>Sistema de tratamiento de aire</h3>
							<p>Instalación y mantenimiento de unidades para planta de alimentos comprimido.</p>
							<a class="button button_size_2 button_theme" href="contacto.php">
								<span class="button_label">Ver proyecto</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="proyecto-card">
						<div class="proyecto-card-image">
							<img src="assets/images/IM_3.png" alt="Tableros de control eléctrico">
							<div class="proyecto-card-icon">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
									<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
								</svg>
							</div>
						</div>
						<div class="proyecto-card-body">
							<h3>Tableros de control eléctrico</h3>
							<p>Diseño y suministro de componentes eléctricos para soluciones industriales.</p>
							<a class="button button_size_2 button_theme" href="contacto.php">
								<span class="button_label">Ver proyecto</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="proyecto-card">
						<div class="proyecto-card-image">
							<img src="assets/images/IM_4.png" alt="Sistema MES y control OEE">
							<div class="proyecto-card-icon">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
									<path d="M3 3v18h18"/>
									<path d="M18 17V9M13 17V5M8 17v-3"/>
								</svg>
							</div>
						</div>
						<div class="proyecto-card-body">
							<h3>Sistema MES y control OEE</h3>
							<p>Monitoreo de líneas de producción y eficiencia operativa en tiempo real.</p>
							<a class="button button_size_2 button_theme" href="contacto.php">
								<span class="button_label">Ver proyecto</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Nuestro proceso -->
	<div class="section" style="padding: 80px 0; background: #F8F9FA;">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center" style="margin-bottom: 60px;">
					<h2 style="font-size: 40px; font-weight: 700; margin-bottom: 15px;">Nuestro proceso</h2>
					<p style="font-size: 18px; color: #666;">Entendemos tus necesidades para entregar proyectos con profesionalismo y calidad.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="proceso-step">
						<div class="proceso-icon">
							<div class="proceso-number">1</div>
							<svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<circle cx="11" cy="11" r="8"/>
								<path d="M21 21l-4.35-4.35"/>
							</svg>
						</div>
						<h4>Identificación</h4>
						<p>Analizamos a fondo tus necesidades y objetivos.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="proceso-step">
						<div class="proceso-icon">
							<div class="proceso-number">2</div>
							<svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
								<polyline points="14 2 14 8 20 8"/>
								<line x1="12" y1="18" x2="12" y2="12"/>
								<line x1="9" y1="15" x2="15" y2="15"/>
							</svg>
						</div>
						<h4>Planificación</h4>
						<p>Diseñamos la solución óptima y plan de trabajo.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="proceso-step">
						<div class="proceso-icon">
							<div class="proceso-number">3</div>
							<svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M12 20h9"/>
								<path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
							</svg>
						</div>
						<h4>Ejecución y control</h4>
						<p>Implementamos y supervisamos cada etapa del proyecto.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="proceso-step">
						<div class="proceso-icon">
							<div class="proceso-number">4</div>
							<svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<polyline points="20 6 9 17 4 12"/>
							</svg>
						</div>
						<h4>Cierre</h4>
						<p>Entregamos resultados y damos soporte continuo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Empresas que confían en nosotros -->
	<div class="section" style="padding: 80px 0;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5" style="margin-bottom: 40px;">
					<h2 style="font-size: 38px; font-weight: 700; margin-bottom: 20px;">Empresas que confían en Fluidtec</h2>
					<p style="font-size: 16px; color: #666; line-height: 1.7; margin-bottom: 25px;">
						Colaboramos con las principales empresas de México en proyectos de automatización y ingeniería que impulsan productividad.
					</p>
					<div class="image_frame image_item no_link scale-with-grid no_border">
						<div class="image_wrapper">
							<img class="scale-with-grid" src="assets/images/corporation2-relations-pic4.png" alt="Clientes Fluidtec" style="border-radius: 8px;">
						</div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1">
					<div style="background: #F8F9FA; padding: 50px 40px; border-radius: 12px;">
						<h3 style="font-size: 24px; font-weight: 700; margin-bottom: 10px; color: #222;">Indicadores de desempeño:</h3>
						<p style="font-size: 14px; color: #666; margin-bottom: 35px;">Indicador de desempeño anual</p>
						
						<div class="indicador-item">
							<div class="indicador-icon">
								<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
									<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
									<circle cx="9" cy="7" r="4"/>
									<path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
									<path d="M16 3.13a4 4 0 0 1 0 7.75"/>
								</svg>
							</div>
							<div class="indicador-content">
								<h3>+1,530</h3>
								<p>Clientes activos</p>
							</div>
						</div>

						<div class="indicador-item">
							<div class="indicador-icon">
								<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
									<rect x="1" y="3" width="15" height="13"/>
									<polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
									<circle cx="5.5" cy="18.5" r="2.5"/>
									<circle cx="18.5" cy="18.5" r="2.5"/>
								</svg>
							</div>
							<div class="indicador-content">
								<h3>+2,960,000</h3>
								<p>Productos entregados</p>
							</div>
						</div>

						<div class="indicador-item">
							<div class="indicador-icon">
								<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
									<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
									<polyline points="22 4 12 14.01 9 11.01"/>
								</svg>
							</div>
							<div class="indicador-content">
								<h3>98%</h3>
								<p>Satisfacción del cliente</p>
							</div>
						</div>

						<div class="indicador-item" style="margin-bottom: 0;">
							<div class="indicador-icon">
								<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
									<circle cx="12" cy="12" r="10"/>
									<polyline points="12 6 12 12 16 14"/>
								</svg>
							</div>
							<div class="indicador-content">
								<h3>+95%</h3>
								<p>Envíos a tiempo</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fichas técnicas y catálogos -->
	<div class="section" style="padding: 80px 0; background: #F8F9FA;">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center" style="margin-bottom: 50px;">
					<h2 style="font-size: 40px; font-weight: 700; margin-bottom: 15px;">Fichas técnicas y catálogos</h2>
					<p style="font-size: 18px; color: #666;">Descarga información técnica de nuestros productos y soluciones.</p>
				</div>
			</div>
			<?php
			$catalogos = [
				[
					'titulo' => 'Catálogo General de Equipo Neumático',
					'year' => '2024'
				],
				[
					'titulo' => 'Catálogo de Equipo de Control y Automatización',
					'year' => '2024'
				],
				[
					'titulo' => 'Catálogo de Equipo Eléctrico Industrial',
					'year' => '2024'
				]
			];
			foreach ($catalogos as $cat): ?>
			<div class="catalogo-item">
				<div class="catalogo-icon">
					<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#2029BD" stroke-width="2">
						<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
						<polyline points="14 2 14 8 20 8"/>
						<line x1="16" y1="13" x2="8" y2="13"/>
						<line x1="16" y1="17" x2="8" y2="17"/>
						<polyline points="10 9 9 9 8 9"/>
					</svg>
				</div>
				<div class="catalogo-content">
					<div class="year"><?= htmlspecialchars($cat['year']) ?></div>
					<h4><?= htmlspecialchars($cat['titulo']) ?></h4>
				</div>
				<a href="#" class="catalogo-download">
					<span>DESCARGAR</span>
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
						<polyline points="7 10 12 15 17 10"/>
						<line x1="12" y1="15" x2="12" y2="3"/>
					</svg>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php require 'partials/footer.php'; ?>
</div>
<?php require 'partials/scripts.php'; ?>
