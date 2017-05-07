
<div class="col-lg-1">
  <div class="btn-group">
<button type="button" class="btn btn-default dropdown-toggle"
data-toggle="dropdown">
categorias <span class="caret"></span>
</button>
<ul class="dropdown-menu" rol=menu id="category">
<?php

    if ($result = $connection->query("SELECT *
    FROM categorias order by idcategoria;")) {
         while($obj = $result->fetch_object()) {
          echo "<li><a href='categorias.php?id=$obj->idCategoria'>$obj->valor</a><li>";
         }
       }
?>
</ul>
</div>
</div>
