<?php
 include 'heder.php'
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Tienda</title>
		<link rel="stylesheet" href="estilosGR.css" />
	</head>
<body>
		<header>
			<div id = "tituloDP">
				<h1 id ="titulo2DP"> NOSTALGIA </h1>
				<h2 id = "titulo3DP"><span>"ALTA DEL PRODUCTO"</span> <span></span></h2>
				<p><sup></sup></p>
			</div>
				
				
				
				

			
		</header>

    <style>
        body {
            font-family: 'Lato';
	        block-size: 100%;
	        padding: 5vw; /*5*/
            background-color: var(--cream);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }







        .form__input {
            display: block;
            width: 50%;
            padding: 10px;
            margin-left:480px;
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            transition: 0.3s;
            font-family:cursive;
            font-size:20px;
            border-radius:20px;
            text-align:center;
            
             &:focus {
                background: darken(#fff, 3%);
            }
        }

        .btn {
            display: block;
            width: 50%;
            padding: 10px;
            margin-left:480px;
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            transition: 0.3s;
            font-family:cursive;
            font-size:20px;
            border-radius:20px;
            text-align:center;
            background: linear-gradient(to top, var(--aqua), 
            var(--green) 2rem)


        }   



    </style>

   
    <form action="altaProductoLR.php" method="post" enctype="multipart/form-data">
        <div class="form__group">

            <label class="form__input" for="id">ID:</label>
            <input   class="form__input"   type="text" name="id" required><br>

            <label class="form__input" for="nombre">Nombre:</label>
            <input  class="form__input"   type="text" name="nombre" required><br>

            <label   class="form__input"  for="descripcion">Descripción:</label>
            <textarea  class="form__input"   name="descripcion" rows="4" required></textarea><br>
            
            <label class="form__input"  for="precio">Precio:</label>
            <input class="form__input"  type="number" name="precio" step="0.01" required><br>

            <label class="form__input" for="cantidad">Cantidad:</label>
            <input class="form__input"   type="text" name="cantidad" required><br>

            <label class="form__input"  for="categoria">Categoría:</label>
            <input  class="form__input"  type="text" name="categoria" required><br>

           
           

            <label  class="form__input" for="descuento">Descuento:</label>
            <input   class="form__input"  type="number" name="descuento" step="0.01"><br>

            <label class="form__input" for="imagen">Imagen:</label>
            <input  class="form__input"  type="file" name="imagen" accept="image/*" required><br>

           
        </div>
      
      
        <input class="btn" type="submit" value="Agregar Producto">

    </form>
</body>
</html>

