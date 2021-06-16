<?php
require_once __DIR__ . '/../funciones/funciones.php';
$productos = getProductos();
?>

<section class="container">
    <div class="row justify-content-center bg-danger text-white py-2">
        <h5 class="col-12 text-center pt-2">Encontrá todas las novedades en computación en
            ElectronicGO</h5>
    </div>
</section>
<section class="carousel slide" data-ride="carousel">
    <div class="d-none">
        <h2>PROMOS</h2>
    </div>
    <div class="carousel-inner mb-2">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./media/banner1.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./media/banner2.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./media/banner3.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./media/banner4.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
</section>
<section class="container mt-4 masvendidos">
    <div class="row justify-content-center bg-danger text-white py-2 mb-4">
        <h1 class="my-auto py-1">MÁS VENDIDOS</h1>
    </div>
        <div class="row">
            <?php
            foreach($productos as $producto) {
                if($producto['ventas'] > 0) {
                    require __DIR__ . "/../funciones/crear-catalogo.php";
            }
            }
            ?>
        </div>
    <div class="row justify-content-center mb-4">
        <a href="index.php?s=productos" class="btn btn-danger col-11 col-md-6">VER MÁS PRODUCTOS</a>
    </div>
</section>