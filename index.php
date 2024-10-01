<?php
    require_once "utils/db_connection.php"

?>



<?php require "partials/header.php" ?>

<main class="container">
    <img width="100%" height="300px" src="img/banner.webp" alt="iocus banner">

    <div class="row">
        <h1 class="text-center mt-3">DESTACADOS</h1>

        <div class="col-4 mt-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="img/superman.webp" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Superman</h5>
                    <h5 class="card-title text-success">$20.000</h5>
                    <a href="" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center">
        <h2 class="text-center mt-3">CATEGORIAS</h2>

        <div class="row">
            <div class="col align-self-start">
                <a href="" class="d-block mb-4">
                    <img class="rounded-circle" width="200px" src="img/juegos-de-mesa-logo.webp" alt="">
                </a>
                <a href="" class="d-block mb-4">
                    <img class="rounded-circle" width="200px" src="img/figuras-logo.webp" alt="">
                </a>

            </div>
            <div class="col align-self-center">
                <div>
                    <img class="rounded-circle" width="400px" src="img/logo.webp" alt="">
                </div>
            </div>
            <div class="col align-self-end">
                <a href="" class="d-block mb-4">
                    <img class="rounded-circle" width="200px" src="img/monopatin-logo.jpg" alt="">
                </a>
                <a href="" class="d-block mb-4">
                    <img class="rounded-circle" width="200px" src="img/figuras-logo.webp" alt="">
                </a>
            </div>
        </div>

    </div>




</main>




<?php require "partials/footer.php" ?>