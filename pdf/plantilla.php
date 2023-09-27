<?php

require 'fpdf.php';

class PDF extends FPDF{

	function Header(){
		$this->Image('img/Logo1.png',5,5,30);
		$this->SetFont('Arial','B',15);
		$this->Cell(30);
		$this->Cell(120,20,'Lista de productos',0,0,'C');
		$this->Ln(32);
	}

	function Footer(){
		$this->SetY(-15);//Del final de la pagina 15 hacia arriba
		$this->SetFont('Arial','I',0);
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

//$var = new PDF();
//$var->Output();

?>