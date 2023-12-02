<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <title>Ofertas</title> 

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
            color: black;
            font-weight: bold;
        }
        body
        {background-color: #a3b7eb;
            border: double black;
        }


            </style>
</head>
<body>
   	
<header>
	<img width="200px" height="auto" style="float: left;" src="logo.png">
	<h1 style="text-shadow: gray 4px ;">Paleteria "Dulces momentos"</h1>
	<h1>Ofertas</h1>
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
    <h1>Catálogo de Ofertas</h1>

    <div class="catalogo">
        <div class="producto">
            <img src="imagenes/fresa.jpeg" alt="Producto 1">
            <h2>Paleta de fresa</h2>
            <p>Precio original: $12.00</p>
            <p>Precio con descuento: $9.00</p>
        </div>
        <div class="producto">
            <img src="imagenes/galleta.jpeg" alt="Producto 2">
            <h2> Paleta de galleta</h2>
            <p>Precio original: $12.00</p>
            <p>Precio con descuento: $9.00</p>
        </div>
        <!-- Agrega más productos en oferta aquí -->
    </div>
</body>
</html>
