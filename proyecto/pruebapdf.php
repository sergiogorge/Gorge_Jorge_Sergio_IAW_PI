	<?php
	require("libreria/fpdf.php");
	  $a=$_GET['id'];
	 $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto_blog2");

	                          if ($connection->connect_errno) {
	                              printf("Connection failed: %s\n", $connection->connect_error);
	                              exit();
	                          }
	                                     if ($result = $connection->query("SELECT *
	                                        FROM noticia  where idnoticia='$a';")) {
	                                             while($obj = $result->fetch_object()) {
	                                             	$pdf=new FPDF();
	                                             	$pdf->AddPage();
	                                             	$pdf->SetFont('Arial','',14);
	                                             	$titular = stripslashes($obj->titular);
													$titular = iconv('UTF-8', 'windows-1252', $titular);
	                                             	$pdf->MultiCell(0,10,$titular,0,'C');
	                                             	$cuerpo = stripslashes($obj->cuerpo);
													$cuerpo = iconv('UTF-8', 'windows-1252', $cuerpo);
	                                             	$pdf->MultiCell(190,10,$cuerpo,0,"L",false);
	                                             	$pdf->output();
	                                             	}
	                                             }
	?>
