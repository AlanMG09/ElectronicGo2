<?php
require_once __DIR__ . '/../funciones/funciones.php';
$id = (int) $_GET['id'];
$producto = getProductoById($id);
?>
<div class="container">
    <div class="row shadow-lg px-5 pb-5 justify-content-around">
        <img src="<?='media/' . $producto['imagen'];?>" alt="<?= $producto['descripcion'];?>" class="col-sm-12 col-md-12
        col-lg-6 imagen orden my-2">
        <div class="col-sm-12 col-md-12 col-lg-6 my-auto pt-5">
            <h3 class="mb-3"><?=$producto['nombre'];?></h3>
            <h5>Especificaciones</h5>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Marca</th>
                        <td><?=$producto['marca'];?></td>
                    </tr>
                    <tr>
                        <th>Tipo</th>
                        <td><?=$producto['tipo'];?></td>
                    </tr>
                    <tr>
                        <th>Memoria gráfica</th>
                        <td><?=$producto['memoria_g'];?></td>
                    </tr>
                    <?php
                    if($producto['tipo'] != 'procesadores'):
                    ?>
                    <tr>
                        <th>Memoria</th>
                        <td><?=$producto['memoria'];?></td>
                    </tr>
                    <?php
                    else:
                    ?>
                    <tr>
                        <th>Núcleos</th>
                        <td><?=$producto['nucleos'];?></td>
                    </tr>
                    <?php
                    endif;
                    ?>
                    <tr>
                        <th>Precio</th>
                        <td>$<?=$producto['precio'];?></td>
                    </tr>
                </tbody>
            </table>
            <div class="row justify-content-around">
                <a href="index.php?s=productos" class="btn rounded btn-primary col-sm-12 col-md-12 col-lg-5
                mb-3">SEGUIR COMPRANDO</a>
                <a href="" class="btn rounded btn-success col-sm-12 col-md-12 col-lg-5 mb-3">COMPRAR</a>
            </div>
        </div>

    </div>
</div>
