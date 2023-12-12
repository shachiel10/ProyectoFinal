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
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Tienda</title>
		<link rel="stylesheet" href="estilosGR.css" />
	</head>
	<body>
		<header>
			<div id = "tituloDP">
				<h1 id ="titulo2DP">Lionel'  <span>Richie</span> </h1>
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



<?php
$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'proyectof';

$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

if (isset($_GET['categoria'])) {
   $categoria = $_GET['categoria'];

    // Obtener productos de la categoría desde la base de datos
   $consulta = "SELECT * FROM productos WHERE categoria = '$categoria'";
    $resultado = $conexion->query($consulta);
	echo '<link rel="stylesheet" type="text/css" href="estilosGR.css">';
    // Mostrar productos en HTML
    

    while ($fila = $resultado->fetch_assoc()) {
		?>
        <div class="containerDemas1">
        	<img src="imagenes/<?php echo $fila["imagen"]; ?>" alt="<?php echo $fila["nombre"]; ?>" class="item1">
           

            	<div class="info-product1">
					<h2 class="tituloProducto1"><?php echo $fila["nombre"]; ?></h2>
                	<p class="tituloPeliculas" >ID </p>
                	<p class="informacionGeneral" ><?php echo $fila["id"]; ?></p>

                	<p class="tituloPeliculas">CANTIDAD:</p>
                	<p class="status"><?php echo ($fila["cantidad"] == 0) ? "Agotado" : $fila["cantidad"] . ' en stock'; ?></p>

                	<p class="tituloPeliculas">PRECIO:</p>
                	<p class="informacionGeneral" >$<?php echo number_format($fila["precio"], 2); ?></p>

                	<p class="tituloPeliculas">DESCUENTO:</p>
                	<p class="informacionGeneral"  ><?php echo $fila["descuento"]; ?>%</p>
					<p class="tituloPeliculas"> DESCRIPCIÓN:</p>
                	<p class="informacionDescripcion" > <br><?php echo $fila["descripcion"]; ?><br> </p>
                   
 				</div>
				
        </div>
		<br><br>
					<button class="add-to-cart1" data-product-id="<?php echo $fila["id"]; ?>">Agregar al carrito</button>
                
		
				
          
        <?php
    }
    ?>
	
	
	


<?php
    // ... Tu código de conexión a la base de datos ...

} else {
   echo "Categoría no especificada";
}

$conexion->close();
?>


		
		
		
    
        <script src="index.js"></script>
	</body>
</html>
