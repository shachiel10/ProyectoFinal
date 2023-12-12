

<?php
define('BASE_URL', 'http://localhost/cursophp/proyectoFinal/avanceCambios/');
// Conexión a la base de datos (debes modificar los valores según tu configuración)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'proyectof';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $descuento =$_POST['descuento']; // Si no se proporciona descuento, se establece a 0


    // Manejar la carga de una nueva imagen
    if ($_FILES["imagen"]["error"] == 0) {
        $imagen_nombre = $_FILES["imagen"]["name"];
        $imagen_temporal = $_FILES["imagen"]["tmp_name"];
        $ruta_destino = "imagenes/" . $imagen_nombre;
        // ELIMINAR LA IMAGEN ANTIGUA
        
        move_uploaded_file($imagen_temporal, $ruta_destino);
    }

    // Actualizar los datos del producto con sentencias preparadas
        $query_actualizar_producto = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, cantidad=?, categoria =?, descuento=?" ;

        $param_tipos = "ssddsd";   // s = string, d = double (para precio)
        $parametros = array($nombre, $descripcion, $precio, $cantidad, $categoria, $descuento);

    if (!empty($imagen_nombre)) {
        $query_actualizar_producto .= ", imagen = ?";
        $param_tipos .= "s";  // s = string
        $parametros[] = $ruta_destino;
    }

    $query_actualizar_producto .= " WHERE id = ?";
    $param_tipos .= "i";  // i = integer
    $parametros[] = $id;

    $stmt = $conn->prepare($query_actualizar_producto);

    if ($stmt) {
        $stmt->bind_param($param_tipos, ...$parametros);
        $stmt->execute();
    
    
    

    if ($stmt->affected_rows > 0) {
        echo "Cambios realizados correctamente.";
    } else {
        echo "Error al actualizar el producto: " . $stmt->error;
    }

    // Obtener la información del producto actualizada
$query_select_producto = "SELECT * FROM productos WHERE id = ?";
$stmt_select = $conn->prepare($query_select_producto);
$stmt_select->bind_param("i", $id);
$stmt_select->execute();
$result_select = $stmt_select->get_result();

// Verificar si la consulta SELECT tuvo éxito
if ($result_select->num_rows > 0) {
    // Obtener los datos actualizados del producto
    $producto_actualizado = $result_select->fetch_assoc();

    // Ahora puedes utilizar $producto_actualizado para obtener la ruta de la nueva imagen
    $nueva_imagen = BASE_URL . $producto_actualizado["imagen"];

    $producto_actualizado['imagen'] = $nueva_imagen;
    echo json_encode($producto_actualizado);
}



    $stmt->close();
}else{
    echo "error en la preparacion de la consulta: ".$conn->error;
}
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
