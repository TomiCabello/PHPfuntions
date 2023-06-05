<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    
    function __construct($nom, $ape, $fecha){
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->fecha_nacimiento = $fecha;
    
    }
    private function calcular_edad() {
		date_default_timezone_set("America/Argentina/Cordoba");
		$hoy = date("Y-m-d");
		$dif = strtotime($hoy)-strtotime($this->fecha_nacimiento);
		$fecha_nac = intval($dif/31536000);
		$edad = $fecha_nac = intval($dif/31536000);
    
    return $edad;
    }

    public function imprime_caracteristicas(){

        echo "<p> Nombre:".$this->nombre."</p>";
        echo "<p> Apellido:".$this->apellido."</p>";
        echo "<p> Edad:".$this->calcular_edad()."</p>";
    }
   
}
?>