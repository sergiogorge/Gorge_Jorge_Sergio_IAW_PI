<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  require_once("../conexionbd.php");
 if ($_SESSION["tipo"]!=='admin'){
  session_destroy();
  header("Location:error.php");
}
?>

<head>
  <!--Load the AJAX API-->
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <script type="text/javascript">

     // Load the Visualization API and the piechart package.
     google.charts.load('current', {'packages':['corechart']});

     // Set a callback to run when the Google Visualization API is loaded.
     google.charts.setOnLoadCallback(drawChart);
          google.charts.setOnLoadCallback(drawChart2);

     function drawChart() {
       var jsonData = $.ajax({
           url: "getData.php",
           dataType: "json",
           async: false
           }).responseText;

       // Create our data table out of JSON data loaded from server.
       var data = new google.visualization.DataTable(jsonData);

       // Instantiate and draw our chart, passing in some options.
       var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
       chart.draw(data, {width: 400, height: 240});
     }
        function drawChart2() {
       var jsonData = $.ajax({
           url: "getData2.php",
           dataType: "json",
           async: false
           }).responseText;

       // Create our data table out of JSON data loaded from server.
       var data = new google.visualization.DataTable(jsonData);

       // Instantiate and draw our chart, passing in some options.
       var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
       chart.draw(data, {width: 400, height: 240});
     }


     </script>
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


  <?php
    include_once("header.php");
   ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/gatito.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Panel de control</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
      <div class="row">

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <h2>USUARIOS</h2>
                          <?php
                                     $user=$_SESSION['username'];
                                     if ($result = $connection->query("SELECT *
                                        FROM usuarios;")) {
                                          if($result->num_rows==0){
                                            echo "No hay usuarios";
                                          }else{
                                         echo"<table style='border:1px solid black' class='table'>";
                                         echo"<thead>";
                                         echo"<tr>";
                                         //echo"<th>ID </th>";
                                         echo"<th>Tipo </th>";
                                         echo"<th>Email </th>";
                                         echo"<th>Nombre usuario </th>";
                                         echo"<th>Fecha registro </th>";
                                         echo "<th>Borrar</th>";
                                         echo "<th>Editar</th>";
                                         echo"</thead>";
                                             while($obj = $result->fetch_object()) {
                                                 echo "<tr>";
                                          //     echo "<td>".$obj->idUsuario."</td>";
                                                 echo "<td>".$obj->tipo."</td>";
                                                 echo "<td>".$obj->email."</td>";
                                                 echo "<td>".$obj->nombre_usuario."</td>";
                                                 echo "<td>".$obj->fecha_registro."</td>";
                                                 echo "<td>
                                                 <a href='borrar/borrar.php?id=$obj->idUsuario'>
                                                 <i type='submit' class='glyphicon glyphicon-trash' name='borrar'></i></a>
                                                 </td>";
                                                 echo "<td>
                                                 <a href='edituseradmin.php?id=$obj->idUsuario'>
                                                 <i type='submit' class='glyphicon glyphicon-pencil' name='borrar'></i></a>
                                                 </td>";
                                                 echo "</tr>";
                                             }
                                             echo"</table>";
                                           }
                                           }
                                          ?>
                                                                                               <div  id="chart_div2">  </div>

                </div>
                </div>
                </div>
            </div>
        </div>
        </br>

      <div class="container">
        <div class="row">
      </div>
       </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                      <div class="row control-group">
                         <div class="form-group col-xs-12 floating-label-form-group controls">
                              <h2>NOTICIAS</h2>
                              <?php
                              
                                         if ($result = $connection->query("SELECT noticia.*,categorias.*
                                            FROM noticia join categorias on noticia.idcategoria=categorias.idcategoria;")) {
                                              if($result->num_rows==0){
                                                    echo "No hay noticias. <a href=anadirnoticia.php>Añadir una</a> ";
                                                    }else{
                                                    echo"<table style='border:1px solid black' class='table'>";
                                                    echo"<thead>";
                                                    echo"<tr>";
                                                    echo"<th>Titular </th>";
                                                    echo"<th>Fecha Creación </th>";
                                                    echo"<th>Fecha Modificación </th>";
                                                    echo "<th>Categoría</th>";
                                                    echo "<th>Imagen</th>";
                                                    echo "<th>Borrar</th>";
                                                    echo "<th>Editar</th>";
                                                    echo "<th>Editar imagen</th>";
                                                    echo"</thead>";
                                                        while($obj = $result->fetch_object()) {
                                                            echo "<tr>";
                                                            echo "<td><a href='../notcompleta.php?id=$obj->idNoticia'>".$obj->titular."</td>";
                                                            echo "<td>".$obj->fCreacion."</td>";
                                                            echo "<td>".$obj->fModificacion."</td>";
                                                            echo "<td>".$obj->valor."</td>";
                                                            echo '<td><img src="'.$obj->image.'" width=40% /></td>';
                                                            echo "<td>
                                                            <a href='borrar/borrarnot.php?id=$obj->idNoticia'>
                                                            <i type='submit' class='glyphicon glyphicon-trash' name='borrar'></i></a>
                                                            </td>";
                                                          echo "<td>
                                                          <a href='editarnot.php?id=$obj->idNoticia'>
                                                          <i type='submit' class='glyphicon glyphicon-pencil' name='borrar'></i></a>
                                                          </td>";
                                                          echo "<td>
                                                          <a href='editarfoto.php?id=$obj->idNoticia'>
                                                          <i type='submit' class='glyphicon glyphicon-pencil' name='borrar'></i></a>
                                                          </td>";
                                                            echo "</tr>";
                                                        }
                                                         echo"</table>";
                                                        }

                                                      }
                                                     ?>
                                                     <div  id="chart_div">  </div>
                                 </div>
                               </div>
                               </div>
                       </div>
                   </div>

            </br>

                  <div class="container">
                    <div class="row">
                   </div>
                   </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                  <div class="row control-group">
                                     <div class="form-group col-xs-12 floating-label-form-group controls">
                                          <h2>CATEGORIAS</h2>
                                          <?php
                                          $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto_blog2");
                                          if ($connection->connect_errno) {
                                              printf("Connection failed: %s\n", $connection->connect_error);
                                              exit();
                                          }
                                          $user=$_SESSION['username'];
                                                if ($result = $connection->query("SELECT * FROM
                                                  categorias;")) {
                                                    if($result->num_rows==0){
                                                     echo "No hay categorías. <a href=anadircategoria2.php>Añadir una</a> ";
                                                     }else{
                                                    echo"<table style='border:1px solid black' class='table''>";
                                                    echo"<thead>";
                                                    echo"<tr>";
                                                    echo "<th>Categoría</th>";
                                                    echo"<th>Insertar</th>";
                                                    echo "<th>Borrar</th>";
                                                   echo"</thead>";
                                                        while($obj = $result->fetch_object()) {
                                                            echo "<tr>";
                                                            echo "<td>".$obj->valor."</td>";
                                                            echo "<td>
                                                            <a href='anadircategoria2.php'>
                                                            <i type='submit' class='glyphicon glyphicon-plus' name='borrar'></i></a>
                                                            </td>";
                                                            echo "<td>
                                                            <a href='borrar/borrarcat.php?id=$obj->idCategoria'>
                                                            <i type='submit' class='glyphicon glyphicon-trash' name='borrar'></i></a>
                                                            </td>";
                                                            echo "</tr>";
                                                        }
                                                            echo"</table>";

                                                        }
                                                      }

                                                     ?>
                                 </div>
                               </div>
                               </div>
                       </div>
                   </div>
                        </br>

                              <div class="container">
                                <div class="row">
                               </div>
                               </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                              <div class="row control-group">
                                                 <div class="form-group col-xs-12 floating-label-form-group controls">
                                                      <h2>VALORACIONES</h2>
                                                      <?php
                                                     

                                                                 if ($result = $connection->query("SELECT valoraciones.idvaloracion,
                                                                   valoraciones.nota as valoracion,valoraciones.fvaloracion, noticia.titular,usuarios.nombre_usuario
                                                                    FROM valoraciones join noticia on valoraciones.idnoticia=noticia.idnoticia join usuarios on
                                                                    valoraciones.idusuario=usuarios.idusuario order by fvaloracion;")) {
                                                                      if ($result->num_rows==0) {
                                                                       echo"No hay valoraciones";
                                                                     }else{
                                                                      while($obj = $result->fetch_object()) {
                                                                     echo"<table style='border:1px solid black'>";
                                                                     echo"<thead>";
                                                                     echo"<tr>";
                                                                     echo"<th>Noticia </th>";
                                                                     echo"<th>Valoracion</th>";
                                                                    echo"<th>Usuario</th>";
                                                                    echo"<th>Fecha Valoracion</th>";
                                                                    echo"<th>Borrar Valoracion</th>";
                                                                    echo"</thead>";
                                                                             echo "<tr>";
                                                                             echo "<td>".$obj->titular."</td>";
                                                                             echo "<td>".$obj->valoracion."</td>";
                                                                             echo "<td>".$obj->nombre_usuario."</td>";
                                                                             echo "<td>".$obj->fvaloracion."</td>";
                                                                             echo "<td>
                                                                             <a href='borrar/borrarval2.php?id=$obj->idvaloracion'>
                                                                             <i type='submit' class='glyphicon glyphicon-trash' name='borrar'></i></a>
                                                                             </td>";
                                                                             echo "</tr>";
                                                                             echo"</table>";
                                                        /*          echo"<p>Resetear valoraciones<a href='borrarval.php?id=$obj->idValoracion'>
                                                                                   <i type='submit' class='glyphicon glyphicon-trash' name='borrar'></i></a></p>";*/

                                                                         }
                                                                       }
                                                                      

                                                                       }

                                                                      ?>
                                                  </div>
                                                </div>
                                                </div>
                                              </div>
                                        </div>
                                    </br>


<?php
  include("footeradmin.php");
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
