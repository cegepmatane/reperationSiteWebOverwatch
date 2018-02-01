<?php

include "barre-navigation.php";

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'olivierbeaupre37@gmail.com';
$email_subject = "Nouveau formulaire";
$email_body = "Nouveau message de la part de $name.\n\n $message";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($email_from,$email_subject,$email_body,$headers)
//echo $email_from;
//echo $email_subject;
//echo $email_body;
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Envoi réussi</title>
</head>
<body>
	<h2>Envoi courriel réussi</h2>

</body>
</html>
