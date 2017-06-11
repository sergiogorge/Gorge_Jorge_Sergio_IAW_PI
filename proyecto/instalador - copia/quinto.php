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
        <p style="text-align: center;"><a href="../index.php">No quiero datos de ejemplo</a></p>
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
            $consulta=" INSERT INTO `noticia` (`idNoticia`, `titular`, `cuerpo`, `fCreacion`, `fPublicacion`, `fModificacion`, `idUsuario`, `idCategoria`, `image`) VALUES (NULL, 'ejemplo', 'ejemplo', '2000-01-01', '2000-01-01', NULL, 0, 0, '../admin/imagenes/Ejemplo.jpg')";
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
    <script src=    "../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="../js/clean-blog.min.js"></script>


</body>

</html>
<?php
ob_end_flush();
?>
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
        <p style="text-align: center;"><a href="../index.php">No quiero datos de ejemplo</a></p>
        </div>
       </form>
        </div>
        <?php else :?>
            <?php
            $consu="INSERT INTO `categorias` (`idCategoria`, `valor`) VALUES
(1, 'Nacional'),
(2, 'Internacional'),
(3, 'Deportes'),
(4, 'Tecnologia');
";
            $result= $connection->query($consu);
            $consulta=" INSERT INTO `noticia` (`idNoticia`, `titular`, `cuerpo`, `fCreacion`, `fPublicacion`, `fModificacion`, `idUsuario`, `idCategoria`, `image`) VALUES
(10, 'El sprint de Keylor Navas', 'Keylor Navas se santiguÃ³ al entrar al vestuario el domingo por la noche, antes de recibir el abrazo de todos sus compaÃ±eros. EncontrÃ³ calor tras una noche de rayos y truenos sobre el cÃ©sped del BernabÃ©u. El mismo pÃºblico que le renovÃ³ en la porterÃ­a hace un aÃ±o, frente al Betis le bajÃ³ el pulgar con saÃ±a despuÃ©s del autogol que fabricÃ³ con un chute suave de Sanabria, al comienzo del encuentro. A esas alturas (20 minutos) ya habÃ­a dejado una salida alocada que pudo costarle la roja. Ã‰l, hombre de extremos, acabÃ³ salvando al Real Madrid en el Ãºltimo minuto, con una palomita que valÃ­a el triunfo y el liderato. Â¿LimpiÃ³ esa acciÃ³n su pifia inicial? En el lunes de resaca, ambas jugadas se repetÃ­an en bucle en los resÃºmenes de la jornada. LogrÃ³ quitar algo de foco (y no es sencillo) a Sergio Ramos, el futbolista mÃ¡s encendido de la plantilla.'Somos un equipo muy unido y todos me apoyan bastante', se podÃ­a leer en el Ãºltimo mensaje que colgÃ³ en sus redes sociales. Zinedine Zidane y sus futbolistas defendieron con afÃ¡n a un tipo muy querido y al que detectan en peligro. Combina buen humor, mÃºsica alegre en el mÃ³vil, discurso animoso y un punto de fiereza. Tiene dÃ­as con el cartel de no molestar colgado al pecho. El pasado aÃ±o, no le gustÃ³ el guion de un documental que una importante cadena norteamericana estaba realizando sobre Ã©l y vetÃ³ la cinta. DecidiÃ³ no participar. Pendiente de su familia, icono de Costa Rica, el mÃ¡s religioso de Valdebebas... Cae bien y, al menos hasta ahora, mantenÃ­a una llama milagrera que a todos tranquilizaba. AsÃ­ creciÃ³ la pasada temporada, superada la competencia con Iker Casillas y olvidados los incidentes del 31 de agosto de 2015, cuando estuvo a punto de salir del Madrid camino de Manchester. Aquel fichaje, el de David de Gea, se pudo retomar en junio de 2016, pero la directiva, sensible a la voz de la masa social y a la opiniÃ³n del vestuario, descartÃ³ la operaciÃ³n. Mejor seguir con Keylor. Se lo habÃ­a ganado.', '2017-03-14', '2017-03-14', NULL, 17, 3, 'imagenes/keylor-navas-facebook.jpg'),
(11, 'Zapatero cree que S.DÃ­az â€œreÃºne todas las condicionesâ€ para liderar el PSOE', 'A juicio de JosÃ© Luis RodrÃ­guez Zapatero, la presidenta de AndalucÃ­a reÃºne â€œtodas las condiciones para el liderazgo polÃ­ticoâ€. El expresidente del Gobierno ha reiterado una vez mÃ¡s en pÃºblico su respaldo a la secretaria general de la principal federaciÃ³n socialista, que el 26 de marzo presentarÃ¡ su candidatura a las primarias del PSOE. El respaldo de Zapatero, explicitado en un acto en el CÃ­rculo de Bellas Artes dentro de los trabajos previos para la elaboraciÃ³n de la ponencia marco que los socialistas debatirÃ¡n y aprobarÃ¡n en el 39Âº Congreso del 17 y 18 de junio, es absoluto. â€œCada uno tiene la capacidad que tiene de trabajarâ€, sostuvo Zapatero sobre la posibilidad de que DÃ­az pudiera compatibilizar la secretarÃ­a general del PSOE con el Ejecutivo autonÃ³mico. El dirigente, que ve capacitada a DÃ­az, se puso de ejemplo y recordÃ³ que Ã©l mismo, el Ãºltimo presidente socialista de EspaÃ±a, compaginÃ³ durante sus dos legislaturas en La Moncloa (2004-2011) la mÃ¡xima responsabilidad en Ferraz, que desempeÃ±o de 2000 a 2012.', '2017-03-14', '2017-03-14', '2017-06-05', 17, 1, 'imagenes/zp.jpg'),
(12, 'Fillon, imputado por desvÃ­o de fondos pÃºblicos', 'FranÃ§ois Fillon, el candidato de la derecha a las elecciones presidenciales francesas, fue imputado este martes por desvÃ­o de fondos pÃºblicos y apropiaciÃ³n indebida de bienes sociales. Los jueces han considerado que existen indicios â€œgraves y concordantesâ€ de que el candidato remunerÃ³ a su esposa, Penelope Fillon, como asistente parlamentaria, sin demostrar haber trabajado a cambio del salario.', '2017-03-14', '2017-03-14', NULL, 17, 2, 'imagenes/fillon2.jpg'),
(13, 'La empresa mexicana que quiere participar en el muro de Trump: â€œNo es para traicionar a nadieâ€', 'Theodore Atalla, que tiene una pequeÃ±a empresa de iluminaciÃ³n industrial en Puebla (MÃ©xico), no solo apoya el muro que quiere levantar Donald Trump en la frontera mexicana sino que ha pedido participar en la construcciÃ³n. Ecovelocity es la Ãºnica compaÃ±Ã­a domiciliada en MÃ©xico entre las mÃ¡s de 600 que se han registrado en el proceso de adjudicaciÃ³n de la barrera, un sÃ­mbolo electoral para Trump pero una humillaciÃ³n para el paÃ­s vecino.<br /><br />\r\n'Vimos que estaban empezado con eso y pensamos que Ã­bamos a poder apoyar algo en MÃ©xico', dice en una entrevista telefÃ³nica Atalla, de 58 aÃ±os.<br /><br />\r\nNacido en Egipto, viviÃ³ en Estados Unidos y lleva 22 aÃ±os en MÃ©xico. Tiene nacionalidad egipcia y estadounidense. Tiene la residencia permanente en MÃ©xico y estÃ¡ tramitando la ciudadanÃ­a. Se ve el resto de su vida en el paÃ­s y no considera que su interÃ©s por el muro fronterizo sea una afrenta. Lo percibe como una vÃ­a para 'mejorar' a MÃ©xico. 'No es para traicionar a nadie. Es mÃ¡s, por si nosotros en MÃ©xico necesitamos algo, que se comuniquen con nosotros y los apoyamos', esgrime.', '2017-03-14', '2017-03-14', '2017-05-08', 17, 2, 'imagenes/donald-trump.jpg');
";
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
    <script src=    "../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="../js/clean-blog.min.js"></script>


</body>

</html>
<?php
ob_end_flush();
?>

