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
		<h2>Agenda de clases</h2>
		<nav>
	<ul>
		
		<li> <a href="ver_clases.php"> Ver Clases</a></li>
	</ul>
</nav>
		<form action="insertar_clases.php" method="POST">
        <input type="text" name="unidad" placeholder="Unidad" required maxlength="50">
        <input type="date" name="fecha" placeholder="Fecha" required>
        <input type="submit" value = "Enviar">
    </form>

	<?php  if(isset($_GET['ok'])) {
		echo "<p> Unidad Cargada </p>";
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