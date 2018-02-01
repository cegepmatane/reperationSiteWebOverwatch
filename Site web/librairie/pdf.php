<?php
	include "../Administration/DAO.php";
	include "../baseDeDonnees.php";
	$DAO = new DAO();
	
	list($map,$listeSkin) = $DAO->afficherMap($basededonnees);
	
	require "fpdf/fpdf.php";
	
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10, $map['nom']);
	$pdf->Cell(100,50, "Emplacement : " . $map['emplacement']);
	$pdf->Cell(100,50, "Mode : " . $map['mode']);
	$pdf->Cell(0,0, "Nbr d'objectifs : " . $map['objectifs']);
	$pdf->Cell(0,100, "Description : " . $map['type']);
	
	$pdf->Output();

