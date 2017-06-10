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
    if ($result = $connection->query("DELETE FROM comentarios
     where idcomentario='$a'")) {
      echo "El comentario $a ha sido borrado con éxito.<br>";
      header("Location: ../paneladmin.php");
    } else {
        mysqli_error($connection);
  }
 unset($obj);
 unset($connection);
?>
