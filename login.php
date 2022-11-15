<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sesiones con PHP</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<form action="" method="POST">
		<?php
		if (isset($errorLogin)) {
			echo $errorLogin;
		}
		?>
		<h2>Iniciar Sesión</h2>
		<p>Nombre del Usuario</p>
		<input type="text" name="username">
		<p>Password: </p>
		<input type="password"name="password">
		<p class="center">
			<input type="submit" value="Iniciar Sesión">
		</p>
	</form>
</body>
</html>