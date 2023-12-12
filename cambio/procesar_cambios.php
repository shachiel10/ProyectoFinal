<?php
// Conexión a la base de datos (debes modificar los valores según tu configuración)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hannia';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $color = $_POST["color"];

    // Manejar la carga de una nueva imagen
    if ($_FILES["imagen"]["error"] == 0) {
        $imagen_nombre = $_FILES["imagen"]["name"];
        $imagen_temporal = $_FILES["imagen"]["tmp_name"];
        $ruta_destino = "carpeta_destino/" . $imagen_nombre;

        move_uploaded_file($imagen_temporal, $ruta_destino);
    }

    // Actualizar los datos del producto con sentencias preparadas
    $query_actualizar_producto = "UPDATE productos SET nombre = ?, precio = ?, color = ?";
    $param_tipos = "ssd";  // s = string, d = double (para precio)
    $parametros = array($nombre, $precio, $color);

    if (!empty($imagen_nombre)) {
        $query_actualizar_producto .= ", imagen = ?";
        $param_tipos .= "s";  // s = string
        $parametros[] = $ruta_destino;
    }

    $query_actualizar_producto .= " WHERE id = ?";
    $param_tipos .= "i";  // i = integer
    $parametros[] = $id;

    $stmt = $conn->prepare($query_actualizar_producto);
    $stmt->bind_param($param_tipos, ...$parametros);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Cambios realizados correctamente.";
    } else {
        echo "Error al actualizar el producto: " . $stmt->error;
    }

    $stmt->close();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

