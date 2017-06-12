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
            $consu="INSERT INTO `categorias` (`idCategoria`, `valor`) VALUES (1, 'Nacional'),(2,'Internacional'),(3,'Deportes'),(4,'Tecnologia')";
            $result= $connection->query($consu);
            $consulta="INSERT INTO `noticia` (`idNoticia`, `titular`, `cuerpo`, `fCreacion`, `fPublicacion`, `fModificacion`, `idUsuario`, `idCategoria`, `image`) VALUES (1, 'El Sprint de Keylor Navas', 'Keylor Navas se santiguó al entrar al vestuario el domingo por la noche, antes de recibir el abrazo de todos sus compañeros. Encontró calor tras una noche de rayos y truenos sobre el césped del Bernabéu. El mismo público que le renovó en la portería hace un año, frente al Betis le bajó el pulgar con saña después del autogol que fabricó con un chute suave de Sanabria, al comienzo del encuentro. A esas alturas (20 minutos) ya había dejado una salida alocada que pudo costarle la roja. Él, hombre de extremos, acabó salvando al Real Madrid en el último minuto, con una palomita que valía el triunfo y el liderato. ¿Limpió esa acción su pifia inicial? En el lunes de resaca, ambas jugadas se repetían en bucle en los resúmenes de la jornada. Logró quitar algo de foco (y no es sencillo) a Sergio Ramos, el futbolista más encendido de la plantilla.“Somos un equipo muy unido y todos me apoyan bastante”, se podía leer en el último mensaje que colgó en sus redes sociales. Zinedine Zidane y sus futbolistas defendieron con afán a un tipo muy querido y al que detectan en peligro. Combina buen humor, música alegre en el móvil, discurso animoso y un punto de fiereza. Tiene días con el cartel de no molestar colgado al pecho. El pasado año, no le gustó el guion de un documental que una importante cadena norteamericana estaba realizando sobre él y vetó la cinta. Decidió no participar. Pendiente de su familia, icono de Costa Rica, el más religioso de Valdebebas... Cae bien y, al menos hasta ahora, mantenía una llama milagrera que a todos tranquilizaba. Así creció la pasada temporada, superada la competencia con Iker Casillas y olvidados los incidentes del 31 de agosto de 2015, cuando estuvo a punto de salir del Madrid camino de Manchester. Aquel fichaje, el de David de Gea, se pudo retomar en junio de 2016, pero la directiva, sensible a la voz de la masa social y a la opinión del vestuario, descartó la operación. Mejor seguir con Keylor. Se lo había ganado.', '2017-03-14', '2017-03-14', NULL, 0, 3, '../admin/imagenes/keylor-navas-facebook.jpg'),
            (2, 'Zapatero cree que S.Díaz “reúne todas las condiciones” para liderar el PSOE
','A juicio de José Luis Rodríguez Zapatero, la presidenta de Andalucía reúne “todas las condiciones para el liderazgo político”. El expresidente del Gobierno ha reiterado una vez más en público su respaldo a la secretaria general de la principal federación socialista, que el 26 de marzo presentará su candidatura a las primarias del PSOE. El respaldo de Zapatero, explicitado en un acto en el Círculo de Bellas Artes dentro de los trabajos previos para la elaboración de la ponencia marco que los socialistas debatirán y aprobarán en el 39º Congreso del 17 y 18 de junio, es absoluto. “Cada uno tiene la capacidad que tiene de trabajar”, sostuvo Zapatero sobre la posibilidad de que Díaz pudiera compatibilizar la secretaría general del PSOE con el Ejecutivo autonómico. El dirigente, que ve capacitada a Díaz, se puso de ejemplo y recordó que él mismo, el último presidente socialista de España, compaginó durante sus dos legislaturas en La Moncloa (2004-2011) la máxima responsabilidad en Ferraz, que desempeño de 2000 a 2012.', '2017-03-14', '2017-03-14',NULL, 0, 1, '../admin/imagenes/zp.jpg'),
            (3, 'Fillon, imputado por desvío de fondos públicos
','François Fillon, el candidato de la derecha a las elecciones presidenciales francesas, fue imputado este martes por desvío de fondos públicos y apropiación indebida de bienes sociales. Los jueces han considerado que existen indicios “graves y concordantes” de que el candidato remuneró a su esposa, Penelope Fillon, como asistente parlamentaria, sin demostrar haber trabajado a cambio del salario.', '2017-03-14', '2017-03-14', NULL, 0, 2, '../admin/imagenes/fillon2.jpg'),
            (4, 'La empresa mexicana que quiere participar en el muro de Trump: “No es para traicionar a nadie”', 'Theodore Atalla, que tiene una pequeña empresa de iluminación industrial en Puebla (México), no solo apoya el muro que quiere levantar Donald Trump en la frontera mexicana sino que ha pedido participar en la construcción. Ecovelocity es la única compañía domiciliada en México entre las más de 600 que se han registrado en el proceso de adjudicación de la barrera, un símbolo electoral para Trump pero una humillación para el país vecino.<br>
Vimos que estaban empezado con eso y pensamos que íbamos a poder apoyar algo en México”, dice en una entrevista telefónica Atalla, de 58 años.<br>
Nacido en Egipto, vivió en Estados Unidos y lleva 22 años en México. Tiene nacionalidad egipcia y estadounidense. Tiene la residencia permanente en México y está tramitando la ciudadanía. Se ve el resto de su vida en el país y no considera que su interés por el muro fronterizo sea una afrenta. Lo percibe como una vía para “mejorar” a México. “No es para traicionar a nadie. Es más, por si nosotros en México necesitamos algo, que se comuniquen con nosotros y los apoyamos”, esgrime.', '2017-03-14', '2017-03-14', '2017-05-08', 0, 2, '../admin/imagenes/muro.jpg');";

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
