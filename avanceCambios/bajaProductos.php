<?php
 include 'heder.php'
?>


<br>
<br>
<br>
<br><br>
<br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosGR.css" >
</head>
<body>
<body>
		<header>
			<div id = "tituloDP">
				<h1 id ="titulo2DP">Guns N'  <span>Roses</span> </h1>
				<h2 id = "titulo3DP"><span>"Rock Legends Closet"</span> <span></span></h2>
				<p><sup></sup></p>
			</div>
				
				
				
				

			
		</header>
		<!--aqui inicia las imagenes -->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>


    <div class="container">
        <?php
        $servidor = 'localhost';
        $cuenta = 'root';
        $password = '';
        $bd = 'proyectof';

        // Conexión a la base de datos
        $conexion = new mysqli($servidor, $cuenta, $password, $bd);

        if ($conexion->connect_errno) {
            die('Error en la conexión');
        } else {
            // Conexión exitosa

            if (isset($_POST['submit'])) {
                // Obtenemos datos del formulario
                $eliminar = $_POST['eliminar'];
                // Creamos la sentencia SQL para eliminar
                $sql = "DELETE FROM productos WHERE id='$eliminar'";
                $conexion->query($sql);
                if ($conexion->affected_rows >= 1) {
                    echo '<p>Registro borrado</p>';
                }
            }
        }

        // Buscar por ID
        if (isset($_POST['buscar'])) {
            $buscarId = $_POST['buscarId'];
            $sql = "SELECT * FROM productos WHERE id='$buscarId'";
        } else {
            // Continuamos con la consulta de datos a la tabla productos
            $sql = 'SELECT * FROM productos';
        }

        // Mostramos datos en una tabla HTML
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows) {
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='post'>
                <legend>Eliminar productos</legend>
                <br>
                <label for="buscarId">Buscar por ID:</label>
                <input type="text" name="buscarId" id="buscarId">
                <button type="submit" value="buscar" name="buscar">Buscar</button>
                <br><br>
                <select class="browser-default custom-select" name='eliminar'>
                    <?php
                    while ($fila = $resultado->fetch_assoc()) {
                        echo '<option value="' . $fila["id"] . '">' . $fila["nombre"] . '</option>';
                    }
                    ?>
                </select>
                <br><br>
                <button type="submit" value="submit" name="submit">Eliminar</button>
            </form>
            <?php
        } else {
            echo "<p>No hay datos</p>";
        }
        ?>
    </div>
</body>
</html>