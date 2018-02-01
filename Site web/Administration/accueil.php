<?php

	include "barre-navigation.php";
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	
	<style>
	*{
		padding = 0;
		margin = 0;
		
        
        
	}
	h1{
		text-align: center;
	}
	
	#divdate{
	
		width:270px;
		padding:5px;
		border:3px solid black;
		
		font-size: 20px;
	}
	#decompte{
		font-weight:bold;
	}
	
	

	</style>
	
</head>
<body>



<h1>Page d'accueil</h1>

<div id="divdate">
<p id="date">
<?php
date_default_timezone_set('America/New_York');
$date = date("d-m-Y H:i:s");
echo "Date : $date";


$jours = ceil((strtotime("4/1/2017") - time())/(60*60*24));

$s='';
if ($jours!=1) {
     $s='s';
}


?>
</p>
<p id="decompte">
<?php
echo $jours. " jour$s avant le premier avril!";
?>
</p>
</div>



</body>
</html>
