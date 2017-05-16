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
<?php
$nombre=$_POST["nombrebd"];
$ip=$_POST["ip"];
$nombreusu=$_POST["nombre"];
$pass=$_POST["password"];
      $consulta= "create database $nombre;";
       $result = $connection->query($consulta);
         if (!$result) {
                 echo "Query Error";
               var_dump($consulta);
            }

            $consulta2="CREATE TABLE $nombre.categorias (
  idCategoria int(5) NOT NULL,
  valor varchar(255) NOT NULL
);";    
           $result = $connection->query($consulta2);
              if (!$result) {
                 echo "Query Error";
               var_dump($consulta2);
            }
     $consulta3="CREATE TABLE $nombre.comentarios (
  idComentario int(11) NOT NULL,
  idNoticia int(11) NOT NULL,
  idUsuario int(11) NOT NULL,
  comentario text NOT NULL,
  fCreacionC date NOT NULL
);";
     $result = $connection->query($consulta3);
              if (!$result) {
                 echo "Query Error";
               var_dump($consulta3);
            }
   $consulta4="CREATE TABLE $nombre.noticia (
  idNoticia int(11) NOT NULL ,
  titular varchar(255) NOT NULL,
  cuerpo text NOT NULL,
  fCreacion date NOT NULL,
  fPublicacion date NOT NULL,
  fModificacion date DEFAULT NULL,
  idUsuario int(11) NOT NULL,
  idCategoria int(5) NOT NULL,
  image varchar(255) NOT NULL
);";
   
    $result = $connection->query($consulta4);
              if (!$result) {
                 echo "Query Error";
               var_dump($consulta4);
            }         

    $consulta5="CREATE TABLE $nombre.usuarios (
  idUsuario int(11) NOT NULL,
  tipo enum('admin','comun') NOT NULL,
  password varchar(50) NOT NULL,
  email varchar(255) NOT NULL,
  nombre_usuario varchar(50) NOT NULL,
  fecha_registro date NOT NULL,
  tema varchar(255) DEFAULT 'Predeterminado'
);";

     $result = $connection->query($consulta5);
              if (!$result) {
                 echo "Query Error";
               var_dump($consulta5);
            }        
$consulta6="CREATE TABLE $nombre.valoraciones (
  idValoracion int(11) NOT NULL,
  idNoticia int(11) NOT NULL,
  idUsuario int(11) NOT NULL,
  nota int(2) DEFAULT NULL,
  fValoracion date NOT NULL
);";

        $result = $connection->query($consulta6);
              if (!$result) {
                 echo "Query Error";
               var_dump($consulta6);
            }     
   $alter1="ALTER TABLE $nombre.categorias
  ADD PRIMARY KEY (idCategoria);";
             $result = $connection->query($alter1);
              if (!$result) {
                 echo "Query Error";
               var_dump($alter1);
            }     
    $alter2="ALTER TABLE $nombre.comentarios
  ADD PRIMARY KEY (idComentario),
  ADD KEY idNoticia (idNoticia),
  ADD KEY idUsuario (idUsuario);";    
            $result = $connection->query($alter2);
              if (!$result) {
                 echo "Query Error";
               var_dump($alter2);
            }      
    $alter3="ALTER TABLE $nombre.noticia
  ADD PRIMARY KEY (idNoticia),
  ADD KEY idUsuario (idUsuario),
  ADD KEY idCategoria (idCategoria);";
         $result = $connection->query($alter3);
              if (!$result) {
                 echo "Query Error";
               var_dump($alter3);
            }      
   $alter4="ALTER TABLE $nombre.usuarios
   ADD PRIMARY KEY (idUsuario);";
         $result = $connection->query($alter4);
              if (!$result) {
                 echo "Query Error";
               var_dump($alter4);
            }      

   $alter5="ALTER TABLE $nombre.valoraciones
  ADD PRIMARY KEY (idValoracion),
  ADD KEY idNoticia (idNoticia),
  ADD KEY idUsuario (idUsuario);";
         $result = $connection->query($alter5);
              if (!$result) {
                 echo "Query Error";
               var_dump($alter5);
            }                        
    $autoin1="ALTER TABLE $nombre.categorias
      MODIFY idCategoria int(5) NOT NULL AUTO_INCREMENT;";    
            $result = $connection->query($autoin1);
              if (!$result) {
                 echo "Query Error";
               var_dump($autoin1);
            }            

    $autoin2="ALTER TABLE $nombre.comentarios
  MODIFY idComentario int(11) NOT NULL AUTO_INCREMENT;";
          $result = $connection->query($autoin2);
              if (!$result) {
                 echo "Query Error";
               var_dump($autoin2);
            }       

     $autoin3="ALTER TABLE $nombre.noticia
  MODIFY idNoticia int(11) NOT NULL AUTO_INCREMENT;";
            $result = $connection->query($autoin3);
              if (!$result) {
                 echo "Query Error";
               var_dump($autoin3);
            }              

      $autoin4="ALTER TABLE $nombre.usuarios
  MODIFY idUsuario int(11) NOT NULL AUTO_INCREMENT;";
            $result = $connection->query($autoin4);
              if (!$result) {
                 echo "Query Error";
               var_dump($autoin4);
            }
      $autoin5="ALTER TABLE $nombre.valoraciones
  MODIFY idValoracion int(11) NOT NULL AUTO_INCREMENT;";
            $result = $connection->query($autoin5);
              if (!$result) {
                 echo "Query Error";
               var_dump($autoin5);
            }                          
$fk1="ALTER TABLE $nombre.comentarios
  ADD CONSTRAINT comentarios_ibfk_1 FOREIGN KEY (idNoticia) REFERENCES noticia (idNoticia) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT comentarios_ibfk_2 FOREIGN KEY (idUsuario) REFERENCES usuarios (idUsuario) ON DELETE CASCADE ON UPDATE CASCADE;";
          $result = $connection->query($fk1);
              if (!$result) {
                 echo "Query Error";
               var_dump($fk1);
            }         
$fk2="ALTER TABLE $nombre.noticia
  ADD CONSTRAINT noticia_ibfk_1 FOREIGN KEY (idUsuario) REFERENCES usuarios (idUsuario) ON DELETE CASCADE,
  ADD CONSTRAINT noticia_ibfk_2 FOREIGN KEY (idCategoria) REFERENCES categorias (idCategoria) ON DELETE CASCADE ON UPDATE CASCADE;";
               $result = $connection->query($fk2);
              if (!$result) {
                 echo "Query Error";
               var_dump($fk2);
            } 

$fk3="ALTER TABLE $nombre.valoraciones
  ADD CONSTRAINT valoraciones_ibfk_1 FOREIGN KEY (idNoticia) REFERENCES noticia (idNoticia) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT valoraciones_ibfk_2 FOREIGN KEY (idUsuario) REFERENCES usuarios (idUsuario);";
               $result = $connection->query($fk3);
              if (!$result) {
                 echo "Query Error";
               var_dump($fk3);
            }else{
                          header("Refresh:0; url=cuarto.php");
            }      
                
?>

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
