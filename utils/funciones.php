<?php

/* Listar categoria por tabla */

function listar_todo($conn, $tabla) {

    //1- Realizar consulta o query
    $sqlPersonajes = "SELECT * FROM " . $tabla . ";";

    // 2- Ejecutar la consulta 
    $result = $conn->query($sqlPersonajes);

    //3- Retornar y convertir la consulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);

}

/*  Listar un producto en particular  */

function categoria_particular($conn, $tabla, $id){
    //1- Realizar consulta o query
    $sqlPersonajes = "SELECT * FROM " . $tabla . " WHERE id = " .  $id;

    // 2- Ejecutar la consulta 
    $result = $conn->query($sqlPersonajes);

    //3- Retornar y convertir la consulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);
} 


/* funcion busqueda */

 function buscar_productos($conn , $termino_busqueda){
        // Escapar el termino de busqueda para evitar inyecciones SQL

        $termino_busqueda = $conn->real_escape_string($termino_busqueda);

        // Consultas para buscar en la figuras
        $sqlFiguras = "SELECT 'figuras' as tabla, id, nombre, descripcion, precio, imagen,destacado, id_edad FROM figuras
           WHERE LOWER(nombre) LIKE '%$termino_busqueda%' 
        ";

        // Consultas para buscar en la Monopatin
        $sqlMonopatin = "SELECT 'monopatin' as tabla, id, nombre, descripcion, precio, imagen,destacado, id_edad FROM monopatin
           WHERE LOWER(nombre) LIKE '%$termino_busqueda%' 
        ";

        // Consultas para buscar en la Juegos de mesa
        $sqlJuegosMesa = "SELECT 'juegosmesa' as tabla, id, nombre, descripcion, precio, imagen,destacado, id_edad FROM juegosmesa
           WHERE LOWER(nombre) LIKE '%$termino_busqueda%' 
        ";

        //Ejecutar la consulta y convertir en un array asociativo
        $resultFiguras = $conn->query($sqlFiguras)->fetch_all(MYSQLI_ASSOC);
        $resultMonopatin = $conn->query($sqlMonopatin)->fetch_all(MYSQLI_ASSOC);
        $resultJuegosMesa = $conn->query($sqlJuegosMesa)->fetch_all(MYSQLI_ASSOC);

        //Combinar los resultados de las tres tablas 

        $resultado = array_merge($resultFiguras, $resultMonopatin, $resultJuegosMesa);

        return $resultado;

        


}   










?>