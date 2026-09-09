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

	$mail->isHTML(true);
	$mail->Subject = 'Nuevo contacto desde fluidtec.mx' . ($subject !== '' ? ' – ' . $subject : '');
	$mail->Body    = '<p><strong>Nombre:</strong> ' . htmlspecialchars($name) . '</p>'
		. '<p><strong>Correo:</strong> ' . htmlspecialchars($email) . '</p>'
		. ($subject !== '' ? '<p><strong>Empresa:</strong> ' . htmlspecialchars($subject) . '</p>' : '')
		. '<p><strong>Mensaje:</strong><br>' . nl2br(htmlspecialchars($message)) . '</p>';
	$mail->AltBody = "Nombre: $name\nCorreo: $email\n" . ($subject !== '' ? "Empresa: $subject\n" : '') . "Mensaje:\n$message";

	$mail->send();
	respond(true, 'Mensaje enviado.');
} catch (Exception $e) {
	error_log('send_mail.php: ' . $mail->ErrorInfo);
	respond(false, 'Hubo un problema al enviar el formulario. Intenta de nuevo.');
}
