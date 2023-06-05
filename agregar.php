<?php  
	include("altas_prod.php");

		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
		$prod = new Producto($base);

        $getProd = $prod->seleccion_UnProducto($_GET['codigo']);

        $prod->introducir_compra($getProd[0]['codigo'],$getProd[0]['producto'],$getProd[0]['descripcion'],$getProd[0]['precio']);

        header("Location: unidad7.php")
?>