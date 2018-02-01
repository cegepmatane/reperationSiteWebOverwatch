<?php
	include "barre-navigation.php";
	include "PHPExcel.php";
	include "baseDeDonnees.php";
	include "administration\DAO.php";
	include ("clicks.php");
	
	$DAO = new DAO();
	
	$hero = $DAO->lireHero($basededonnees);
	
	$document = new PHPExcel();
	$document->getActiveSheet()->setCellValue('A1', 'Nom');
	$document->getActiveSheet()->setCellValue('B1', 'Sex');
	$document->getActiveSheet()->setCellValue('C1', 'Rôle');
	$document->getActiveSheet()->setCellValue('D1', 'Difficulté');
	
	$ligneNom = 2;
	$ligneSex = 2;
	$ligneRole = 2;
	$ligneDiff = 2;
	
	foreach($hero as $h)
	{
		$document->getActiveSheet()->setCellValue('A'.$ligneNom, $h->nom);
		$ligneNom = $ligneNom + 1;
	}
	
	foreach($hero as $h)
	{
		$document->getActiveSheet()->setCellValue('B'.$ligneSex, $h->sex);
		$ligneSex = $ligneSex + 1;
	}
	
	foreach($hero as $h)
	{
		$document->getActiveSheet()->setCellValue('C'.$ligneRole, $h->role);
		$ligneRole = $ligneRole + 1;
	}
	
	foreach($hero as $h)
	{
		$document->getActiveSheet()->setCellValue('D'.$ligneDiff, $h->difficulty);
		$ligneDiff = $ligneDiff + 1;
	}
	
	
	$ecrivain = PHPExcel_IOFactory::createWriter($document, "Excel2007");
	$ecrivain->save("test-excel.xlsx");
	if(file_exists("test-excel.xlsx"))
	{
		echo '<a href="test-excel.xlsx">T&eacute;l&eacute;charger le fichier Excel</a>';	
	}	

?>
