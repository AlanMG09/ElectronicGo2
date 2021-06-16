<?php
require_once __DIR__ . '/../funciones/funciones.php';
$productos = getProductos();
?>

<section class="container">
            <div class="row justify-content-center bg-danger text-white p-2 mb-5">
                <h1 class="my-auto py-1">CATEGORÍAS</h1>
            </div>
            <div class="row justify-content-around pb-5">
                <a href="productos.php" class="col-2 col-md-1 p-md-2 btn categoria" data-filter="todos"
                   role="button"><img src="./media/Categoria-01.svg" alt=""></a>
                <a href="productos.php" class="col-2 col-md-1 p-md-2 btn categoria" data-filter="video"
                   role="button"><img src="./media/Categoria-02.svg" alt=""></a>
                <a href="productos.php" class="col-2 col-md-1 p-md-2 btn categoria" data-filter="motherboard"
                   role="button"><img src="./media/Categoria-04.svg" alt=""></a>
                <a href="productos.php" class="col-2 col-md-1 p-md-2 btn categoria" data-filter="procesadores"
                   role="button"><img src="./media/Categoria-03.svg" alt=""></a>
                <a href="productos.php" class="col-2 col-md-1 p-md-2 btn categoria" data-filter="ram"
                   role="button"><img src="./media/Categoria-06.svg" alt=""></a>
            </div>
</section>
<section class="container">
            <div class="row">
                <h2 class="subtitulos mx-auto mb-5">CATÁLOGO</h2>
            </div>
            <div class="row">
                <?php
                foreach($productos as $producto) {
                    require __DIR__ . "/../funciones/crear-catalogo.php";
                }
                ?>
            </div>
</section>