<?php
require_once "utils/funciones.php";
require_once "utils/db_connection.php";

$tabla = $_GET['categorias'] ?? FALSE;
$id = $_GET['id'] ?? FALSE;

$productos = categoria_particular($conn, $tabla, $id);

/* echo "<pre>";
    var_dump($productos);
    echo "</pre>"; */

    /* Obtener nombre del produto */

    $producto = $productos[0] ?? NULL;

   /*  echo "<pre>";
        var_dump($producto);
    echo "</pre>";  */

?>

<?php require "partials/header.php" ?>

<main class="container">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="producto.php?categoria=<?= $tabla ?>"><?= $tabla ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $producto['nombre']  ?></li>
  </ol>
</nav>

    <?php foreach($productos as $producto) {  ?>
    <div class="card mb-3 mx-auto mt-5" style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="img/<?= $producto['imagen'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                    <p class="card-text"><?= $producto['descripcion'] ?></p>
                    <p class="card-text text-danger fs-4">$<?= $producto['precio'] ?></p>
                    <a href="" class="btn btn-primary">COMPRAR</a>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

</main>

<?php require "partials/footer.php" ?>