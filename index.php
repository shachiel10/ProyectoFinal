<?php
// Configuración de la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "proyectof";

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
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
