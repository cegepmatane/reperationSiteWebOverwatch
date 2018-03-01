<?php
	include "barre-navigation.php";
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="css/decoration.css">
	
</head>


<form action="quizz_result.php" method="post" id="quizz">

<li>



<h3>Quel est ce héros?</h3>


<div><img src="images\genji.jpg" style="width:304px;height:228px;"></div>
<div>

<input type="radio" name="question1" id="question-1-answers-A" value="A" />

<label for="question-1-answers-A">A) Genji </label>

</div>

<div>

<input type="radio" name="question1" id="question-1-answers-B" value="B" />

<label for="question-1-answers-B">B) Mcree</label>

</div>

<div>

<input type="radio" name="question1" id="question-1-answers-C" value="C" />

<label for="question-1-answers-C">C) Orisa</label>

</div>

<div>

<input type="radio" name="question1" id="question-1-answers-D" value="D" />

<label for="question-1-answers-D">D) Mercy</label>

</div>




<h3>Quel est la mère de Pharah?</h3>

<div>

<input type="radio" name="question2" id="question-2-answers-A" value="A" />

<label for="question-2-answers-A">A) D.VA </label>

</div>

<div>

<input type="radio" name="question2" id="question-2-answers-B" value="B" />

<label for="question-2-answers-B">B) Moira</label>

</div>

<div>

<input type="radio" name="question2" id="question-2-answers-C" value="C" />

<label for="question-2-answers-C">C) Ana</label>

</div>

<div>

<input type="radio" name="question2" id="question-2-answers-D" value="D" />

<label for="question-2-answers-D">D) Sombra</label>

</div>



<h3>À qui appartient cette habileté</h3>


<div><img src="images\ultdoomfist.png"></div>
<div>

<input type="radio" name="question3" id="question-3-answers-A" value="A" />

<label for="question-3-answers-A">A) Tracer </label>

</div>

<div>

<input type="radio" name="question3" id="question-3-answers-B" value="B" />

<label for="question-3-answers-B">B) Genji</label>

</div>

<div>

<input type="radio" name="question3" id="question-3-answers-C" value="C" />

<label for="question-3-answers-C">C) Doomfist</label>

</div>

<div>

<input type="radio" name="question3" id="question-3-answers-D" value="D" />

<label for="question-3-answers-D">D) Soldier</label>

</div>




<h3>Hanzo est considéré dans quelle position?</h3>

<div>

<input type="radio" name="question4" id="question-4-answers-A" value="A" />

<label for="question-4-answers-A">A) DPS </label>

</div>

<div>

<input type="radio" name="question4" id="question-4-answers-B" value="B" />

<label for="question-4-answers-B">B) Support</label>

</div>

<div>

<input type="radio" name="question4" id="question-4-answers-C" value="C" />

<label for="question-4-answers-C">C) Tank</label>

</div>

<div>

<input type="radio" name="question4" id="question-4-answers-D" value="D" />

<label for="question-4-answers-D">D) Defense</label>

</div>



<h3>Quel héros est le plus jouer dans Overwatch?</h3>

<div>

<input type="radio" name="question5" id="question-5-answers-A" value="A" />

<label for="question-5-answers-A">A) Tracer </label>

</div>

<div>

<input type="radio" name="question5" id="question-5-answers-B" value="B" />

<label for="question-5-answers-B">B) Mercy</label>

</div>

<div>

<input type="radio" name="question5" id="question-5-answers-C" value="C" />

<label for="question-5-answers-C">C) Winston</label>

</div>

<div>

<input type="radio" name="question5" id="question-5-answers-D" value="D" />

<label for="question-5-answers-D">D) Hanzo</label>

</div>



<h3>Quelle est cette map?</h3>

<div><img src="images\Map_Hanamura.jpg" style="width:304px;height:228px;"></div>

<div>

<input type="radio" name="question6" id="question-6-answers-A" value="A" />

<label for="question-6-answers-A">A) Hanamura </label>

</div>

<div>

<input type="radio" name="question6" id="question-6-answers-B" value="B" />

<label for="question-6-answers-B">B) Lunar Horizon</label>

</div>

<div>

<input type="radio" name="question6" id="question-6-answers-C" value="C" />

<label for="question-6-answers-C">C) Volskaya industries</label>

</div>

<div>

<input type="radio" name="question6" id="question-6-answers-D" value="D" />

<label for="question-6-answers-D">D) Temple of Anubis</label>

</div>



<h3>Quelle est la map de Junkrat?</h3>

<div>

<input type="radio" name="question7" id="question-7-answers-A" value="A" />

<label for="question-7-answers-A">A) King's Row</label>

</div>

<div>

<input type="radio" name="question7" id="question-7-answers-B" value="B" />

<label for="question-7-answers-B">B) Junkertown</label>

</div>

<div>

<input type="radio" name="question7" id="question-7-answers-C" value="C" />

<label for="question-7-answers-C">C) Numbani</label>

</div>

<div>

<input type="radio" name="question7" id="question-7-answers-D" value="D" />

<label for="question-7-answers-D">D) Route 66</label>

</div>

<input type="submit" class="button" value="Submit Quizz" />

</li>



</form>