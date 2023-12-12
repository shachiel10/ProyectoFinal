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
    <title>Entregas</title>
    
</head>
<body>
<div id = "tituloDP">
        <h1 id ="titulo2DP">ENTREGAS  <span>Nostalgia Notes</span> </h1>
        <h2 id = "titulo3DP"><span>"Rock Legends Closet"</span> <span></span></h2>
        <p><sup></sup></p>
        </div>
    
    
    <header>
         <h1>Entregas</h1>
    </header>

    <section>
        <h1>Elige la opción de envío que mejor te convenga. Ten en cuenta que tu pedido puede llegar en varios paquetes y esto no generará cargos adicionales.</h1>
</section>

    <section>
        <h2 onclick="toggleAnswer('answer1')">1. ¿Quién me entrega mi paquete?</h2>
        <p id="answer1">Entregamos a personas mayores de 18 años y que tengan domicilio en México. Las entregas están disponibles en la mayoría de las direcciones en México. 
            Ten en cuenta que algunas zonas pueden estar excluidas de las entregas. Te lo notificaremos durante el proceso de pago. Puedes cambiar la dirección de entrega y/o agregar una nueva en la página de pago, antes de finalizar tu compra.</p>

        <h2 onclick="toggleAnswer('answer2')">2. ¿Cuáles son los métodos de pago aceptados?</h2>
        <p id="answer2">Nuestra tienda trabaja en colaboración con un gran número de transportistas provenientes de diferentes mercados. En México, colaboramos con:
            Estafeta, 99 minutos y Paquetexpress.</p>

        <h2 onclick="toggleAnswer('answer3')">3. Entrega estándar de 7 a 9 días hábiles</h2>
        <p id="answer3">La entrega estándar tiene un costo de $90.00 MXN y los pedidos se entregarán en el transcurso de 7  a 9 días hábiles después de que recibas tu confirmación de pedido. Espera algunos días adicionales si vives en un área rural.
            Durante la temporada alta y la temporada de ofertas, la entrega puede tardar un poco más.</p>

        <h2 onclick="toggleAnswer('answer4')">4. ¿Puedo cancelar o modificar mi pedido?</h2>
        <p id="answer4">Comenzamos a procesar tu pedido rápidamente, lo que significa que no podemos hacer ningún cambio una vez que este se confirma. Esto incluye cambiar la dirección de envío o la opción de entrega. 
            Sin embargo, es posible que puedas cancelar tu pedido y hacer uno nuevo, ya que tenemos un breve periodo de gracia después de que el pedido se confirma. </p>

        <h2 onclick="toggleAnswer('answer5')">5. Rastrea tu pedido</h2>
        <p id="answer5">Tan pronto como comencemos a empaquetar tu pedido, te enviaremos un correo electrónico con la confirmación del envío, los detalles de la entrega y un enlace para que hagas el seguimiento de tu paquete en línea.</p>
        
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
