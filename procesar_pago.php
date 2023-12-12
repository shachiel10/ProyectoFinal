<style>
    body {
        font-family:Arial, Helvetica, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        font-size: 25px; /* Puedes ajustar el tamaño base de la fuente según tus necesidades */
    }

    section {
        font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center; /* Alinea el contenido al centro */
    }

    h1.header1 {
        font-size: 36px; /* Tamaño más grande para h1 */
        font-weight: bold; /* Negrita */
        margin-bottom: 20px; /* Ajusta el espacio inferior */
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
}div#tituloDP > * {
padding: 1rem;
}h1#titulo2DP {
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
}h2#titulo3DP + p {
align-self: end;
font-size: .875rem;
font-weight: 500;
line-height: 1.1;
max-inline-size: 28ch;
position: relative;
isolation: isolate;
background-color: var(--aqua);
}h2#titulo3DP + p::before {
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
}table {
    width: 100%;
    border-collapse: collapse;
}th, td {
    border: 1px solid rgb(255, 255, 255);
    padding: 8px;
    text-align: center;
}form {
    display: flex;
    flex-direction: column;
    max-width: 300px; /* Ancho máximo para mejorar la presentación */
    margin: auto; /* Centrar el formulario en la página */
}label {
    margin-bottom: 7px;
}input,select {
    margin-bottom: 10px;
    padding: 5px;
}input[type="submit"] {
    background-color: #4f9351;
    color: white;
    cursor: pointer;
}.colors {
        display: flex;
        gap: 5px;
        margin-bottom: 10px;  
}.color-square {
        width: 20px;
        height: 20px;
        border: 3px solid #000000;
        cursor: pointer;
}.add-to-cart {
        background-color: #75a777;
        color: rgb(0, 0, 0);
        padding: 15px;
        border: none;
        cursor: pointer;
        width: 100%;
    }.add-to-cart:hover {
        background-color: #9fe3a2;
    }.product-card:hover img {
        transform: scale(1.1);
    }/* Carrusel */
    .carousel {
        max-width: 330px;
        margin: 0 auto;
    }.carousel img {
        width: 100%;
        height: auto;
    }/* Agrega estilos CSS según sea necesario */
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
}.menu {
    display: inline;
    list-style: none;
    padding: 10px 25px 0;
    
    
}.menu-shop {
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
    <h1 class="header1">Pago con Tarjeta</h1>


<body>
<section>
<br><br>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Funciones de validación (puedes personalizar según tus necesidades)

    // Validar número de tarjeta (16 dígitos numéricos)
    function validar_numero_tarjeta($numero_tarjeta) {
        return is_numeric($numero_tarjeta) && strlen($numero_tarjeta) === 16;
    }

    // Validar fecha de vencimiento (formato MM/AA y fecha futura)
    function validar_fecha_vencimiento($fecha_vencimiento) {
        $partes = explode('/', $fecha_vencimiento);
        if (count($partes) === 2) {
            $mes = intval($partes[0]);
            $anio = intval($partes[1]);
            $anio_actual = date('y');
            return $mes >= 1 && $mes <= 12 && $anio >= $anio_actual && $anio <= $anio_actual + 10;
        }
        return false;
    }

    // Recoger datos del formulario
    $nombre_titular = $_POST["nombre_titular"];
    $numero_tarjeta = $_POST["numero_tarjeta"];
    $fecha_vencimiento = $_POST["fecha_vencimiento"];
    $codigo_seguridad = $_POST["codigo_seguridad"];

    // Validación de campos
    if (empty($nombre_titular) || empty($numero_tarjeta) || empty($fecha_vencimiento) || empty($codigo_seguridad)) {
        die("Error: Por favor, complete todos los campos del formulario.");
    }

    // Validar número de tarjeta y fecha de vencimiento
    if (!validar_numero_tarjeta($numero_tarjeta) || !validar_fecha_vencimiento($fecha_vencimiento)) {
        die("Error: Por favor, proporcione información válida en los campos de tarjeta y fecha de vencimiento.");
    }

    // Mostrar detalles del pago
    echo "Nombre del Titular: $nombre_titular <br>";
    echo "Número de Tarjeta: $numero_tarjeta <br>";
    echo "Fecha de Vencimiento: $fecha_vencimiento <br><br><br>";

    echo "Se validó su pago <br>";
    echo "¡Gracias por su compra!";
}
?> <br><br><br>
</section><br><br>
<footer>
    <div>
        <p>&copy; 2023 Nostalgia Notes. Todos los derechos reservados.</p>
    </div>
</footer>