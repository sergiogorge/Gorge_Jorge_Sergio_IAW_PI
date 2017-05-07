<?php
 if (isset($_SESSION["tipo"])){
 echo '<form name="tema" id="tema" novalidate method="post">';
 echo'<label>Tema</label>';
 echo'<select class="form-control" name="te" placeholder="tema" id="tem">';
 echo'<option>Predeterminado</option>';
 echo'<option>Azul</option>';
 echo'<option>Negro</option>';
 echo'</select>';
 echo'<button type="submit" class="btn btn-default" name="tema">Elegir tema</button>';

if (isset($_POST["tema"])){
                         $t= $_POST["te"];
               $user=$_SESSION["id"];
               $cons= "update usuarios set tema='$t' where idUsuario='$user'";
                                                   $result= $connection->query($cons);
                                                     if (!$result) {
                                                        echo "error";
                                                     } else {
                                                       header('Location:panel-control.php');
                                                      }
                                                      }
                                                    }
                                                    $result->close();
 unset($obj);
 unset($connection);


 ?>
<hr>
<footer>
 <div class="container">
     <div class="row">
         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               <ul class="list-inline text-center">
                   <li>
                       <a href="http://www.twitter.com/sergiogorge">
                           <span class="fa-stack fa-lg">
                               <i class="fa fa-circle fa-stack-2x"></i>
                               <i class="fa fa-twitter fa-stack-1x fa-inverse" style="color:black;"></i>
                           </span>
                       </a>
                   </li>
               </ul>
         </div>
     </div>
 </div>
</footer>
