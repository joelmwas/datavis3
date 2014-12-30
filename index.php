<?php 
require("fpdf/fpdf.php");
$pdf=new FPDF();

$pdf->Addpage();
$pdf->SetFont("Arial","B","20");
$pdf->Cell(0,10,"HELLO WORLD",1,1,"C");
$pdf->Output();


?>