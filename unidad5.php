<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>

		<?php 
		function cont_captcha(){
			$pattern = "1234567890abcdefghijklmnopqrstuvwxyz#$%/?";
			$clave = "";
			for($i=0; $i<8; $i++){
				$clave .= $pattern[rand(0,39)];
			}
			return $clave;
		}
		$_SESSION['captcha'] = cont_captcha();
		?>

		<form method="POST" action="cargar.php">
        <input type="text" name="nombre" placeholder="Nombre"  min="1" max="50" required> 
		<input type="text" name="apellido" placeholder="Apellido"  min="1" max="50" required>
        <input type="email" name="mail" placeholder="Mail" min="1" max="40" required>
		<input type="textarea" name="consulta" placeholder="Ingrese aqui su consulta" min="5" max="999" required>
		<img src="imagen_captcha.php">
		<input type="text" name="codigo" placeholder="Captcha" min="1" max="40" required>
        <input type="submit" name="cargar" value = "Enviar">
    </form>
<?php
	if(isset($_GET['captchaerror'])){
		echo "El codigo es incorrecto, intentelo nuevamente";
	}

	if(isset($_GET['ok'])){
		echo "Consulta cargada exitosamente!";
	}
?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>