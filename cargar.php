<?php 
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$consulta = $_POST['consulta'];
$codigo = $_POST['codigo'];

if($codigo == $_SESSION['captcha']) {
    $conexion = mysqli_connect('localhost','root','','phpavanzado') or exit ("No se encontro la base de datos");
    mysqli_query($conexion, "INSERT INTO consultas VALUES ('$nombre', '$apellido', '$mail', '$consulta')");
    header('Location: unidad5.php?ok');
} else {
    header('Location: unidad5.php?captchaerror');  
}
?>
