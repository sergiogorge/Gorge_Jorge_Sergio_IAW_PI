<?php
// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.
/*$string = file_get_contents("sampleData.json");
echo $string;*/
// print("<pre>".print_r(json_decode($string))."</pre>");

 //Instead you can query your database and parse into JSON etc etc
$connection = new mysqli("localhost", "root", "2asirtriana", "proyecto_blog2");
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
               if ($result = $connection->query("select c.valor, count(n.idCategoria) as num
	from noticia as n, categorias as c
	where n.idCategoria = c.idCategoria
	group by n.idCategoria;")) {
                       $obj = $result->fetch_object();	

stdClass Object
(
    [cols] => Array
        (
            [0] => stdClass Object
                (
                    [id] => 
                    [label] => Categorias
                    [pattern] => 
                    [type] => string
                )

            [1] => stdClass Object
                (
                    [id] => 
                    [label] => Numero_noticias
                    [pattern] => 
                    [type] => number
                )

        )

    [rows] => Array
        (
            [0] => stdClass Object
                (
                    [c] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [v] => 
                                    [f] => 
                                )

                            [1] => stdClass Object
                                (
                                    [v] => 	
                                    [f] => 
                                )

                        )

                )

            

          

                        )

                )

        )

)
                       $result->close();
	                       unset($obj);
                       unset($connection);
                     }
?>
