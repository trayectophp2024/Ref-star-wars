<?php
require_once "utils/funciones.php";
require_once "utils/db_connection.php";

//Capturar lo que pone el usuario, o el termino busqueda
$termino_busqueda = $_GET['q'] ?? '';

$productos = [];

if ($termino_busqueda) {
    // si hay un termino busqueda, llamamos a la funciona buscar_producto
    $productos = buscar_productos($conn, $termino_busqueda);
}

?>

<?php require "partials/header.php" ?>

<main class="container">
    <h1 class="text-center">Resultados de la búsqueda</h1>

    <?php if ($termino_busqueda && !empty($productos)) { ?>
        <div class="row">
            <?php foreach ($productos as $producto) { ?>
                <div class="col-4 mt-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $producto['imagen'] ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                            <h5 class="card-title text-success">$<?= $producto['precio'] ?></h5>
                            <a href="" class="btn btn-primary">Ver</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    <?php } ?>

</main>


<?php require "partials/footer.php" ?>