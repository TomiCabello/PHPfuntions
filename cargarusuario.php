<?php 
include('clases/basedatos.php');
include('conexion.php');
include('clases/cargado.php');
include('constantes.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$registro = new Cargar($base);


$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost'=>4));
$mail = $_POST['mail'];
$registro->registrarUsuario($mail, $password);

header("Location: unidad8.php?reg_ok");
?>