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
        <h1 id ="titulo2DP">AYUDA  <span>Nostalgia Notes</span> </h1>
        <h2 id = "titulo3DP"><span>"Rock Legends Closet"</span> <span></span></h2>
        <p><sup></sup></p>
        </div>
    
    
    <header>
        <h1>Atencion al Cliente</h1>
    </header>

    <section>
        <h2 onclick="toggleAnswer('answer1')">1. ¿Cómo realizar una compra?</h2>
        <p id="answer1">Para realizar una compra, sigue estos pasos:<br>
            - Explora nuestra selección de artículos de artistas de los 80's.<br>
            - Haz clic en el producto que te interesa para ver más detalles.<br>
            - Selecciona la cantidad y añade el producto al carrito.<br>
            - Revisa tu carrito y procede al proceso de pago.<br>
            - Completa la información de envío y realiza el pago.</p>

        <h2 onclick="toggleAnswer('answer2')">2. ¿Cuáles son los métodos de pago aceptados?</h2>
        <p id="answer2">Aceptamos los siguientes métodos de pago:<br>
            - Tarjeta de crédito<br>
            - PayPal<br>
            - Transferencia bancaria</p>

        <h2 onclick="toggleAnswer('answer3')">3. ¿Cómo puedo realizar un seguimiento de mi pedido?</h2>
        <p id="answer3">Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con un enlace de seguimiento.</p>

        <h2 onclick="toggleAnswer('answer4')">4. ¿Cómo devolver un artículo?</h2>
        <p id="answer4">Para devolver un artículo, ponte en contacto con nuestro servicio de atención al cliente y te proporcionaremos las instrucciones necesarias.</p>

        <h2 onclick="toggleAnswer('answer5')">5. ¿Puedo cambiar o cancelar mi pedido?</h2>
        <p id="answer5">Para cambiar o cancelar un pedido, comunícate con nosotros lo antes posible. Ten en cuenta que una vez que el pedido ha sido enviado, no se puede cancelar.</p>
        
        <h2 onclick="toggleAnswer('answer6')">6. ¿Cuánto tiempo tarda en llegar mi pedido?</h2>
        <p id="answer6">El tiempo de entrega puede variar, pero generalmente los pedidos se entregan dentro de 5-7 días hábiles después de la compra.</p>

        <h2 onclick="toggleAnswer('answer7')">7. ¿Hay opciones de envío express?</h2>
        <p id="answer7">Sí, ofrecemos opciones de envío express por un costo adicional. Puedes seleccionar la opción durante el proceso de pago.</p>

        <h2 onclick="toggleAnswer('answer8')">8. ¿Qué debo hacer si mi artículo llega dañado?</h2>
        <p id="answer8">Si tu artículo llega dañado, por favor, contáctanos inmediatamente y te ayudaremos a resolver el problema y procesar una devolución si es necesario.</p>

        <h2 onclick="toggleAnswer('answer9')">9. ¿Ofrecen descuentos para compras a granel?</h2>
        <p id="answer9">Sí, ofrecemos descuentos para compras a granel. Ponte en contacto con nuestro equipo de ventas para obtener más información.</p>

        <h2 onclick="toggleAnswer('answer10')">10. ¿Cómo puedo contactar al servicio al cliente?</h2>
        <p id="answer10">Puedes contactarnos a través de nuestro formulario de contacto en línea o llamando a nuestro servicio de atención al cliente al número proporcionado en la página de contacto.</p>
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
