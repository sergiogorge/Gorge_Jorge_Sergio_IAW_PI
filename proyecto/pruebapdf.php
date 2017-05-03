	<?php
	require("WriteHTML.php");
	  $a=$_GET['id'];

	 $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto_blog2");

	                          if ($connection->connect_errno) {
	                              printf("Connection failed: %s\n", $connection->connect_error);
	                              exit();
	                          }
	                                     if ($result = $connection->query("SELECT *
	                                        FROM noticia  where idnoticia='$a';")) {
	                                             while($obj = $result->fetch_object()) {
	                                             	$pdf=new PDF_HTML();
	                                             	$pdf->AddPage();
	                                             	$pdf->SetFont('Arial','',14);
	                                             	$titular = stripslashes($obj->titular);
													$titular = iconv('UTF-8', 'windows-1252', $titular);
	                                             	$pdf->WriteHTML($titular,'FJ');
	                                             	$pdf->ln(50);
	                                             	$imagen="admin/$obj->image";
	                                             	$pdf->Image($imagen,30,30,-500);
	                                                $pdf->ln(50);
	                                             	$cuerpo = stripslashes($obj->cuerpo);
													$cuerpo = iconv('UTF-8', 'windows-1252', $cuerpo);
	                                             	$pdf->WriteHTML($cuerpo);
	                                             	$pdf->output();
	                                             	}
	                                             }
	?>
