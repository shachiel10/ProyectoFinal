<?php
session_start();

// Verificar si se ha enviado el formulario de inicio de sesión
if (isset($_POST['submit'])) {
    // Conectar a la base de datos (ajusta estos valores según tu configuración)
    $conexion = new mysqli("localhost", "root", "", "login");

    // Verificar la conexión a la base de datos
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Recuperar las credenciales del formulario
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Realizar una consulta para verificar las credenciales del usuario
    $consulta = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($consulta);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if ($resultado->num_rows == 1) {
        // Obtener la información del usuario
        $fila = $resultado->fetch_assoc();
        $nombre_usuario = $fila['nombre_usuario'];

        // Almacenar el nombre de usuario en la variable de sesión
        $_SESSION['nombre_usuario'] = $nombre_usuario;
    } else {
        // Mostrar un mensaje de error o realizar alguna acción en caso de credenciales incorrectas
        echo "Credenciales incorrectas";
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}

// Resto de tu código HTML
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.jpeg">
    <title>HOLA</title>
    <style>
        /* Agrega estilos CSS según sea necesario */
        .logo{
            width: 215px;
            Left: 40px;
            padding: 20px 0px 0;
            margin-bottom: -15px;
        }

        body {
            margin: 0;
            padding: 0;

            background-color: #f5f5f5;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .logo-img {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 150px;
            margin-right: 20px;
        }

        .logo-text {
            display: inline-block;
            font-size: 24px;
            font-family: 'Broadway', sans-serif;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .menu {
            display: inline;
            list-style: none;
            padding: 10px 25px 0;
        }

        .menu-shop {
            color: #000000;
            text-decoration: none;
            font-size: 30px;
            font-weight: bold;
            margin-left: 100px;
        }

        /*CUP*/
        .cupones-container {
        display: flex;
        justify-content: space-around;
    }

    .cupon {
        text-align: center;
        background-image: url('imagenes/Cupon2.jpeg'); /* Ruta de tu imagen */
        background-size: cover; /* Ajusta la imagen al tamaño del contenedor */
        background-repeat: no-repeat; /* Evita la repetición de la imagen */
        padding: 40px 100px;
        border: 2px dashed #e44d26;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        max-width: 1400px;
        color: #e44d26;
        position: relative; /* Necesario para posicionar la imagen de manera absoluta */
        overflow: hidden;
    }

    .usuarios {
        font-size: 50px;
        color: #000;
        text-shadow: 0 0 10px #fff; /* Añadir contorno blanco */
        margin-bottom: 10px;
    }

    .descuento {
        font-size: 18px;
        color: #000;
        background-color: #bbdefb;
        text-shadow: 0 0 10px #fff; /* Añadir contorno blanco */
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
    }

    .descuento::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        width: 0;
        height: 100%;
        background-color: #fff;
        transform: translateX(-50%);
        z-index: -1;
        transition: width 0.3s;
    }

    .cupon:hover .descuento::before {
        width: 100%;
    }

    </style>
</head>
<body>

    <heder>
         <section>
         <div class="logo-img">
            <img class="logo" src="imagenes/header.jpeg">
                <span class="logo-text">
                    BIENVENIDO/A <br>
                    A NOSTALGIA NOTES
                </span>
        </div>
         </section>   

    
        <div>
            <h1 style="text-align: center;">Moda Ochentera Hoy</h1>
        </div>
       
        
        <li class="menu">
            <a href="index.php" class="menu-shop">INICIO</a>
        </li>
        
        <li class="menu">
            <a href="acercade.php" class="menu-shop">ACERCA DE</a>
        </li>
         
        <li class="menu">
            <a href="ayuda.php" class="menu-shop">AYUDA</a>
        </li>
        
        <li class="menu"> 
            <a href="contacto.php" class="menu-shop">CONTACTO</a>
        </li>
        
        <li class="menu">
            <a href="tienda.php" class="menu-shop">TIENDA</a>
        </li>
        
        <li class="menu">
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['nombre_usuario'])) {
                // Mostrar el nombre del usuario en lugar del enlace de inicio de sesión
                echo '<a href="logout.php" class="menu-shop"><span class="menu-shop">' . $_SESSION['nombre_usuario'] . '</span></a>';
            } else {
                // Mostrar el enlace de inicio de sesión
                echo '<a href="mostrarCaptcha.php" class="menu-shop">INICIAR SESION</a>';
            }
            ?>
        </li>
    </heder>

    <div class="cupones-container">
    <div class="cupon">
        <h1 class="usuarios">-30%</h1>
        <h3 class="descuento">extra en tu primer pedido</h3>
        <h3 class="descuento">*Sin mínimo de compra</h3>
        <h3 class="descuento" style="background-color:#0000ff">Código: AGBPSM</h3>
        <h3 class="descuento">*30 días después de validez</h3>
        <h3 class="descuento">después del registro</h3>
    </div>

    <div class="cupon">
        <h1 class="usuarios">DATE PRISA!!</h1>
        <h3 class="descuento">No querrás perderte las increíbles ofertas que <br>
            tenemos preparadas para ti. <br>
            ¡Obtén un descuento del 30% en tu primer pedido! 😍 <br>
            Es nuestra manera de darte la bienvenida a la familia de compradores felices.</h3>
    </div>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        // Obtén referencias a los elementos relevantes del carrito
        const contadorProductos = document.getElementById("contador-productos");

        // Inicializa el contador
        let contador = 0;

        // Función para actualizar el contador
        function actualizarContador() {
            contador++;
            contadorProductos.textContent = contador;
        }

        // Agrega un listener a todos los botones "Agregar al carrito"
        const botonesAgregar = document.querySelectorAll('.add-to-cart');
        botonesAgregar.forEach(function (boton) {
            boton.addEventListener('click', function () {
            // Aquí podrías realizar otras acciones, como agregar el producto al carrito
            // Pero por ahora, solo actualizaremos el contador
            actualizarContador();
            });
        });
        });
    </script>
</body>
</html>

