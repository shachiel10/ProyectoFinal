<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion de pedido</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }i{
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    p{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
        text-align: center;
    }h3{
        text-align: center;
        font-size: 30px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

    }footer{
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1em;
    }
    .header1 {
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
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        display: block;
        margin-bottom: 8px;
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
}h2#titulo3DP span:first-child {
font-size: 7.5rem;
font-weight: 900;
}h2#titulo3DP span:last-child {
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
}img{
text-align: center;
display: block;
margin: 0 auto;
width: 120px;
height: auto;
}
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid rgb(255, 255, 255);
    padding: 8px;
    text-align: center;
}
form {
    display: flex;
    flex-direction: column;
    max-width: 300px; /* Ancho máximo para mejorar la presentación */
    margin: auto; /* Centrar el formulario en la página */
}

label {
    margin-bottom: 7px;
}

input,select {
    margin-bottom: 10px;
    padding: 5px;
}

input[type="submit"] {
    background-color: #4f9351;
    color: white;
    cursor: pointer;
}
#map {
    height: 400px;
    width: 100%;
  }
    /* Agrega estilos CSS según sea necesario */
    .logo{
        width: 215px;
        Left: 40px;
        padding: 20px 0px 0;
        margin-bottom: -15px;
    }


    .logo-text {
        display: inline-block;
        padding: 0 20px 20px;
        font-size: 75px;
        font-family: Broadway, sans-serif;
        margin-bottom: 55px;
        text-shadow: white 10px 5px 0, white 5px 2px 0,
        black 3px 3px 0, black 4px 4px 0,
        white 5px 5px 0;
        margin-left: 500px;
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




</style>
</head>

<header>
        
    <div class="logo-img">
        <img class="logo" src="img/header.jpeg">
            <span class="logo-text">
                NOSTALGIA NOTES
            </span>
    </div>
    <li class="menu">
        <a href="#" class="menu-shop">INICIO</a>
    </li>
    
    <li class="menu">
        <a href="#" class="menu-shop">ACERCA DE</a>
    </li>
     
    <li class="menu">
        <a href="#" class="menu-shop">AYUDA</a>
    </li>
    
    <li class="menu"> 
        <a href="#" class="menu-shop">CONTACTO</a>
    </li>
    
    <li class="menu">
        <a href="#" class="menu-shop">TIENDA</a>
    </li>
    
    <li class="menu">
        <a href="#" class="menu-shop">INICIAR SESION</a>
    </li>
    <div class="container-icon">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 904 94"
                stroke-width="1.5"
                stroke="currentColor"
                class="icon-cart"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                />
            </svg>
            <div class="count-products">
                <span id="contador-productos"></span>
            </div>

            <div class="container-cart-products hidden-cart">
                <div class="cart-product">
                    <div class="info-cart-product">
                        <span class="cantidad-producto-carrito"></span>
                        <p class="titulo-producto-carrito"></p>
                        <span class="precio-producto-carrito"></span>
                    </div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 904 94"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="icon-close"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </div>
            </div>
        </div>          
<!---->
</header>

<body>
<!-- <div id = "tituloDP">
    <h1 id ="titulo2DP">Los 80's </h1>
    <h2 id = "titulo3DP"><span>&nbsp;&nbsp;"Nostalgia"&nbsp;&nbsp;</span> <span></span></h2>
    <p><sup></sup></p>
    </div> -->


    <h1 class="header1">Confirmacion de pedido</h1>
<body>
<section>
    <div>
        <h3>Direccion de envio</h3>  
        <p id="demo">Ubicación donde llegara el pedido.</p>

        <button onclick="getLocation()">Ubicación</button>
        
        <script>
        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
          } else {
            document.getElementById("demo").innerHTML = "Geolocalización no es soportada por este navegador.";
          }
        }
        
        function showPosition(position) {
          var latitud = position.coords.latitude;
          var longitud = position.coords.longitude;
        
          // Crear un enlace al mapa de OpenStreetMap con las coordenadas de latitud y longitud.
          var mapaEnlace = "https://www.openstreetmap.org/?mlat=" + latitud + "&mlon=" + longitud;
        
          // Puedes personalizar el texto del enlace como desees.
          var ubicacionActual = "Ubicación: <a href='" + mapaEnlace + "' target='_blank'>Ver en el mapa</a>";
        
          document.getElementById("demo").innerHTML = ubicacionActual;
        }
        
        function showError(error) {
          switch(error.code) {
            case error.PERMISSION_DENIED:
              document.getElementById("demo").innerHTML = "Permiso denegado para obtener la ubicación.";
              break;
            case error.POSITION_UNAVAILABLE:
              document.getElementById("demo").innerHTML = "Información de ubicación no disponible.";
              break;
            case error.TIMEOUT:
              document.getElementById("demo").innerHTML = "La solicitud para obtener la ubicación ha expirado.";
              break;
            case error.UNKNOWN_ERROR:
              document.getElementById("demo").innerHTML = "Error desconocido al obtener la ubicación.";
              break;
          }
        }
        </script>
        <br>
    </div>

    <div>
        <table>
        <tr>
        <th colspan="2"><h3>Selecciona el tipo de envio</h3></th><br>
    </tr>
    <tr>
        <td><label><input type="radio" name="envio" value="estandar" checked> Envío Estándar</label></td>
        <td><label><input type="radio" name="envio" value="express"> Envío Express</label></td>
    </tr>
    <tr>
    <td>
                    <?php
                    $fechaActual = new DateTime();
                    $diasAgregados = rand(10, 15);
                    $fechaActual->add(new DateInterval("P{$diasAgregados}D"));
                    $fechaFormateada = $fechaActual->format('Y-m-d');
                    echo "Fecha estimada de entrega: $fechaFormateada";
                    ?>
                </td>
        <td> <?php
                    // Precio base de envío
                    $precioEnvio = 35;

                    // Si es envío express, añadir el costo extra
                    if (isset($_POST['envio']) && $_POST['envio'] === 'express') {
                        $precioEnvio += 30; // Añadir $30 adicionales al envío express
                    }

                    echo "Costo extra de {$precioEnvio}";
                    ?>
        </td> 
    </tr>
    <tr>
     <td colspan="2"><br><br><label><input type="checkbox" name="envio"> Garantía del envío $MXN19.00</label></td>
    </tr></table>
    </div>

<br><br><br>

<div>
<form method="post">
        <label for="cupon">Código de cupón:</label>
        <input type="text" id="cupon" name="cupon">
        <button type="submit">Aplicar cupón</button>
    </form><br><br><br>

<h3>Resumen del pedido</h3>
<?php 
        // Precio del producto
        $precioProducto = 0;
        echo "<p>Precio del producto: $" . number_format($precioProducto, 2) . "</p>";

        // Precio de envio
        $precioEnvio = 0;
        echo "<p>Precio del envio: $" . number_format($precioEnvio, 2) . "</p>";

        // Precio de garantía
        $precioGarantia = isset($_POST['garantia']) ? 19 : 0;
        echo "<p>Garantía de envío: $" . number_format($precioGarantia, 2) . "</p>";

        // Descuento (si tienes alguna lógica para aplicar descuentos)
         $descuento = 0;
        // echo "<p>Descuento: $" . number_format($descuento, 2) . "</p>";

        // Capturar código de cupón
        $cupon = isset($_POST['cupon']) ? $_POST['cupon'] : '';

        // Verificar si el código de cupón es válido y aplicar el descuento
         if ($cupon === 'DESCUENTO123') {
             $descuentoCupon = 10; // Ajusta el descuento según tus necesidades
             echo "<p>Descuento por cupón ($cupon): -$" . number_format($descuentoCupon, 2) . "</p>";
        //     $descuento += $descuentoCupon;
         } else {
             echo "<p>Descuento por cupón: $0.00</p>";
         }



        // Cálculo del total
        $total = $precioProducto + $precioEnvio + $precioGarantia - $descuento;
        echo "<p>Total: $" . number_format($total, 2) . "</p>";
        

    // Determinar el país (puedes obtenerlo del usuario o de algún otro modo)
    $pais = "País A"; // Ejemplo: Obtén el país de alguna variable o formulario

    // Aplicar impuestos según el país
    $impuestoPorcentaje = 0;

    switch ($pais) {
        case "País A":
            $impuestoPorcentaje = 0.16; // 16% de impuesto
            break;

        case "País B":
            $impuestoPorcentaje = 0.10; // 10% de impuesto
            break;

    }

    $impuesto = $total * $impuestoPorcentaje;
    $totalConImpuestos = $total + $impuesto;

    echo "<p>Impuesto ($impuestoPorcentaje * 100%): $" . number_format($impuesto, 2) . "</p>";
    echo "<p>Total con impuestos: $" . number_format($totalConImpuestos, 2) . "</p>";
?>


<button id="continuarPago">Continuar con el pago</button>
</div>
<script>
            document.getElementById('continuarPago').addEventListener('click', function() {
                // Abrir una nueva página con el formulario para la tarjeta de crédito
                window.open('formulario_tarjeta_credito.html', '_blank');
            });

            // Obtener elementos del DOM
            var envioEstandarRadio = document.querySelector('input[name="envio"][value="estandar"]');
            var envioExpressRadio = document.querySelector('input[name="envio"][value="express"]');
            var garantiaCheckbox = document.getElementById('garantiaCheckbox');
            var costoEnvioSpan = document.getElementById('costoEnvio');

            // Event listener para el cambio en el tipo de envío
            envioEstandarRadio.addEventListener('change', actualizarCostoEnvio);
            envioExpressRadio.addEventListener('change', actualizarCostoEnvio);

            // Event listener para el cambio en la opción de garantía
            garantiaCheckbox.addEventListener('change', actualizarCostoEnvio);

            // Función para actualizar dinámicamente el costo de envío
            function actualizarCostoEnvio() {
                var precioEnvio = 35;

                if (envioExpressRadio.checked) {
                    precioEnvio += 20; // Supongamos que el envío express tiene un costo adicional de $20
                }

                if (garantiaCheckbox.checked) {
                    precioEnvio += 19; // Costo de la garantía
                }

                costoEnvioSpan.textContent = 'Costo extra de $MXN' + precioEnvio;
            }
        </script>
<script>
    // Actualiza dinámicamente la fecha de vencimiento
    document.querySelector('[name="fecha_vencimiento"]').addEventListener('input', function(event) {
        var inputValue = event.target.value;
        if (inputValue.length === 2 && !inputValue.includes('/')) {
            event.target.value = inputValue + '/';
        }
    });
</script>
<br>
</section>
<br><br></body>
<footer>
        <div>
            <p>&copy; 2023 Nostalgia Notes. Todos los derechos reservados.</p>
        </div>
    </footer>
</html>
