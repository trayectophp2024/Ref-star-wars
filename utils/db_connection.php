<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "jugueteria";

    $conn = new mysqli($host,$user,$password, $database);

    //verificamos la conexion

    if($conn->connect_error){
        die("Conexion fallida:" .  $conn->connect_error);
    } /* else {
        echo "Conexion exitosa con la base de datos"; 
    } */



?>