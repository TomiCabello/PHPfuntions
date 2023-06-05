<?php  	
include("altas_prod.php");

		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
		$carrito = new Carrito($base);

        $carrito->eliminar_compra($_GET['codigo']);

        header("Location: unidad7.php")
?>
