<?php
    if (isset($_SESSION["tipo"])){
     $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto_blog2");
            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                    exit();
                    }
                     $user=$_SESSION["id"];
                  $cons= "select tema from usuarios where idUsuario=$user";
                  if ($result = $connection->query($cons)){
          while($obj = $result->fetch_object()){
       echo'<link rel="stylesheet" href="../vendor/bootstrap/css/'.$obj->tema.'.css" type="text/css" media="screen" />';
       echo'<link href="../css/'.$obj->tema.'.css" rel="stylesheet">';
     }
     }
        } else{
        echo'<link rel="stylesheet" href="vendor/bootstrap/css/Predeterminado.css" type="text/css" media="screen" />';
        echo'<link href="css/Predeterminado.css" rel="stylesheet">';


                                                         }

                                                   ?>
