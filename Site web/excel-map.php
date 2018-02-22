<?php
	include "barre-navigation.php";
	include "PHPExcel.php";
	include "baseDeDonnees.php";
	include "administration\DAO.php";
	
	$DAO = new DAO();
	
	$map = $DAO->lireMap($basededonnees);
	
	$document = new PHPExcel();
	$document->getActiveSheet()->setCellValue('A1', 'Nom');
	$document->getActiveSheet()->setCellValue('B1', 'Emplacement');
	$document->getActiveSheet()->setCellValue('C1', 'Mode');
	$document->getActiveSheet()->setCellValue('D1', 'Objectifs');
	$document->getActiveSheet()->setCellValue('D1', 'Type');
	
	$ligneNom = 2;
	$ligneEmp = 2;
	$ligneMode = 2;
	$ligneObj = 2;
	$ligneType = 2;
	
	foreach($map as $m)
	{
		$document->getActiveSheet()->setCellValue('A'.$ligneNom, $m->nom);
		$ligneNom = $ligneNom + 1;
	}
	
	foreach($map as $m)
	{
		$document->getActiveSheet()->setCellValue('B'.$ligneEmp, $m->emplacement);
		$ligneEmp = $ligneEmp + 1;
	}
	
	foreach($map as $m)
	{
		$document->getActiveSheet()->setCellValue('C'.$ligneMode, $m->mode);
		$ligneMode = $ligneMode + 1;
	}
	
	foreach($map as $m)
	{
		$document->getActiveSheet()->setCellValue('D'.$ligneObj, $m->objectifs);
		$ligneObj = $ligneObj + 1;
	}
	
	foreach($map as $m)
	{
		$document->getActiveSheet()->setCellValue('D'.$ligneType, $m->type);
		$ligneType = $ligneType + 1;
	}
	
	
	$ecrivain = PHPExcel_IOFactory::createWriter($document, "Excel2007");
	$ecrivain->save("test-excel.xlsx");
	if(file_exists("test-excel.xlsx"))
	{
		echo '<a href="test-excel.xlsx">T&eacute;l&eacute;charger le fichier Excel</a>';	
	}	

?>
