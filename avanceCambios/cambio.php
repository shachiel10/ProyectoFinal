<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'proyectof';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$query_lista_productos = "SELECT id, nombre,descripcion,categoria,precio,cantidad,descuento,imagen FROM productos";
$result_lista_productos = $conn->query($query_lista_productos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
          body {
            font-family: 'Lato';
	        block-size: 100%;
	        padding: 5vw; /*5*/
            background-color: var(--cream);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }







        .form__input {
            display: block;
            width: 50%;
            padding: 30px;
            margin-left:480px;
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            transition: 0.3s;
            font-family:cursive;
            font-size:50px;
            border-radius:50px;
            text-align:center;
            
            
             &:focus {
                background: darken(#fff, 3%);
            }
        }

        .formDescripcion{
            display: block;
            width: 50%;
            padding: 20px;
            margin-left:480px;
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            transition: 0.3s;
            font-family:cursive;
            font-size:20px;
            border-radius:20px;
            text-align:center;
            
             &:focus {
                background: darken(#fff, 3%);
            }
        }

        .btn {
            display: block;
            width: 50%;
            padding: 10px;
            margin-left:480px;
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            transition: 0.3s;
            font-family:cursive;
            font-size:20px;
            border-radius:20px;
            text-align:center;
            background: linear-gradient(to top, var(--aqua), 
            var(--green) 2rem)


        }   

        footer{
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
           
            display: block;
            margin-bottom: 8px;
            font-size:30px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align:center;
            padding: 60px;
            font-weight: bold;
        }

        .mostrarDatos{
            font-size:25px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left:720px;
            padding: 20px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }p{
            margin: 30px;
        }@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;900&subset=latin&display=swap');

:root {
	--cream: hsl(38 47% 75%);
	--black: hsl(20 3% 19%);
	--red: #ea6962;
	--orange: #e78a4e;
	--yellow: #d8a657;
	--green: #a9b665;
	--aqua: #89b482;
	--ff: "Rubik", sans-serif;
}

html {
	font-family: var(--ff);
	font-size: 100%;
	block-size: 100%;
	overflow-y: auto;
	-webkit-overflow-scrolling: touch;
	text-rendering: optimizeSpeed;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	box-sizing: border-box;
}

*, *::before, *::after {
	box-sizing: inherit;
	margin: 0;
	padding: 0;
}

body {
	block-size: 100%;
	padding: 5vw;
	background-color: var(--cream);
	color: var(--black);
}

div#tituloDP{
	max-inline-size: 80rem;
	margin-inline: auto;
	display: grid;
	background: linear-gradient(to top, var(--aqua), 
		var(--aqua) 2rem, 
		var(--green) 2rem, 
		var(--green) 4rem,
		var(--yellow) 4rem,
		var(--yellow) 6rem,
		var(--orange) 6rem,
		var(--orange) 8rem,
		var(--red) 8rem,
		var(--red) 10rem,
		var(--cream) 10rem);
	box-shadow:
		0 2.8px 2.2px hsl(20 3% 19% / 0.02),
		0 6.7px 5.3px hsl(20 3% 19% / 0.028),
		0 12.5px 10px hsl(20 3% 19% / 0.035),
		0 22.3px 17.9px hsl(20 3% 19% / 0.042),
		0 41.8px 33.4px hsl(20 3% 19% / 0.05),
		0 100px 80px hsl(20 3% 19% / 0.07);
}

div#tituloDP > * {
	padding: 1rem;
}

h1#titulo2DP {
	align-self: start;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1;
	letter-spacing: .1em;
	text-transform: uppercase;
	display: grid;
	position: relative;
	isolation: isolate;
	background: linear-gradient(to right, var(--black), var(--black) 14rem, var(--yellow) 14rem);
	color: var(--yellow);
}h1#titulo2DP span {
	font-size: 1.5rem;
	font-weight: 500;
}h2 {
	align-self: center;
	font-size: 1rem;
	font-weight: 500;
	line-height: 1;
	text-transform: uppercase;
	display: grid;
	padding-block: 10vh 20vh;
}

h2#titulo3DP span:first-child {
	font-size: 7.5rem;
	font-weight: 900;
}

h2#titulo3DP span:last-child {
	font-size: 1.5rem;
	max-inline-size: 10ch
}

h2#titulo3DP + p {
	align-self: end;
	font-size: .875rem;
	font-weight: 500;
	line-height: 1.1;
	max-inline-size: 28ch;
	position: relative;
	isolation: isolate;
	background-color: var(--aqua);
}

h2#titulo3DP + p::before {
	content: "";
	position: absolute;
	width: 4rem;
	height: 100%;
	top: 0;
	left: 14rem;
	background-color: inherit;
	clip-path: polygon(0 0, 50% 0, 100% 50%, 50% 100%);
	z-index: -1;
}

.textoSeleccion{
    font-size:25px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-align:center;
    
}
    </style>
</head>
<body>
    <div id="tituloDP">
        <h1 id ="titulo2DP"> <span>NOSTALGIA</span> </h1>
        <h2 id = "titulo3DP"><span>"CAMBIO DE PRODUCTO "</span> <span></span></h2>
        <p><sup></sup></p>
        </div>
    <header>
       
    </header>

    
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="id">Selecciona un producto:</label>
        <select name="id" class="mostrarDatos">
            <?php
            while ($row = $result_lista_productos->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
            }
            ?>
        </select>
        <input  type="submit" value="Mostrar detalles">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        
        if (!empty($id)) {
            $query_detalle_producto = "SELECT * FROM productos WHERE id = ?";
            $stmt = $conn->prepare($query_detalle_producto);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result_detalle_producto = $stmt->get_result();

            if ($result_detalle_producto->num_rows > 0) {
                $producto = $result_detalle_producto->fetch_assoc();
                ?>
                <h2>Cambiar Producto</h2>
        <form method="post" action="procesar_cambios.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $producto["id"]; ?>">

            <label class="form__input" for="nombre">Nombre:</label>
            <input  class="form__input" type="text" name="nombre" value="<?php echo $producto["nombre"]; ?>">


            <label  class="form__input" for="nombre">Descripción:</label>
            <input  class="formDescripcion" type="text" name="descripcion" value="<?php echo $producto["descripcion"]; ?>">

            
            <label  class="form__input"  for="precio">Precio:</label>
            <input   class="form__input" type="number" name="precio" value="<?php echo $producto["precio"]; ?>">

            <label  class="form__input" for="colo">Cantidad:</label>
            <input class="form__input"  type="number" name="cantidad" value="<?php echo $producto["cantidad"]; ?>">

            
            <label class="form__input"  for="nombre">Categoria:</label>
            <input  class="form__input" type="text" name="categoria" value="<?php echo $producto["categoria"]; ?>">


           
            <label  class="form__input" for="colo">Descuento:</label>
            <input  class="form__input" type="number" name="descuento" value="<?php echo $producto["descuento"]; ?>">


            <label class="form__input" for="imagen">Selecciona una nueva imagen (opcional):</label>
           <input type="file" name="imagen" accept="imagenes/*">
         
            <input type="submit" value="Guardar cambios">

        </form>
        <?php
} else {
echo "El producto con ID $id no existe.";
}
} else {
echo "Por favor, selecciona un producto.";
}}
?>
 
				
</body>

</html>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>