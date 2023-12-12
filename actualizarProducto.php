<?php
// Configuración de la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "proyecto";

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Manejar la solicitud de agregar al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar'])) {
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

                    // Actualizar la cantidad de existencia en la tabla productos
                    $nueva_existencia = $producto['existencia'] - $cantidad;
                    $actualizar_existencia = "UPDATE productos SET existencia = $nueva_existencia WHERE id = $producto_id";
                    if ($conexion->query($actualizar_existencia) !== TRUE) {
                        echo "Error al actualizar la cantidad de existencia en la tabla productos: " . $conexion->error;
                    }
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

// Consulta SQL para obtener los productos
$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Mostrar los productos
    echo "<h1>Lista de Productos</h1>";
    echo "<form method='post' action='agregar.php'>";
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Categoría</th>
            <th>Descuento</th>
            <th>Acción</th>
          </tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['descripcion']}</td>
                <td>{$fila['precio']}</td>
                <td>
                    <input type='number' name='cantidad[{$fila['id']}]' value='1' min='1'> 
                </td>
                <td>{$fila['categoria']}</td>
                <td>{$fila['descuento']}</td>
                <td>
                    <button type='submit' name='agregar' value='{$fila['id']}'>Agregar al carrito</button>
                </td>
              </tr>";
    }

    echo "</table>";
    echo "</form>";
} else {
    echo "No hay productos en la base de datos.";
}

// Cerrar la conexión
$conexion->close();
?>
