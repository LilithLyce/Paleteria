<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
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
			color: #070F3E;
			font-weight: bold;
			font-family: 'GFS Didot';
			font-size: 25px;		}
		body
		{background-color: #a3b7eb;
			color: #265073;
			border: double black;
		}
		.m{
			border: 10px d black;
		}
        .login1{
            display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;

        }
        .login-container {
    width: 600px;
    height: 400px;
    padding: 20px;
    border: 1px solid #2d9596;
    border-radius: 8px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    font-size: 30px;
}

input {
    padding: 8px;
    margin-bottom: 16px;
    height: 40px;
}

button {
    background-color: #176B87;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 600px;
    height: 50px;
    font-size: 20px;
}

button:hover {
    background-color: #45a049;
}
        </style>
</head>
<body>
<header>
	<img width="200px" height="auto" style="float: left;" src="logo.png">
	<h1 style="text-shadow: gray 4px ;">Paleteria "Dulces momentos"</h1>
	<h1>Inicia sesion</h1>
	<nav>
	<ul>
	    <li><a href="Index.php">Inicio </a></li>
		<li><a href="productos.php">Productos </a></li>
		<li><a href="ofertas.php">Ofertas </a></li>
		<li><a href="carrito.php">Carrito </a></li>
	    <li><a href="login2.php">Crea tu cuenta </a></li>
	    <li><a href="login1.php">Ingresa a  tu cuenta </a></li>
	</ul>
      </nav>
      <div></div>
     </header>
     <div class="login1">
    <div class="login-container">
        <form action="conexion.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="usuario" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
    </div>
</body>
</html>