<?php
 include 'heder.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/estilosayuda.css">
    <link rel="stylesheet" href="Estilos/EstilosProductos.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="tu-integridad" crossorigin="anonymous" />
    <title>Atencion al cliente</title>
</head>
<body>
<div id = "tituloDP">
        <h1 id ="titulo2DP">PAGOS  <span>Nostalgia Notes</span> </h1>
        <h2 id = "titulo3DP"><span>"Rock Legends Closet"</span> <span></span></h2>
        <p><sup></sup></p>
        </div>

    <header>
        <h1>Pagos</h1>
    </header>

    <section>
    <h1>Ofrecemos un plazo de 30 días naturales siguientes a la compra para la devolución de cualquier artículo. Para las compras en línea puedes realizar tu devolución en tiendas físicas o a través de paquetería. Si deseas hacer una devolución por paquetería, asegúrate de revisar las instrucciones de envío en nuestra sección de Devoluciones de compras en línea. </h1>
    </section>

    <section>
        <h2 onclick="toggleAnswer('answer1')">1. Pagos con tarjeta</h2>
        <p id="answer1">Aceptamos tarjetas VISA, MasterCard, Carnet Card y American Express.
            <br><br>
            Por tu seguridad, las transacciones son encriptadas
            
            Nuestra tienda garantiza que toda la información que nos compartes se maneja de forma completamente segura. Toda la información se envía encriptada para garantizar la seguridad completa de cualquier información confidencial. </p>

        <h2 onclick="toggleAnswer('answer2')">2. PayPal</h2>
        <p id="answer2"> Para realizar tu pago se necesitarás solo algunos pasos <br><br>

            1. Durante el proceso de pago, selecciona PayPal como tu método de pago. <br>
            2. Para continuar con el pago, se te enviará al sitio web de PayPal. <br>
            3. Si ya eres cliente de PayPal, puedes iniciar sesión con tus claves de usuario y confirmar el pago. Si no eres cliente de PayPal, puedes crear una cuenta en PayPal y luego confirmar el pago. <br>
            4. Volverás a la página de inicio y tu pedido y pago se habrán procesado con éxito.</p>

        <h2 onclick="toggleAnswer('answer3')">3. Tarjetas de regalo</h2>
        <p id="answer3">Puedes utilizar nuestras Tarjetas de Regalo físicas y nuestras Tarjetas de regalo electrónicas en cualquier tienda Online. <br>
            Puedes utilizar una Tarjeta de Regalo para pagar todo tu pedido o en combinación con cualquier otro método de pago. </p>
    </section>

    <section id="iconos">
        <div class="icon">
            <div>
                <i class="fas fa-truck-fast fa-6x"></i><br><a href="entrega.php">Entregas</a>
            </div>
            <div>
                <i class="fas fa-rotate-left fa-6x"></i><br><a href="devolucion.php">Devoluciones</a>
            </div>
            <div>
                <i class="fab fa-paypal fa-6x"></i><br><a href="pago.php">Pagos</a>
            </div>
            <div>
                <i class="fas fa-gift fa-6x"></i><br><a href="tarjetaR.php">Tarjetas de Regalo</a>
            </div>
        </div>
    </section>

    <h5 id="msj">Estamos aquí para ayudarte si tienes cualquier pregunta o necesitas ayuda con tu pedido. <a href="contacto.php">Contáctanos</a><br><br>

        Si tienes dudas con respecto a tu información personal, o sobre las instrucciones para obtener acceso o eliminar la información que almacenamos de ti, consulta nuestro Aviso de Privacidad. </h5>

    <script>
        function toggleAnswer(answerId) {
            var answer = document.getElementById(answerId);
            answer.style.display = (answer.style.display === 'none' || answer.style.display === '') ? 'block' : 'none';
        }
    </script>

</body>
</html>