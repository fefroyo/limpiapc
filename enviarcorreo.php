<?php
$nom = $_POST["nombre"];
$mail = $_POST["email"];
$coment = $_POST["comentario"];

$para  = $mail . ', ' . 'efrain206@gmail.com' . ', ' . 'efrain206@yahoo.es';

$asunto = "prueba de correo y con email en HTML";
//$mensaje = "Con nombre de " . $nom . " y " . $mail;
$mensaje = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Este email contiene HTML!</p>
<table>
<tr>
<th>$nom</th>
<th>$mail</th>
</tr>
<tr>
<td>$coment</td>
</tr>
</table>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.= 'From: ' . $para . ', fefro hol.es' . "\r\n";
$headers.= 'Cc: efra206@icloud.com' . "\r\n";
$headers.= 'Bcc: fefro@live.com' . "\r\n";

if(mail($para,$asunto,$mensaje,$headers)){
		echo "Mensaje Enviado ";
		echo "A nombre seguido ->" . $_POST["nombre"]." ".$_POST["email"];
	}
else{
		echo "Error al enviar Mensaje";
	}

?>