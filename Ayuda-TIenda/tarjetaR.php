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
        <h1 id ="titulo2DP">GIFT CARDS  <span>Nostalgia Notes</span> </h1>
        <h2 id = "titulo3DP"><span>"Rock Legends Closet"</span> <span></span></h2>
        <p><sup></sup></p>
        </div>

    <header>
        <h1>Tarjetas de regalo</h1>
    </header>
    <br>
    <img src="imagenes/GiftCard.jpeg" alt="" style="width: 100%;">

    <section>
    <h1>¿Buscas el regalo perfecto? Las tarjetas de regalo son siempre la mejor opción. Ya sea que ese alguien especial sueñe con renovar su guardarropa o esté en la búsqueda de una pieza que complemente su look, una tarjeta de regalo le dará una infinidad de opciones. </h1>
    </section>

    <section>
        <h2 onclick="toggleAnswer('answer1')">Comprar tarjetas de regalo en línea – todo lo que necesitas saber.</h2>
        <p id="answer1">¿Dónde puede ser usada una tarjeta de regalo digital? Las tarjetas de regalo digitales pueden ser utilizadas en cualquier tienda en el interior de la República Mexicana. <br>
            Puedes usar tu tarjeta de regalo para hacer el pago completo de tu compra o de forma parcial. <br>
            
            El monto aplicado a tu compra será deducido de tu tarjeta de regalo y cualquier saldo restante se mostrará en tu ticket de compra. <br>
            
            Las tarjetas de regalo, tanto físicas como digitales, son recargables, para agregar saldo visita cualquiera de nuestras tiendas. <br>
            
            Ten en cuenta que tu información personal será compartida con vendedores terceros para las compras de tarjetas de regalo digitales. </p>
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