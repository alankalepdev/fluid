<?php

header('Content-Type: application/json; charset=utf-8');

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function respond(bool $success, string $message): void {
	http_response_code($success ? 200 : 400);
	echo json_encode(['success' => $success, 'message' => $message], JSON_UNESCAPED_UNICODE);
	exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	respond(false, 'Método no permitido.');
}

// Honeypot: campo oculto que un humano nunca completa.
if (!empty($_POST['website'] ?? '')) {
	respond(true, 'Mensaje enviado.');
}

$name    = trim($_POST['Name'] ?? '');
$email   = trim($_POST['Email'] ?? '');
$subject = trim($_POST['Subject'] ?? '');
$message = trim($_POST['Message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
	respond(false, 'Completa los campos requeridos.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	respond(false, 'El correo electrónico no es válido.');
}
if (mb_strlen($name) > 50 || mb_strlen($subject) > 50 || mb_strlen($message) > 6000) {
	respond(false, 'Uno de los campos excede el largo permitido.');
}

$configFile = __DIR__ . '/config/mail.php';
if (!is_file($configFile)) {
	respond(false, 'El formulario no está configurado. Contacta al administrador.');
}
$config = require $configFile;

$mail = new PHPMailer(true);
try {
	$mail->isSMTP();
	$mail->Host       = $config['host'];
	$mail->SMTPAuth   = true;
	$mail->Username   = $config['username'];
	$mail->Password   = $config['password'];
	$mail->SMTPSecure = $config['encryption'] === 'tls' ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
	$mail->Port       = $config['port'];
	$mail->CharSet    = 'UTF-8';

	$mail->setFrom($config['from_email'], $config['from_name']);
	$mail->addAddress($config['to_email'], $config['to_name']);
	$mail->addReplyTo($email, $name);

	$row = function (string $label, string $value) : string {
		return '<tr>'
			. '<td style="padding:14px 0;border-bottom:1px solid #e7e9ee;font:14px Arial,Helvetica,sans-serif;color:#8b8f9c;width:120px;vertical-align:top;">' . $label . '</td>'
			. '<td style="padding:14px 0;border-bottom:1px solid #e7e9ee;font:14px Arial,Helvetica,sans-serif;color:#1c1e21;vertical-align:top;">' . $value . '</td>'
			. '</tr>';
	};

	$mail->isHTML(true);
	$mail->Subject = 'Nuevo contacto desde fluidtec.mx' . ($subject !== '' ? ' – ' . $subject : '');
	$mail->Body    = '<div style="background-color:#f2f3f7;padding:32px 16px;font-family:Arial,Helvetica,sans-serif;">'
		. '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px;margin:0 auto;background:#ffffff;border-radius:8px;overflow:hidden;">'
			. '<tr><td style="background:linear-gradient(135deg,#2029BD 0%,#4ED199 100%);background-color:#2029BD;padding:24px 32px;">'
				. '<span style="font-size:18px;font-weight:bold;color:#ffffff;">Fluidtec México</span><br>'
				. '<span style="font-size:13px;color:#dfe1fa;">Nuevo mensaje desde el formulario de contacto</span>'
			. '</td></tr>'
			. '<tr><td style="padding:8px 32px 32px 32px;">'
				. '<table role="presentation" width="100%" cellpadding="0" cellspacing="0">'
					. $row('Nombre', htmlspecialchars($name))
					. $row('Correo', '<a href="mailto:' . htmlspecialchars($email) . '" style="color:#2029BD;text-decoration:none;">' . htmlspecialchars($email) . '</a>')
					. ($subject !== '' ? $row('Empresa', htmlspecialchars($subject)) : '')
				. '</table>'
				. '<p style="font:14px Arial,Helvetica,sans-serif;color:#8b8f9c;margin:24px 0 8px;">Mensaje</p>'
				. '<div style="font:14px/1.6 Arial,Helvetica,sans-serif;color:#1c1e21;background:#f7f8fb;border-radius:6px;padding:16px;white-space:pre-wrap;">' . nl2br(htmlspecialchars($message)) . '</div>'
			. '</td></tr>'
			. '<tr><td style="padding:16px 32px;background:#f7f8fb;">'
				. '<span style="font:12px Arial,Helvetica,sans-serif;color:#a5a9b6;">Enviado desde el formulario de contacto de fluidtec.mx</span>'
			. '</td></tr>'
		. '</table>'
	. '</div>';
	$mail->AltBody = "Nombre: $name\nCorreo: $email\n" . ($subject !== '' ? "Empresa: $subject\n" : '') . "Mensaje:\n$message";

	$mail->send();
	respond(true, 'Mensaje enviado.');
} catch (Exception $e) {
	error_log('send_mail.php: ' . $mail->ErrorInfo);
	respond(false, 'Hubo un problema al enviar el formulario. Intenta de nuevo.');
}
