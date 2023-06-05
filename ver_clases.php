
<link rel="stylesheet" href="estilos.css">
<header>
<nav>
	<ul>
		<li><a href="unidad1.php"> Insertar otra Clase</a></li>

	</ul>
</nav>
</header>
<section>
<?php 
include("conexion.php");
$buscarUnidad = mysqli_query($datosConexion, "SELECT * FROM clases");
while($listarUnidad = mysqli_fetch_assoc($buscarUnidad) ) {
?>
    <div class="cajaUnidad">
    <h4><?php echo $listarUnidad['unidad']; ?> </h4>
    <p> <?php echo $listarUnidad['fecha']; ?></p>
 </div>
    <?php } ?>
</section>