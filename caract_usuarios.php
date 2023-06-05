<?php 
include("usuarios.php");
class Caracteristicas extends Usuarios{
function __construct($nom, $ape, $fecha){
    $this->nombre = $nom;
    $this->apellido = $ape;
    $this->fecha_nacimiento = $fecha;
}
public function imprime_caracteristicas(){

    echo "<p> Nombre:".$this->nombre."</p>";
    echo "<p> Apellido:".$this->apellido."</p>";
    echo "<p> Edad:".$this->calcular_edad()."</p>";
}
}
?>