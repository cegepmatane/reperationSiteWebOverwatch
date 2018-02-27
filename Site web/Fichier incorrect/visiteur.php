<?php

$ipaddress = md5($_SERVER['REMOTE_ADDR']); // here I am taking IP as UniqueID but you can have user_id from Database or SESSION

@mysql_connect("localhost", "root", "");
mysql_select_db("overwatch");
/*$servername = "localhost"; // Server details
$username = "root";
$password = "";
$dbname = "overwatch";*/


/*$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Unable to connect Server: " . $conn->connect_error);
}*/

// check if user has already rated
$sql = mysql_query("SELECT COUNT(*) AS nbr FROM `visiteur` WHERE `code`='" . $ipaddress . "'");
//$result = $conn->query($sql);
$result = mysql_fetch_array($sql);
//$row = $result->fetch_assoc();
if ($result['nbr'] == 0) 
{
    $sql = mysql_query("INSERT INTO `visiteur` (`code`) VALUES ('" . $ipaddress . "')");
	
} 

$sql = mysql_query("SELECT COUNT(*) AS nbr FROM `visiteur`");
$result = mysql_fetch_array($sql);

echo "Le nombre de visiteurs uniques est de '" . $result['nbr'] . "' ";

//$conn->close();
?>