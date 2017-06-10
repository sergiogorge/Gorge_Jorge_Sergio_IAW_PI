<?php

require_once("../conexionbd.php");

// Consulta que genera los valores de la grafica
$query = "select c.valor, count(n.idCategoria) as num
          from noticia as n, categorias as c
          where n.idCategoria = c.idCategoria
          group by n.idCategoria";
  /*$query="select tipo as valor, count(idUsuario) as num
  from usuarios group by tipo"; */       

// Inicializamos el array
$array = array();

if ($result = $connection->query($query)) {

  // Construimos primero las columnas, estaticas
  $array['cols'] = array();

  $array['cols'][] = array(
    'id' => '',
    'label' => 'categorias',
    'pattern' => '',
    'type' => 'string'
  );

  $array['cols'][] = array(
    'id' => '',
    'label' => 'NumeroCategorias',
    'pattern' => '',
    'type' => 'string'
  );


  // Ahora hacemos las columnas, dinamicas desde la base de datos
  $array['rows'] = array();
  while($obj = $result->fetch_object()) {
    $array['rows'][]['c'] = array(
      array(
        'v' => $obj->valor,
        'f' => null
      ),
      array(
        'v' => $obj->num,
        'f' => null
      )
    );
  };

  unset($obj);
  unset($connection);

  // Devolvemos al ajax el json listo para pintar. JSON_NUMERIC_CHECK es necesario para que los strings numericos los deje como esté y no los converta a string con comillas.
  die(json_encode($array,JSON_NUMERIC_CHECK));
}
?>