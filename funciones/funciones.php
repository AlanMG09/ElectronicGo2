<?php
function getProductos(): array {
    $archivo = __DIR__ . '/../data/productos.json';
    $contenido = file_get_contents($archivo);
    return json_decode($contenido, true);
//    return 1;
}

function getProductoById(int $id): array {
    $productos = getProductos();

    // Buscamos en los productos el que tenga el id indicado.
    foreach($productos as $producto) {
        if($producto['producto_id'] === $id) {
            // Encontramos el producto. Retornamos el valor, y termina la función.
            return $producto;
        }
    }
}

function productoCreate(array $nuevoProducto): bool {
    // Pedimos los productos actuales.
    $productos = getProductos();

    if(!$productos) {
        $productos = [];
        $nuevoId = 1;
    } else {
        // Para generar el id, vamos a buscar el último producto, y sumarle uno a su id.
        $ultimoProducto = $productos[count($productos) - 1];

        // Pusheamos un nuevo producto con la $data que nos pasaron.
        $nuevoId = $ultimoProducto['producto_id'] + 1;
    }

    $productos[] = [
        'producto_id' => $nuevoId,
        'nombre' => $nuevoProducto['nombre'],
        'imagen' => $nuevoProducto['imagen'],
        'descripcion' => $nuevoProducto['descripcion'],
        'precio' => $nuevoProducto['precio'],
        'tipo' => $nuevoProducto['tipo']
    ];

    $contenidoJSON = json_encode($productos, JSON_PRETTY_PRINT);
    $archivo = __DIR__ . '/../data/productos.json';

    $resultado = file_put_contents($archivo, $contenidoJSON);
    return $resultado !== false;
    }