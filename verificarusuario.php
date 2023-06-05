<?php 
include('clases/basedatos.php');
include('conexion.php');
include('clases/cargado.php');
include('constantes.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$cargado = new Cargar($base);

$mail = $_POST['mail'];
$password = $_POST['password'];

$validar_cargar = $cargado->validarUsuario($mail);


if( !empty( $validar_cargar[0]["password"] ) ){
    $verificar = password_verify($password, $validar_cargar[0]["password"]);
    }


if($verificar){
    header("Location: unidad8.php?pass_ok");
} else {
    header ("Location: unidad8.php?pass_error");
}

?>
