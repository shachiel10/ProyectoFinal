<?php
    // Verificar si el usuario ha iniciado sesión y es un administrador
    if (isset($_SESSION['nombre_usuario']) && $_SESSION['nombre_usuario'] == 'admin') {
      // Incluir el header para administradores
      include 'heder2.php';
    }else {
      // Incluir el header por defecto
      include 'heder.php';
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="Estilos/estilosCarrusel.css">
        <link rel="stylesheet" href="Estilos/estilosBody.css">
        <link rel="stylesheet" href="Estilos/EstilosProductos.css">
        <script defer src="Javascript/funcionesInicio.js"></script>
        <script src="Javascript/index.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <!-- Responsive design -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fin rd -->
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
        <!-- Fin fonts -->
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>
    <style>
        @media (max-width: 600px) {
      .tab1 td {
        display: block;
        width: 100%;
        box-sizing: border-box;
      }

      .tab1 td:nth-child(2) {
        margin-top: 10px;
      }
        /* Responsive design al video */
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Proporción de aspecto del video (9:16) */
            height: 0;
            overflow: hidden;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
         /* Arcoiris */
         .arcoiris {
            display: flex;
            height: 50;
            width: 100%; /* Ajusta el ancho según tus necesidades */
            overflow: hidden;
        }

        .arcoiris div {
            flex: 1;
            height: 100%;
        }
    }

    /*CUPON*/
    @keyframes animacionTitulo {
        0% { transform: scale(1); opacity: 0; }
        50% { transform: scale(1.2); opacity: 0.7; }
        100% { transform: scale(1); opacity: 1; }
    }

    .cupon {
        text-align: center;
        background-image: url('imagenes/Cupon2.jpeg'); /* Ruta de tu imagen */
        background-size: cover; /* Ajusta la imagen al tamaño del contenedor */
        background-repeat: no-repeat; /* Evita la repetición de la imagen */
        padding: 40px;
        border: 2px dashed #e44d26;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        max-width: 1400px;
        color: #e44d26;
        position: relative; /* Necesario para posicionar la imagen de manera absoluta */
    }

    h2.usuarios {
        font-family: 'Press Start 2P';
        font-size: 22px;
    }

    h2.descuento {
        font-size: 22px;
        animation: animacionTitulo 1.5s ease-in-out infinite; /* Repetir infinitamente */
    }

    .btnCup {
        display: inline-block;
        position: relative; /* Necesario para posicionar la imagen de manera absoluta */
        padding: 10px 50px;
        background-color: #e44d26;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
        font-size: 16px;
        z-index: 1; /* Asegura que el botón esté sobre la imagen */
    }
/*FIN CUPON*/

    </style>
    <body>
        <section id="container-slider">    
   <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
   <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
   <ul class="listslider">
     <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
     <li><a itlist="itList_1" href="#"></a></li>
     <li><a itlist="itList_2" href="#"></a></li>
     <li><a itlist="itList_3" href="#"></a></li>
     <li><a itlist="itList_4" href="#"></a></li>
   </ul>
   <ul id="slider">
     <li style="background-image: url('Media/kiss.webp'); z-index:0; opacity: 1;">
       <div class="content_slider" >
         <div>
           <h2>Lo mejor de KISS</h2>
       <p>Encuentra la mejor moda de KISS</p>
       <a href="https://www.migueltroyano.com" target="_blank" class="btnSlider">Comprar</a>
     </div>
       </div>
     </li>

     <li style="background-image: url('Media/mj.jpg'); ">
       <div class="content_slider" >
         <div>
           <h2>Michael Jackson</h2>
       <p>Viste como rey con Michael Jackson</p>
       <a href="https://www.migueltroyano.com" target="_blank" class="btnSlider">Comprar</a>
     </div>
       </div>
     </li>

     <li style="background-image: url('Media/gr.jpg'); ">
       <div class="content_slider" >
         <div>
           <h2>Guns & Roses</h2>
       <p>Busca lo mejor de guns n roses </p>
       <a href="https://www.migueltroyano.com" target="_blank" class="btnSlider">Comprar</a>
     </div>
       </div>
     </li>

     <li style="background-image: url('Media/lr.webp'); ">
        <div class="content_slider" >
          <div>
            <h2>Lionel Richards</h2>
        <p>Busca lo mejor de Lionel Richards </p>
        <a href="https://www.migueltroyano.com" target="_blank" class="btnSlider">Comprar</a>
      </div>
        </div>
      </li>
      <li style="background-image: url('Media/gr.jpg'); ">
        <div class="content_slider" >
          <div>
            <h2>guns n roses</h2>
        <p>Busca lo mejor de guns n roses </p>
        <a href="https://www.migueltroyano.com" target="_blank" class="btnSlider">Comprar</a>
      </div>
        </div>
      </li>

  </ul>
</section>

<!-- Compras en descuentos -->
<div class="desc" style="text-align: center; ">
    <br>
    <br>
    <br>
    <div class="arcoiris">
        <div class="rojo"></div>
        <div class="naranja"></div>
        <div class="amarillo"></div>
        <div class="verde"></div>
        <div class="azul"></div>
        <div class="violeta"></div>
      </div>
      <br>
    <H2 style="font-family: 'Press Start 2P';font-size: 22px;">COMPRA LA MEJOR ROPA EN DESCUENTO</H2>
    <br>
      <a href="https://www.migueltroyano.com" target="_blank" class="btnSlider">Comprar</a>
    <BR></BR>
    <div class="arcoiris">
        <div class="rojo"></div>
        <div class="naranja"></div>
        <div class="amarillo"></div>
        <div class="verde"></div>
        <div class="azul"></div>
        <div class="violeta"></div>
      </div>
      
    <br>
    <br>
    
</div>

<!-- CUPON 2 -->
<div class="cupon">
    <h2 class="usuarios">SOLO PARA NUEVOS USUARIOS</h2> 
    
    <a href="Cupones.php" target="_blank" class="btnCup"><h2 class="descuento">-30% EXTRA</h2> * Sin mínimos de compra</a> 
    <br>
    <img src="imagenes/clickhere.gif" alt="" style="width: 100px;">
</div>

<!-- Productos -->
<div class="container-items">
    <div class="item">
        <figure>
            <img
                src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Zapatos Nike</h2>
            <p class="price">$80</p>
            <button>Añadir al carrito</button>
        </div>
    </div>
    <div class="item">
        <figure>
            <img
                src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Audifonos</h2>
            <p class="price">$20</p>
            <button>Añadir al carrito</button>
        </div>
    </div>
    <div class="item">
        <figure>
            <img
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1099&q=80"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Reloj</h2>
            <p class="price">$50</p>
            <button>Añadir al carrito</button>
        </div>
    </div>
    <div class="item">
        <figure>
            <img
                src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Smartwatch</h2>
            <p class="price">$90</p>
            <button>Añadir al carrito</button>
        </div>
    </div>
    <div class="item">
        <figure>
            <img
                src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Perfume</h2>
            <p class="price">$50</p>
            <button>Añadir al carrito</button>
        </div>
    </div>
</div>

<script src="index.js"></script>
<!-- Fin de productos -->
<!-- Tabla con video -->
<table class="tab1">
    <tr>
      <td>
        <div class="video-container">
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/y5D_4cxbrnI?si=nipi-Zbe6SJyCPWy"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
        </div>
      </td>
      <td>
        <H1 style="font-family: 'Press Start 2P';font-size: 22px;">MODA OCHENTERA HOY</H1>
        <br>
        <P style="font-family: 'Inter', sans-serif; font-family: 'Open Sans', sans-serif;">
            Vestirse con la ropa de tu cantante favorito de los 80s es más que simplemente seguir una tendencia; es una forma de expresar tu admiración por la época dorada de la música y el estilo. Aquí en nuestra tienda, ofrecemos una amplia selección de accesorios y prendas de vestir inspiradas en los íconos de la música de los 80s.
        </P>
        <p style="font-family: 'Open Sans', sans-serif;">
            ¿Por qué elegir la moda de los 80s? Los años 80 fueron una época de expresión audaz y creatividad en la moda. Los cantantes y artistas de esa década no solo influyeron en la escena musical, sino que también dejaron una marca indeleble en el mundo de la moda. Desde los atuendos llamativos de Madonna hasta los conjuntos vibrantes de Prince, cada prenda cuenta una historia única de la vibrante cultura de esa época.
        </p>
      
      </td>
    </tr>
  </table>


    </body>
    
</html>