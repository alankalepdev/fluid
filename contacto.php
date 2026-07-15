<?php
$page_title       = 'Contacto | Fluidtec México';
$page_description = 'Contacta a Fluidtec México para cotizaciones de componentes industriales. Tel: (56) 2011 9180. Cuautitlán Izcalli, Estado de México.';
$page_body_class  = 'page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky';
$page_id          = 'contacto';
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
					<div class="col-md-6 text-center mt-4" style="background-color:#e7e9ee">
						<div class="mt-5">
							<i class="icon-mail" style="font-size:40px;color:#2029bd;"></i>
							<h2><span style="color:#2029bd;">Contáctanos,<br>estamos aquí</span></h2>
							<p style="color:#666;max-width:350px;margin:0 auto;">Cotizaciones, soporte técnico y ventas. Respondemos en menos de 24 horas.</p>
						</div>
					</div>
					<div class="col-md-6" style="padding:0;">
						<div style="background:linear-gradient(135deg,#2029BD 0%,#4ED199 100%);display:flex;align-items:center;justify-content:center;">
							<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
								<div class="image_wrapper"><img class="scale-with-grid" src="assets/images/img_contacto.png" alt="Equipos Fluidtec" width="960" height="360"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" style="padding-top:30px;padding-bottom:10px">
				<div class="container">
					<div class="row" style="padding:85px 0px 105px 0px;">
						<div class="col-md-4">
							<div class="column_attr clearfix mobile_align_center alert alert-primary">
								<h6>01</h6>
								<h3>Dirección</h3>
								<p><a href="https://maps.app.goo.gl/4SsphCd7LmDVYacg7" target="_blank" class="btn btn-primary"><i class="fa-icon-map-marker"></i> Carretera Cuautitlán-Tlalnepantla No.1,<br>Col. Loma Bonita, C.P. 54759</a></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="column_attr clearfix mobile_align_center alert alert-success">
								<h6>02</h6>
								<h3>Información de contacto</h3>
								<p>Teléfono: (56) 2011 9180</p>
								<p>E-mail: <a href="mailto:cotizaciones@fluidtec.mx">cotizaciones@fluidtec.mx</a></p>
								<a href="https://wa.me/525620119180" class="btn btn-success"><i class="fa-icon-whatsapp"></i> Cotizar por WhatsApp</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="column_attr clearfix mobile_align_center alert alert-primary">
								<h6>03</h6>
								<h3>Horario de atención</h3>
								<p>Lunes – Viernes: 8AM — 6PM</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" style="padding-top:65px;padding-bottom:65px;background-color:#2029BD">
				<div class="container">
					<div class="row">
						<div class="column_attr clearfix align_center" style="padding:20px 5% 0px;">
							<h3><span style="color:#f7f8fb;">Envíanos un mensaje</span></h3>
							<p><span style="color:#9094de;">Cuéntanos qué necesitas y te enviamos una cotización sin compromiso.</span></p>
							<div id="contactWrapper">
								<div id="contactform">
									<form method="post" action="send_mail.php" id="reused_form">
										<div class="column one-second">
											<input placeholder="Tu nombre" id="name" type="text" name="Name" required maxlength="50">
										</div>
										<div class="column one-second">
											<input placeholder="Tu correo electrónico" id="email" type="email" name="Email" required maxlength="50">
										</div>
										<div class="column one">
											<input placeholder="Empresa (opcional)" id="subject" type="text" name="Subject" maxlength="50">
										</div>
										<div class="column one">
											<textarea placeholder="¿Qué producto o servicio necesitas?" id="message" name="Message" rows="6" maxlength="6000" required></textarea>
										</div>
										<div class="column one">
											<button class="button-primary" id="submit" type="submit">ENVIAR MENSAJE</button>
										</div>
									</form>
									<div id="success_message" style="display:none">
										<h3>¡Mensaje enviado!</h3>
										<p>Nos pondremos en contacto contigo pronto.</p>
									</div>
									<div id="error_message" style="width:100%;height:100%;display:none;">
										<h3>Error</h3> Hubo un problema al enviar el formulario. Intenta de nuevo.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section mcb-section no-margin-h" style="padding-bottom:0">
				<div class="container-fluid" style="padding:0">
					<div class="row no-gutters">
						<div class="col-12">
							<iframe src="https://www.google.com/maps?q=Carr.+Tlalnepantla+-+Cuautitlan+1,+Loma+Bonita,+54759+Cuautitl%C3%A1n+Izcalli,+M%C3%A9x.&output=embed" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php require 'partials/footer.php'; ?>
	</div>
	<?php require 'partials/scripts.php'; ?>