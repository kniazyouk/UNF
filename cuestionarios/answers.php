<?php

$email = 'UNF';
$nameT1 = $_POST['nameT1'];
$lastnameT1 = $_POST['lastnameT1'];

/*
$field3 = $_POST['field3'];
$field4 = $_POST['field4'];
$field5 = $_POST['field5'];
$field6 = $_POST['field6'];
$field7 = $_POST['field7'];
$field8 = $_POST['field8'];
$field9 = $_POST['field9'];
$field10 = $_POST['field10'];
*/
$header = 'From: ' . $email . " \r\n";

//$header = 'From: ' . $name . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Nombres: " . $nameT1 . " \r\n";
$message .= "Apellidos: " . $lastnameT1 . " \r\n";

/*
$message .= "Respuesta 2: " . $field2 . " \r\n";
$message .= "Respuesta 3: " . $field3 . " \r\n";
*/

$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'kniazyouk@gmail.com';
$asunto = 'Pre-Test 1';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: '#' ");
?>
