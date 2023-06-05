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
		<h1>Registro</h1>
		<form action="cargarusuario.php" method="POST">
		<h3>Mail</h3> <input type="email" name="mail" placeholder="Mail" min="1" max="40" required>
		<h3>Contraseña</h3> <input type="password" name="password" placeholder="Contraseña" min="5" max="30" required>
       <br /> <input type="submit" name="cargar" value = "Enviar"> <br/>
    </form>

	<h2><?php 
	if(isset($_GET['reg_ok'])) {
	echo "Usuario Registrado con exito!";
	}
	?></h2>
	    <h1>Ingreso</h1>
 
		<form action="verificarusuario.php" method="POST">
       <h3>Mail</h3> <input type="email" name="mail" placeholder="Mail" min="1" max="40" required>
		<h3>Contraseña</h3><input type="password" name="password" placeholder="Contraseña" min="5" max="30" required>
        <br /> <input type="submit" name="ingresar" value = "Ingresar"> <br/>
    </form>

	<h2><?php 
	if(isset($_GET['pass_ok'])) {
	echo "El mail y la contraseña son correctos!";
	}
	?><br></h2>

<h2><?php 
	if(isset($_GET['pass_error'])) {
	echo "El mail y/o la contraseña son incorrectos!";
	}
	?></h2>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>