<!--
/* ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
 * Version: 1.0
 * Author: Kniaz Youk
 * License: Creative Commons Attribution 3.0 License
 * Github: https://github.com/kniazyouk
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
-->

<?php

$email = 'UNF';
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$rol = $_POST['rol'];

$header = 'From: ' . $email . " \r\n";

//$header = 'From: ' . $name . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Nombres son: " . $name . " \r\n";
$message .= "Apellidos son: " . $lastname . " \r\n";
$message .= "Edad es: " . $age . " \r\n";
$message .= "Rol en la familia es: " . $_POST['rol'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'sejascrespo@unfpa.org';
$asunto = 'Mensaje de UNF';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:intro.html");
?>
