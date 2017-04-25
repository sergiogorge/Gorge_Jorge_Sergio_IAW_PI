<?php

// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.

/*$string = file_get_contents("sampleData.json");
echo $string;*/
$connection = new mysqli("localhost", "root", "2asirtriana", "proyecto_blog2");
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}


// Instead you can query your database and parse into JSON etc etc

?>
