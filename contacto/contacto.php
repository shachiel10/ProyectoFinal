<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioDOFI</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e99f285ffc.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
  }        i{
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
}.product-grid {
            display: grid;
            padding: 0px;
            grid-template-columns: repeat(3, 1fr);
            gap: 65px;
}.product-card {
            position: relative;
            overflow: hidden;
            border: 2px solid rgba(71, 52, 52, 0);
            padding: 0px;
            max-width: 330px;
            max-height: 800px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }.product-card img {
            max-width: 100%;
            height: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 9px;  
            transition: transform 0.3s ease-in-out;
        }.product-card h2 {
            font-size: 19px;
            margin-bottom: 0px;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
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
        }



        

        /* Estilos adicionales para hacer responsive */
        @media only screen and (max-width: 600px) {
            input[type="text"],
            input[type="email"],
            textarea {
                width: 100%;
            }
        }
    </style>








</head>
<body>  
<div id = "tituloDP">
        <h1 id ="titulo2DP">Nostalgia </h1>
        <h2 id = "titulo3DP"><span>"Contactanos"</span> <span></span></h2>
        <p><sup></sup></p>
        </div>
    <div class="container"><br><br><br><br>
    <i class="fa-solid fa-circle-user">  Tienes alguna duda envianos un correo y enseguida te responderemos </i>
        <br><br>
        <form action="enviar_correo.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" name="mensaje" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form><br><br><br>
        <table style="margin: 0 auto;">
            <th>
            <div id="mapa" styles="text-align=center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4054.2943805111213!2d-102.29278460345238!3d21.921314932901204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee66c314de7d%3A0xdff547d2b8c845ce!2sCentro%20Comercial%20Altaria!5e0!3m2!1ses-419!2smx!4v1701154188258!5m2!1ses-419!2smx" width="560" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </i></div>
            </th>
            <th>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa-solid fa-phone">   01.800.OC7AS(99945).99 </i>  <br><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa-solid fa-phone-volume">   +52 - 449 - 236 - 5687</i><br><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa-solid fa-envelope">   los.80s@gmail.com</i> <br><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa-solid fa-business-time">   martes - domingos </i> <br><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa-solid fa-clock">      8:00am - 9:00pm </i> <br><br>
        
        </th>
        </table>
        <br>
    </div>
    <br><br><br><br><br><br>
    <footer>
        <p>&copy; 2023 Tienda Retro de los 80's. Todos los derechos reservados.</p>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
