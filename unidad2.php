<?php include ("calculo_fecha.php") ?>
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
		<h2>Eventos</h2>
<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = getdate(time());?>

		<form action="calculo_fecha.php" method="GET">
        <input type="number" name="dia" placeholder="Dia"  min="1" max="31" required>
        <input type="number" name="mes" placeholder="Mes" min="1" max="12" required>
		<input type="number" name="anio" placeholder="Año" min="0000" max="9999" required>
        <input type="submit" name="cargar" value = "Enviar">
    </form>

	<?php

if(isset($_GET['dias'] )){

	$dias=$_GET['dias'];

	echo "<h4>Hay $dias Días de diferencia entre el dia de hoy y la fecha registrada.</h4>";
}

if(isset($_GET['error']) && $_GET['error']=='bad'){

	echo "<h3>La fecha ingresada debe ser posterior a la actual.</h3>"; 

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