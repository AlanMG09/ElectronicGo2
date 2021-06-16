<div class="producto col-12 col-sm-6 col-md-4 col-lg-3 mb-4 <?=$producto['tipo'];?>">
    <div class="card shadow">
        <img src="<?= 'media/' . $producto['imagen'];?>" alt="" class="card-img mt-3 imagen
                        mx-auto">
        <div class="card-body">
            <h5 class="card-title text-center"><?= $producto['nombre'] ;?></h5>
            <p class="text-center" style="font-size: 0.65em;"><?= $producto['descripcion'] ;?></p>
            <p class="text-center mb-3 mt-3">$<?= $producto['precio'] ;?></p>
            <div class="row producto d-flex justify-content-around">
                <a href="index.php?s=producto-detalle&id=<?= $producto['producto_id'];?>" class="btn rounded
                btn-primary col-7">VER MÁS</a>
                <a href="#" class="btn rounded btn-success col-3">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
    </div>
</div>

