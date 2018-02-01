<?php

@mysql_connect("localhost", "root", "");
mysql_select_db("overwatch");


$date = getdate();
$aujourdhui = $date['year'] . "-" . $date['mon'] . "-" . $date['mday'];

// check if user has already rated
$sql = mysql_query("SELECT COUNT(*) AS jour FROM `click` WHERE `date`='" . $aujourdhui . "'");
//$result = $conn->query($sql);
$result = mysql_fetch_array($sql);
//$row = $result->fetch_assoc();
if ($result['jour'] == 0) 
{
    $sql = mysql_query("INSERT INTO `click` (`date`) VALUES ('" . $aujourdhui . "')");
	
} 

$sql = mysql_query("UPDATE `click` SET `nbClicks`=nbClicks + 1 WHERE `date`='" . $aujourdhui . "'");

$sql = mysql_query("SELECT nbClicks AS clicks FROM `click` WHERE `date`='" . $aujourdhui . "'");
$result = mysql_fetch_array($sql);


echo "Le nombre de clicks d'aujourd'hui est de '" . $result['clicks'] . "' ";


?>