<?php
require('../libreria/fpdf.php');
require_once("../conexionbd.php");
class PDF extends FPDF
{
//Pie de página
function Footer()
{
$this->SetY(-10);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(50,5,"Tipo",1,0,'C');
$pdf->Cell(50,5,"Email",1,0,'C');
$pdf->Cell(50,5,"Nombre_usuario",1,0,'C');
$pdf->ln();
//Aquí escribimos lo que deseamos mostrar
 if ($result = $connection->query("SELECT *
  FROM usuarios;")) {
 	while($obj = $result->fetch_object()) {
$pdf->Cell(50,5,$obj->tipo,1,0,'C');
$pdf->Cell(50,5,$obj->email,1,0,'C');
$pdf->Cell(50,5,$obj->nombre_usuario,1,0,'C');
$pdf->ln();
}  
}
$pdf->output();
?>