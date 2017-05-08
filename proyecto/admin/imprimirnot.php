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
//Aquí escribimos lo que deseamos mostrar
$pdf->Cell(55,10,"Titular",1,0,'C');
$pdf->Cell(55,10,"FPublicacion",1,0,'C');
$pdf->Cell(55,10,"FModificacion",1,0,'C');
$pdf->Cell(8,10,"Cat",1,0,'C');
$pdf->ln();
 if ($result = $connection->query("SELECT noticia.*,categorias.*
                                            FROM noticia join categorias on noticia.idcategoria=categorias.idcategoria;")) {
 	while($obj = $result->fetch_object()) {
$titular = stripslashes($obj->titular);
$titular = iconv('UTF-8', 'windows-1252', $titular);
$pdf->Cell(55,10,substr($titular,0,20).'...',1,0,'C');
$pdf->Cell(55,10,$obj->fCreacion,1,0,'C');
$pdf->Cell(55,10,$obj->fModificacion,1,0,'C');
$pdf->Cell(8,10,substr($obj->valor,0,3),1,0,'C');
$pdf->ln();
}  
}
$pdf->output();
?>