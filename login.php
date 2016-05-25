<!DOCTYPE html>
<?php
	session_start();
	session_destroy();
?>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Inicio</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<section id="formulario">
			<div class = "login">
				<div class="container">
					<h1 class="text-center">Iniciar Sesión</h1>
					<form action="inicio.php" method="POST">
						<div class="row">
							<div class="form-group text-center col-xs-4 col-md-offset-4">
								<label for="Name">Usuario</label>
								<input type="text" name="usuario" class="form-control" id="usuario" placeholder="Frida" required/>
								</br>
							</div>
						</div>
						<div class="row">
							<div class="form-group text-center col-xs-4 col-md-offset-4">
								<label for="Name2">Contraseña</label>
								<input type="password" name="passwor" class="form-control" id="pass" placeholder="Contraseña" required/>
								</br>
							</div>
						</div>
						<div class='row'> 
							</br>
							<div class="col-xs-12 text-center">
								<button type:"button"> Entrar </button>
								<input id="reset" type="reset" class="btn btn-primary" value="Reset"/>	
							</div>
						</div>
						<div class="text-center">
							<br>
							<p>¿No tienes cuenta? Creala :D</p>
							<a href ="crear.html">
							Crear cuenta
							</a>
						</div>
					</form>
				</div>
			</div>
	</body>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>
