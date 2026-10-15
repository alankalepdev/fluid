<?php

/**
 * Plantilla de configuración SMTP para el formulario de contacto.
 *
 * Copiá este archivo como mail.php (mismo directorio) y completá los
 * valores reales. mail.php NO se versiona (ver .gitignore).
 */

return [
	'host'       => 'smtp.tu-hosting.com',
	'port'       => 465,
	'encryption' => 'ssl', // 'ssl' (puerto 465) o 'tls' (puerto 587)
	'username'   => 'cotizaciones@fluidtec.mx',
	'password'   => '',
	'from_email' => 'cotizaciones@fluidtec.mx',
	'from_name'  => 'Fluidtec México',
	'to_email'   => 'cotizaciones@fluidtec.mx',
	'to_name'    => 'Fluidtec México',
];
