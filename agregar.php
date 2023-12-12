<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar'])) {
    // Recuperar el ID del producto seleccionado
    $producto_id = $_POST['agregar'];

    // Verificar si se proporcionó la cantidad
    if (isset($_POST['cantidad'][$producto_id])) {
        $cantidad = $_POST['cantidad'][$producto_id];

        // Obtener información del producto desde la base de datos
        $consulta_producto = "SELECT * FROM productos WHERE id = $producto_id";
        $resultado_producto = $conexion->query($consulta_producto);

        if ($resultado_producto->num_rows > 0) {
            $producto = $resultado_producto->fetch_assoc();

            // Calcular el subtotal (precio * cantidad)
            $subtotal = $producto['precio'] * $cantidad;

            // Verificar si el producto ya está en el carrito
            $consulta_existencia = "SELECT * FROM carrito WHERE nombre = '{$producto['nombre']}'";
            $resultado_existencia = $conexion->query($consulta_existencia);

            if ($resultado_existencia->num_rows > 0) {
                // El producto ya está en el carrito, actualizar cantidad, subtotal y total
                $actualizar_en_carrito = "UPDATE carrito SET cantidad = cantidad + $cantidad, subtotal = subtotal + $subtotal, total = total + $subtotal WHERE nombre = '{$producto['nombre']}'";

                if ($conexion->query($actualizar_en_carrito) === TRUE) {
                    echo "Cantidad actualizada en el carrito con éxito.";
                } else {
                    echo "Error al actualizar la cantidad en el carrito: " . $conexion->error;
                }
            } else {
                // El producto no está en el carrito, realizar la inserción
                $insertar_en_carrito = "INSERT INTO carrito (nombre, descripcion, precio, cantidad, subtotal, total) VALUES ('{$producto['nombre']}', '{$producto['descripcion']}', '{$producto['precio']}', $cantidad, $subtotal, $subtotal)";
                
                if ($conexion->query($insertar_en_carrito) === TRUE) {
                    echo "Producto agregado al carrito con éxito.";
                } else {
                    echo "Error al agregar el producto al carrito: " . $conexion->error;
                }
            }
        } else {
            echo "Error al obtener información del producto.";
        }
    } else {
        echo "La cantidad no se proporcionó correctamente.";
    }
}
?>
