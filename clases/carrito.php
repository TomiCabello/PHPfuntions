<?php 
class Carrito {

    private $base;

    function __construct($bd){
        $this->base = $bd;
    }

   function introducir_compra($cod, $prod, $desc, $prec){
        $respuesta = $this->base->ejecutarConsultas("INSERT INTO compras VALUES (DEFAULT, $cod, '$prod', '$desc', $prec,)");
        return $respuesta;
    }


   function listar_compra(){
        $respuesta = $this->base->ejecutarConsultas("SELECT * FROM compras ORDER BY producto");
        return $respuesta;    
    }

   function seleccionUnProducto($id) {
		$respuesta = $this->base->ejecutarConsultas("SELECT * FROM compras WHERE codigo=$id");
		return $respuesta;
	}
    
    function eliminar_compra($id){
		$respuesta = $this->base->ejecutarConsultas("DELETE FROM  compras WHERE codigo=$id");
		return $respuesta;
	}


}
?>