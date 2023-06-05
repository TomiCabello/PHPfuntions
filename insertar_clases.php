<?php 
$nombreUnidad = $_POST['unidad'];
$nombreFecha = $_POST['fecha'];

include("conexion.php");

mysqli_query($datosConexion, "INSERT INTO clases VALUES (DEFAULT, '$nombreUnidad', '$nombreFecha')");

header('Location: index.php?ok');
?>
