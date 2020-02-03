

<?php

$nom = $_POST[nombre];
$email = $_POST[email];
$coment = $_POST[coment];

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$para  = $email . ', ' . 'efrain206@gmail.com' . ', ';
$para .= 'efrain206@yahoo.es';

$asunto = "Contacto desde el sitio web";

$mensaje = "con Nombre : $_POST[nombre]
		email : $_POST[email]
		comentario : $_POST[coment]";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$para."\r\n".
			'Reply-To: '.$para."\r\n" .
			'X-Mailer: PHP/' . phpversion();

mail($para,$asunto,$mensaje,$headers);
	
print("<h1>Hola ,<strong>$nom $email</strong></h1>");
echo "¡El formulario se ha enviado con éxito!";

?>