<!DOCTYPE html>
<html lang="en">
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
        <?php if (!isset($_POST["nombre"])) : ?>
            <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="creadmin" id="creadmin" novalidate method="post">
                  <!--<form action= "panel-control.php" name="inisesion" id="sesion" novalidate method="post"> -->
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nombre usuario admin</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre de usuario admin " id="nombre" required data-validation-required-message="Escriba su nombre de usuario.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                         <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email admin</label>
                            <input type="email" class="form-control" name="email" placeholder="Email admin " id="email" required data-validation-required-message="Escriba su nombre de usuario.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Contraseña admin</label>
                            <input type="password" class="form-control" name="password" placeholder="Contraseña admin " id="password" required data-validation-required-message="Escriba su contraseña.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                    <button type="submit" class="btn btn-default col-md-4 col-md-offset-9"">Siguiente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
    <?php else :?>
    <?php
    $userName=$_POST["nombre"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cons="SELECT * FROM usuarios WHERE nombre_usuario = '$userName'  AND password = md5('$password') OR email='$email' " ;
        $result = $connection->query($cons);
        if ($result->num_rows==0) {
        $consulta= "INSERT INTO usuarios (idUsuario,tipo,password,email,nombre_usuario,fecha_registro)
        VALUES (NULL,'admin',md5('$password'),'$email','$userName',sysdate())";
        $result = $connection->query($consulta);
       $cons= "UPDATE `usuarios` SET `idUsuario` = 0
           WHERE `usuarios`.`nombre_usuario` = '$userName'";
          $result = $connection->query($cons);
           if (!$result) {
           echo "error";
        } else {
          //echo "Registro completado";
          header("Refresh:0; url=cuarto.php");
        }
         } else {
          //echo "Ya estás registrado";
          header("Refresh:0; url=cuarto.php");
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
