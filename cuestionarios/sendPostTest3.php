<?php

$email = 'UNF';
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];

$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];
$answer6 = $_POST['answer6'];
$answer7 = $_POST['answer7'];
$answer8 = $_POST['answer8'];
$answer9 = $_POST['answer9'];
$answer10 = $_POST['answer10'];

$score = $answer1 + $answer2 + $answer3 + $answer4 + $answer5 + $answer6 + $answer7 + $answer8 + $answer9 + $answer10;

$header = 'From: ' . $email . " \r\n";

//$header = 'From: ' . $name . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Nombres son: " . $name . " \r\n";
$message .= "Apellidos son: " . $lastname . " \r\n";
$message .= "Puntaje es: " . $score . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'sejascrespo@unfpa.org';
$asunto = 'Post-Test 3';

mail($para, $asunto, utf8_decode($message), $header);

//header("Location:../meta/Meta.html");
?>
