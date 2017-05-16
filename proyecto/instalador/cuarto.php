<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
?>
<?php
require_once("../conexionbd.php");
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noticias Gorgé</title>

    <?php
    include("selectema.php");
     ?>

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/perrito.jpg') ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Instalador</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <?php if (!isset($_POST["ejemplo"])) : ?>
        <form class="checkclass" name="ejemplos" id="ejemplos" novalidate method="post">
        <div class="checkbox">
        <label><input type="checkbox" name="ejemplo">Datos de ejemplo</label>
        <br>
         <input type="submit" value="Enviar">
        <div id="success"></div>
        <div class="row">
        <button type="submit" class="btn btn-default col-md-5 col-md-offset-6"><a href="../index.php">No quiero ejemplos<a></button>
        </div>
       </form> 
        </div>
        <?php else :?>
            <?php
            $consu="INSERT INTO `categorias` (`idCategoria`, `valor`) VALUES (NULL, 'ejemplo')";
            $result= $connection->query($consu);
                   $cons= "UPDATE `categorias` SET `idCategoria` = 0
           WHERE `categorias`.`valor` = 'ejemplo'";
          $result = $connection->query($cons);
            $consulta=" INSERT INTO `noticia` (`idNoticia`, `titular`, `cuerpo`, `fCreacion`, `fPublicacion`, `fModificacion`, `idUsuario`, `idCategoria`, `image`) VALUES (NULL, 'ejemplo', 'ejemplo', '2000-01-01', '2000-01-01', NULL, '0', '0', '../admin/imagenes/Ejemplo.png')";
            $result = $connection->query($consulta);
            if (!$result) {
                 echo "Query Error";
               var_dump($consulta);
            } else {
              header("Refresh:0; url=../index.php");
          }
            ?>
    <?php endif ?>
    </body>
        <?php
        include("../footer.php");
         ?>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="../js/clean-blog.min.js"></script>


</body>

</html>
<?php
ob_end_flush();
?>
