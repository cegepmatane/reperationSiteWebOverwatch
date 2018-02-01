<?php
	include "../Administration/DAO.php";
	include "../baseDeDonnees.php";
	$DAO = new DAO();
	
	list($heros,$listeHabilite) = $DAO->afficherHero($basededonnees);
	
	require "fpdf/fpdf.php";
	
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10, $heros['nom']);
	$pdf->Cell(100,50, "Sex : " . $heros['sex']);
	$pdf->Cell(100,50, "Role : " . $heros['role']);
	$pdf->Cell(0,0, "Difficulty : " . $heros['difficulty']);
	
	$pdf->Output();

