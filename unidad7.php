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
<?php include("botonera.php"); 	?>	
<?php 		
		include ("altas_prod.php");

		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);

		$prod = new Producto($base);
		$mostrar_prod = $prod->listar_productos();


		$carrito = new Carrito($base);
		$mostrar_carrito = $carrito->listar_compra();
		
		 ?>
	</nav>
	</header>
	<section>
		<h2>Compras</h2>
		<table>
			<th>Código</th>
			<th>Producto</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Agregar</th>
			<?php for($i=0; $i<count($mostrar_prod); $i++) {?>
				<tr>
				    <td><?php echo $mostrar_prod[$i]['codigo']?> </td>
					<td><?php echo $mostrar_prod[$i]['producto']?> </td>
					<td><?php echo $mostrar_prod[$i]['descripcion']?> </td>
					<td><?php echo $mostrar_prod[$i]['precio']?> </td>
					
					<td><a href='agregar.php?codigo=<?php echo $mostrar_prod[$i]['codigo']?>'><button>Agregar</button></a></td>
				</tr>
			<?php } ?>
		</table>
	</section>
	<aside>
		<strong>Carrito de compras:</strong>
			<?php if($mostrar_carrito){
			for($i=0; $i<count($mostrar_carrito); $i++) {?>
					<p><strong>Producto:</strong><?php echo $mostrar_carrito[$i]['producto']?></p>
					<p><strong>Descripcion:</strong><?php echo $mostrar_carrito[$i]['descripcion']?></p>
					<p><strong>Precio:</strong>$<?php echo $mostrar_carrito[$i]['precio']?></p>
					<a href="eliminar.php?codigo=<?php echo $mostrar_carrito[$i]['codigo']?>"><button>Eliminar</button></a>
			<?php }} ?>	
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>