<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Sitio Web</title>
    <style>
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
<body>

    <heder>
            
        <div class="logo-img">
            <img class="logo" src="imagenes/header.jpeg">
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
					viewBox="0 0 24 24"
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
							viewBox="0 0 24 24"
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
                    <div class="cart-total">
                        <h3>Total:</h3>
                        <span class="total-pagar"></span>
                    </div>
				</div>
			</div>          
    <!---->

    </heder>

    


   
</body>
</html>
