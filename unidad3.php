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
		<h2>Comentarios</h2>

		<form action="unidad3.php" id="cargado"  method="POST">
        <input type="text" name="name" placeholder="Nombre y Apellido"  min="1" max="100" required>
        <input type="email" name="mail" placeholder="Mail" min="1" max="40" required>
		<input type="text" name="coment" placeholder="Comentario" min="5" max="999" required>
        <input type="submit" name="cargar" value = "Enviar">
    </form>
	<?php  
if($_POST){    
}
include('comentarios.php')
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