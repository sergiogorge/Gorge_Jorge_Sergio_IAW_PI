<?php
if ($_SESSION["tipo"]!=='admin'){
  session_destroy();
  header("Location:../error.php");
}
session_start();
require_once("../../conexionbd.php");
if (empty($_GET))
die("Tienes que pasar algun parametro por GET.");
$a = $_GET['id'];
    if ($result = $connection->query("DELETE FROM valoraciones
     where idvaloracion='$a'")) {
      echo "Las valoraciones han sido borradas con éxito.<br>";
      header('Location:' . getenv('HTTP_REFERER'));
    } else {
        mysqli_error($connection);
  }
 unset($obj);
 unset($connection);
?>
