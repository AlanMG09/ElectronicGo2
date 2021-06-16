<?php
require __DIR__ . '/rutas/secciones.php';

$secciones = getSeccionesLista();

$seccionActual = $_GET['s'] ?? 'home';
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title><?= $secciones[$seccionActual]['title'] ?? '| ElectronicGO';?></title>

    <script src="https://kit.fontawesome.com/a9b6896054.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container-fluid fixed-top shadow-lg">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon m-auto"></span>
                </button>
                <a class="navbar-brand" href="#top"><img src="media/Logo-02.svg" width="30" height="30" alt="Logo de
                Electronic-GO" loading="lazy"></a>
                <button class="nav-item btn align-self-md-center">
                    <span id="contador" class="text-danger align-self-center">0</span>
                    <img src="media/Carrito.svg" width="30" height="30" alt="Carrito de compras" loading="lazy">
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto container justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?s=productos">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?s=contacto">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container" id="top">

        <?php
        require __DIR__ . "/secciones/" . $seccionActual . ".php";
        ?>

        </div>
    </main>

    <footer class="bg-danger container-fluid pt-4 mt-5">
        <p class="row text-white justify-content-center">Alan Maximiliano Godoy - Programación II - &copy;Da Vinci 2021.</p>
    </footer>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/filtro.js"></script>
</body>

</html>