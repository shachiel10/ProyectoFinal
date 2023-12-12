


<?php
$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'proyectof';

// Conexión a la base de datos
$conexion = new mysqli($servidor, $cuenta, $password, $bd);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $descuento = isset($_POST['descuento']) ? $_POST['descuento'] : 0; // Si no se proporciona descuento, se establece a 0

    // Subir imagen al servidor
    $imagen_nombre = $_FILES['imagen']['name'];
    $imagen_temporal = $_FILES['imagen']['tmp_name'];
    $carpeta_destino = "imagenes/"; // Reemplaza con la ruta de tu carpeta

    move_uploaded_file($imagen_temporal, $carpeta_destino . $imagen_nombre);
  
  // Preparar la consulta SQL
    $sql = "INSERT INTO productos (id, nombre, descripcion, categoria, precio,cantidad, descuento, imagen) VALUES ('$id', '$nombre', '$descripcion', '$categoria', $precio,  '$cantidad', $descuento, '$imagen_nombre')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Producto agregado correctamente";
        // Redirigir a la página específica según la categoría
       // var_dump($categoria);
     
       header("Location: categoriaGunsNRoses.php?categoria=$categoria");
       exit();
       
        
    } else {
        echo "Error al agregar el producto: " . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();
?>
