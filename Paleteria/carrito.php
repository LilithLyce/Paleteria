<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <style>
       header{
			background-color: #af9eab;
			color: #070F3E;
			padding: 10px;
			text-align: center;

		}
        ul{
            list-style-type: none;
            padding: 0;
        }
        li{
            display: inline;
            margin-right: 20px;

        }
        a{
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        body
        {background-color: #a3b7eb;
            color: rgb(0, 0, 0);
            border: double black;
        }
        img{
            height: auto;
            width: 200px;
        }


            </style>
</head>
<body>
	
<header>
	<img width="200px" height="auto" style="float: left;" src="logo.png">
	<h1 style="text-shadow: gray 4px ;">Paleteria "Dulces momentos"</h1>
	<h1>Carrito</h1>
	<nav>
	<ul>
	    <li><a href="Index2.php">Inicio </a></li>
		<li><a href="productos.php">Productos </a></li>
		<li><a href="ofertas.php">Ofertas </a></li>
		<li><a href="carrito.php">Carrito </a></li>
	    <li><a href="login2.php">Crea tu cuenta </a></li>
	    <li><a href="login1.php">Ingresa a  tu cuenta </a></li>
	</ul>
      </nav>
      <div></div>
     </header>
    <h1>Mi Carrito de Compras</h1>
    <br>
    <hr>
    

    <div class="productos">
        <div class="producto">
            <img src="imagenes/cajeta.jpeg" alt="Paleta de cajeta">
            <h2>Cajeta</h2>
            <p>Precio: $11.00</p>
            <button class="agregar-carrito" data-nombre="Cajeta" data-precio="11.00">Agregar al Carrito</button>
        </div>
        
            <div class="producto">
                <img src="imagenes/fresa.jpeg" alt="Paleta de fresa">
                <h2>Fresa</h2>
                <p>Precio: $11.00</p>
                <button class="agregar-carrito" data-nombre="Fresa" data-precio="11.00">Agregar al Carrito</button>
            </div>
            
                <div class="producto">
                    <img src="imagenes/nuez.jpeg" alt="Paleta de nuez">
                    <h2>Nuez</h2>
                    <p>Precio: $11.00</p>
                    <button class="agregar-carrito" data-nombre="Nuez" data-precio="11.00">Agregar al Carrito</button>
                </div>
                
                    <div class="producto">
                        <img src="imagenes/galleta.jpeg" alt="Paleta de galleta">
                        <h2>Galleta</h2>
                        <p>Precio: $11.00</p>
                        <button class="agregar-carrito" data-nombre="Galleta" data-precio="11.00">Agregar al Carrito</button>
                    </div>
                    
                        <div class="producto">
                            <img src="imagenes/especial.jpeg" alt="Paleta especial">
                            <h2>Especial</h2>
                            <p>Precio: $5.00</p>
                            <button class="agregar-carrito" data-nombre="Especial" data-precio="5.00">Agregar al Carrito</button>
                        </div>
                    <br>
        <div class="producto">
            <img src="imagenes/guayaba.jpeg" alt="Paleta de guayaba">
            <h2>Guayaba</h2>
            <p>Precio: $9.00</p>
            <button class="agregar-carrito" data-nombre="Guayaba" data-precio="9.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/fresa2.jpeg" alt="Paleta de fresa">
            <h2>Fresa de agua</h2>
            <p>Precio: $9.00</p>
            <button class="agregar-carrito" data-nombre="Fresa de agua" data-precio="9.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/mango.jpeg" alt="Paleta de mango">
            <h2>Mango</h2>
            <p>Precio: $9.00</p>
            <button class="agregar-carrito" data-nombre="Mango" data-precio="9.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/sandia.jpeg" alt="Paleta de sandia">
            <h2>Sandia</h2>
            <p>Precio: $9.00</p>
            <button class="agregar-carrito" data-nombre="Sandia" data-precio="9.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/Pepino.jpeg" alt="Paleta de pepino">
            <h2>Pepino</h2>
            <p>Precio: $9.00</p>
            <button class="agregar-carrito" data-nombre="Pepino" data-precio="9.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/melon.jpeg" alt="Paleta de melon">
            <h2>Melon</h2>
            <p>Precio: $9.00</p>
            <button class="agregar-carrito" data-nombre="Melon" data-precio="9.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/limonblanco.jpeg" alt="Paleta de limon blanco">
            <h2>Limon blanco</h2>
            <p>Precio: $9.00</p>
            <button class="agregar-carrito" data-nombre="Limon blanco" data-precio="9.00">Agregar al Carrito</button>
        </div>
        <br>
        <div class="producto">
            <img src="imagenes/viznaga.jpg" alt="Paleta de viznaga">
            <h2>Viznaga</h2>
            <p>Precio: $14.00</p>
            <button class="agregar-carrito" data-nombre="Viznaga" data-precio="14.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/chamoy.jpeg" alt="Paleta de chamoy">
            <h2>Chamoy</h2>
            <p>Precio: $11.00</p>
            <button class="agregar-carrito" data-nombre="Chamoy" data-precio="11.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/chemise.jpeg" alt="Paleta chemisse">
            <h2>Chemisse</h2>
            <p>Precio: $11.00</p>
            <button class="agregar-carrito" data-nombre="Chemisse" data-precio="11.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/esquimal.jpeg" alt="Paleta esquimal">
            <h2>Esquimal</h2>
            <p>Precio: $14.00</p>
            <button class="agregar-carrito" data-nombre="Esquimal" data-precio="14.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/rompope.jpeg" alt="Rompope">
            <h2>Rompope</h2>
            <p>Precio: $10.00</p>
            <button class="agregar-carrito" data-nombre="Rompope" data-precio="10.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/sanwich.jpeg" alt="Sandwich">
            <h2>Sandwich</h2>
            <p>Precio: $12.00</p>
            <button class="agregar-carrito" data-nombre="Sandwich" data-precio="12.00">Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagenes/trol de mango.jpeg" alt="Trol de mango">
            <h2>Trol de mango</h2>
            <p>Precio: $17.00</p>
            <button class="agregar-carrito" data-nombre="Trol de mango" data-precio="17.00">Agregar al Carrito</button>
        </div>
        <!-- Agrega más productos aquí -->

    <div class="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito"></ul>
        <p>Total: $<span id="total">0.00</span></p>
        <button class="comprar" data-nombre="comprar">Comprar</button>
        <button class="limpiar" data-nombre="limpiar">Limpiar</button>
    </div>

    <script src="Script.js"></script>
</body>
</html>
