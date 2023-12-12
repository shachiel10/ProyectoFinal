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
    <title>Atención al Cliente</title>
    
</head>
<body>
<div id = "tituloDP">
        <h1 id ="titulo2DP">DEVOLUCIONES  <span>Nostalgia Notes</span> </h1>
        <h2 id = "titulo3DP"><span>"Rock Legends Closet"</span> <span></span></h2>
        <p><sup></sup></p>
        </div>
    
    
    <header>
        <h1>Devoluciones</h1>
    </header>

    <section>
        <h1>Ofrecemos un plazo de 30 días naturales siguientes a la compra para la devolución de cualquier artículo. Para las compras en línea puedes realizar tu devolución en tiendas físicas o a través de paquetería. Si deseas hacer una devolución por paquetería, asegúrate de revisar las instrucciones de envío en nuestra sección de Devoluciones de compras en línea. </h1>
    </section>

    <section>
        <h2 onclick="toggleAnswer('answer1')">1. ¿Cómo puedo hacer una devolución de compras online?</h2>
        <p id="answer1">Para hacer una devolución: <br><br>

            1. Encuentra la nota de entrega incluida dentro de tu pedido, en la parte inferior de la hoja, encontrarás el Formulario de Devolución donde solo tienes que rellenar las casillas. Dentro de estas casillas encontrarás una lista de códigos con las razones más comunes de devolución, en el cual deberás especificar la razón (número de código) de la devolución, por ejemplo, Código de Devolución #2 - No es lo que esperaba.
            <br><br>
            2. Puedes recortar la parte inferior de tu nota de entrega donde se encuentra el Formulario de Devolución y colocarlo adentro del paquete que vayas a utilizar para enviar los artículos a devolver. Por último, coloca la guía adhesiva de Estafeta en una parte visible en el exterior de tu paquete. Asegúrate de remover cualquier guía original o usada del paquete.</p>

        <h2 onclick="toggleAnswer('answer2')">2. ¿Cómo puedo hacer un cambio o devolución de mi compra en tienda?</h2>
        <p id="answer2"> Puedes realizar el cambio o devolución en cualquiera de nuestras tiendas a nivel nacional. La mercancía tiene que ser devuelta en las mismas condiciones en la que fue adquirida.</p>

        <h2 onclick="toggleAnswer('answer3')">3. ¿Cómo se me hara el reembolso?</h2>
        <p id="answer3">Reembolsaremos el valor de los artículos que devolviste, al mismo método de pago que utilizaste inicialmente para hacer la compra, en el transcurso de los 14 días posteriores a la recepción de tu paquete de devolución. <br><br>
            Tarjeta <br>
            Si pagaste con tarjeta, te reembolsaremos el saldo en la tarjeta que utilizaste originalmente.
            <br><br>
            PayPal <br>
            Si pagaste con PayPal, te reembolsaremos el saldo en tu cuenta de PayPal.
            <br><br>
            Tarjeta de Regalo <br>
            Monto total pagado con Tarjeta de Regalo
            Si deseas devolver artículos que fueron pagados utilizando únicamente las tarjetas de regalo, te emitiremos una tarjeta de regalo electrónica con un saldo actualizado, incluso si pagaste con una tarjeta de regalo física. Recibirás tu nueva tarjeta E-Gift por correo electrónico.</p>
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