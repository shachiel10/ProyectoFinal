<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Manejar la eliminación de productos del carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
    $eliminar_id = $_POST['eliminar'];

    // Realizar la eliminación del producto del carrito
    $eliminar_producto = "DELETE FROM carrito WHERE id = $eliminar_id";
    if ($conexion->query($eliminar_producto) === TRUE) {
        echo "Producto eliminado del carrito con éxito.";
    } else {
        echo "Error al eliminar el producto del carrito: " . $conexion->error;
    }
}

// Manejar la actualización de la cantidad en el carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar'])) {
    $actualizar_id = $_POST['actualizar'];
    $nueva_cantidad = $_POST['nueva_cantidad'][$actualizar_id];

    // Verificar si la nueva cantidad es válida (mayor que cero)
    if ($nueva_cantidad > 0) {
        // Realizar la actualización de la cantidad en el carrito
        $actualizar_cantidad = "UPDATE carrito SET cantidad = $nueva_cantidad WHERE id = $actualizar_id";
        if ($conexion->query($actualizar_cantidad) === TRUE) {
            echo "Cantidad actualizada en el carrito con éxito.";
        } else {
            echo "Error al actualizar la cantidad en el carrito: " . $conexion->error;
        }
    } else {
        echo "La cantidad no es válida.";
    }
}

// Consulta SQL para obtener los productos en el carrito
$sql_carrito = "SELECT * FROM carrito";
$resultado_carrito = $conexion->query($sql_carrito);

// Verificar si hay productos en el carrito
if ($resultado_carrito->num_rows > 0) {
    echo "<h1>Productos en el Carrito</h1>";
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Total</th>
            <th>Eliminar</th>
            <th>Actualizar Cantidad</th>
          </tr>";

    while ($fila_carrito = $resultado_carrito->fetch_assoc()) {
        echo "<tr>
                <td>{$fila_carrito['id']}</td>
                <td>{$fila_carrito['nombre']}</td>
                <td>{$fila_carrito['descripcion']}</td>
                <td>{$fila_carrito['precio']}</td>
                <td>{$fila_carrito['cantidad']}</td>
                <td>{$fila_carrito['subtotal']}</td>
                <td>{$fila_carrito['total']}</td>
                <td>
                    <form method='post' action=''>
                        <button type='submit' name='eliminar' value='{$fila_carrito['id']}'>Eliminar</button>
                    </form>
                </td>
                <td>
                    <form method='post' action=''>
                        <input type='number' name='nueva_cantidad[{$fila_carrito['id']}]' value='{$fila_carrito['cantidad']}' min='1'>
                        <button type='submit' name='actualizar' value='{$fila_carrito['id']}'>Actualizar</button>
                    </form>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "El carrito está vacío.";
}

// Cerrar la conexión
$conexion->close();
?>
