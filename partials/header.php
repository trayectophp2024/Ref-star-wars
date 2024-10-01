<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IOCUS - Inicio</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!-- HEADER -->

    <header class="container">
        <nav class="navbar navbar-expand-lg bg-primary p-3" data-bs-theme="dark" >
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">IOCUS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="producto.php?categoria=figuras">Figuras</a></li>
                                <li><a class="dropdown-item" href="producto.php?categoria=juegosmesa">Juegos de Mesa</a></li>
                                <li><a class="dropdown-item" href="producto.php?categoria=monopatin">Monopatines</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <form action="busqueda.php" method="POST" class="d-flex" role="search">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-magnifying-glass"></i>      
                            </span>
                            <input class="form-control" name="q" type="search" placeholder="Search" aria-label="Search">
                            <button class="boton-color" type="submit">Buscar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </nav>
    </header>