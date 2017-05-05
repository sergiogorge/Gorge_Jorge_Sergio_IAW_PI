<?php
session_start();
if (empty($_GET))
die("Tienes que pasar algun parametro por GET.");
$a = $_GET['id'];
    require_once("../conexionbd.php");   
    if ($result = $connection->query("DELETE FROM comentarios
     where idcomentario='$a'")) {
      echo "El comentario $a ha sido borrado con éxito.<br>";
      header('Location:' . getenv('HTTP_REFERER'));
    } else {
        mysqli_error($connection);
  }
?>
