<?php
require_once "utils/funciones.php";
require_once "utils/db_connection.php";

//Capturar lo que pone el usuario, o el termino busqueda
$termino_busqueda = $_GET['q'] ?? '';

$productos = [];

if($termino_busqueda){
    // si hay un termino busqueda, llamamos a la funciona buscar_producto
    $productos = buscar_productos($conn, $termino_busqueda);
}

?>

<main class="container">
     <h1 class="text-center">Resultados de la búsqueda</h1>

    <?php if($termino_busqueda && !empty($productos)) { ?>
        <div class="row">
            <?php foreach($productos as $producto) { ?>
                    <?= $producto['nombre'] ?>
            <?php } ?>
         </div>
    
    <?php } ?>




</main>

