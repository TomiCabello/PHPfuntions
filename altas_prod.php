<?php
include('clases/basedatos.php');
include('clases/producto.php');
include('clases/carrito.php');
include('constantes.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new producto ($base);
$carrito_compra = new Carrito($base);


?>