<?php 
class Producto {
    
    private $base;

    public $codigo;
	public $producto;
	public $desc;
	public $prec;

    function __construct($bd){
        $this->base = $bd;
    }

    function introducir_compra($codigo, $producto, $descripcion, $precio) {
        $respuesta = $this->base->ejecutarConsultas("INSERT INTO compras VALUES (DEFAULT, $codigo, '$producto','$descripcion','$precio')");
        return $respuesta;
    }
    

    function listar_productos() {
        $respuesta = $this->base->ejecutarConsultas("SELECT * FROM productos ORDER BY producto");
        return $respuesta;
    }

    function seleccion_UnProducto($id) {
    $respuesta = $this->base->ejecutarConsultas("SELECT * FROM productos WHERE codigo=$id");
    return $respuesta;
}
}
?>