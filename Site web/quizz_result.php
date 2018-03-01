<?php
	include "barre-navigation.php";
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="css/decoration.css">
	
</head>

<?php

$answer1 = $_POST['question1'];

$answer2 = $_POST['question2'];

$answer3 = $_POST['question3'];

$answer4 = $_POST['question4'];

$answer5 = $_POST['question5'];

$answer6 = $_POST['question6'];

$answer7 = $_POST['question7'];



$totalCorrect = 0;

if ($answer1 == "A") { $totalCorrect++; }

if ($answer2 == "C") { $totalCorrect++; }

if ($answer3 == "C") { $totalCorrect++; }

if ($answer4 == "D") { $totalCorrect++; }

if ($answer5 == "B") { $totalCorrect++; }

if ($answer6 == "A") { $totalCorrect++; }

if ($answer7 == "B") { $totalCorrect++; }

?>
<h1> Résultat du Quizz </h1>

<?php
echo "<div id='results'>Vous avez répondu à $totalCorrect / 7 question correct!!!</div>";

?>