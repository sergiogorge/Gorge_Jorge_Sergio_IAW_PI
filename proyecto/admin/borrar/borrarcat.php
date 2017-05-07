<?php
session_start();
require_once("../../conexionbd.php");
if ($_SESSION["tipo"]!=='admin'){
   session_destroy();
    header("Location:../error.php");
  }
if (empty($_GET))
die("Tienes que pasar algun parametro por GET.");
$a = $_GET['id'];
$imagen="";

   if ($result = $connection->query("SELECT noticia.* FROM noticia join categorias on noticia.idcategoria=categorias.idcategoria where categorias.idcategoria=$a;")) {
     while ($obj = $result->fetch_object()) {
       $imagen="../$obj->image";
       unlink($imagen);
     }
  }else{
    echo "error de consulta";
    exit();
  }

  if ($result = $connection->query("DELETE FROM categorias where idcategoria=$a;")) {
        echo "La categoria ha sido borrada con éxito.<br>";
        header("Location: ../paneladmin.php");
       } else {
           mysqli_error($connection);
      }
 $result->close();
 unset($obj);
 unset($connection);
?>
