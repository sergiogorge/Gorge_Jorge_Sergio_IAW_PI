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
if ($result = $connection->query("SELECT noticia.* FROM noticia where idnoticia=$a;")) {
           $obj = $result->fetch_object();
           //var_dump($obj);
           $imagen="../$obj->image";

    }

if ($result = $connection->query("DELETE FROM noticia where idnoticia=$a")) {
      unlink($imagen);
      echo "La noticia ha sido borrada con éxito.<br>";
    header("Location: ../paneladmin.php");
    } else {
        mysqli_error($connection);
  }
 unset($obj);
 unset($connection);
?>
