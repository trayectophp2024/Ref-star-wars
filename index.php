<?php
    require_once "utils/funciones.php";
    require_once "utils/db_connection.php";

    $productos = destacados($conn);

    

?>



<?php require "partials/header.php" ?>

<main class="container">
    <img width="100%" height="300px" src="img/banner.webp" alt="iocus banner">

    <div class="row">
        <h1 class="text-center mt-3">DESTACADOS</h1>

        <?php foreach ($productos as $producto) { ?>

                <div class="col-4 mt-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $producto['imagen'] ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                            <h5 class="card-title text-success">$<?= $producto['precio'] ?></h5>
                            <a href="producto_particular.php?categorias=<?= $producto['tabla'] ?>&id=<?= $producto['id'] ?>" class="btn btn-primary">Ver</a>
                        </div>
                    </div>
                </div>
            
            <?php } ?>

    </div>

    <div class="text-center">
        <h2 class="text-center mt-3">CATEGORIAS</h2>

        <div class="row">
            <div class="col align-self-start">
                <a href="producto.php?categoria=juegosmesa" class="d-block mb-4">
                    <img class="rounded-circle" width="200px" src="img/juegos-de-mesa-logo.webp" alt="">
                </a>
                <a href="producto.php?categoria=figuras" class="d-block mb-4">
                    <img class="rounded-circle" width="200px" src="img/figuras-logo.webp" alt="">
                </a>

            </div>
            <div class="col align-self-center">
                <div>
                    <img class="rounded-circle" width="400px" src="img/logo.webp" alt="">
                </div>
            </div>
            <div class="col align-self-end">
                <a href="producto.php?categoria=monopatin" class="d-block mb-4">
                    <img class="rounded-circle" width="200px" src="img/monopatin-logo.jpg" alt="">
                </a>
                <a href="producto.php?categoria=figuras" class="d-block mb-4">
                    <img class="rounded-circle" width="200px" src="img/figuras-logo.webp" alt="">
                </a>
            </div>
        </div>

    </div>




</main>




<?php require "partials/footer.php" ?>