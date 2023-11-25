<?php
$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'bdprueba1';

// Conexión a la base de datos
$conexion = new mysqli($servidor, $cuenta, $password, $bd);
if ($conexion->connect_errno) {
    die('Error en la conexion');
} else {
    //conexion exitosa
    if (isset($_POST['submit'])) {
        //obtenemos datos del formulario
        $eliminar = $_POST['eliminar'];
        //hacemos cadena con la sentencia mysql para eliminar
        $sql = "DELETE FROM usuarios WHERE id='$eliminar'";
        $conexion->query($sql);
        if ($conexion->affected_rows >= 1) { //revisamos que se eliminó
            echo '<br>Registro borrado<br>';
        } //fin
    } //fin
    // continuamos con la consulta de datos a la tabla usuarios
    //vemos datos en una tabla de HTML
    $sql = 'select * from usuarios';//hacemos cadena con la sentencia MySQL que consulta todo el
    $resultado = $conexion->query($sql); //aplicamos sentencia
    if ($resultado->num_rows) { //si la consulta genera registros
?>
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-4">
                <h1>Shachiel GarMu</h1>
                <h3 class="mb-3" style="color: #8e44ad;">Eliminar Cuentas</h3>
                <div class="form-group">
                    <select class="form-control" name="eliminar">
                        <?php
                        while ($fila = $resultado->fetch_assoc()) {
                            echo '<option value="' . $fila["id"] . '"><span style="font-size: 12px; color: #d35400;">' . $fila["nombre"] . '</span></option>';
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger" name="submit" style="background-color: #8e44ad; border-color: #8e44ad;">Eliminar</button>
            </form>
        </div>
<?php
    } else {
        echo "No hay datos";
    }
}
?>

<!DOCTYPE html>
<html lang="en"> ñ=
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        div{
            width:20%;
        }
        body{
            margin:50px;
            background-color: forestgreen;
        }
    </style>
</head>
<body>
</body>
</html>
