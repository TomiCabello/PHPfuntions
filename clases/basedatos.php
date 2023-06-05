<?php 
class Basedatos {
    private $conexion;

    function __construct ($servidor, $usuario, $password, $base){
        $this->conexion = new mysqli ($servidor, $usuario, $password, $base);
    }

    public function ejecutarConsultas($query){
        $instruccion = strtoupper(substr($query, 0,6));

        switch($instruccion){
            case 'INSERT':    
            case 'UPDATE':
            case 'DELETE':
                $consulta = $this->conexion->query($query);
                break;
            case 'SELECT':
                $consulta = $this->conexion->query($query);
                $listarRegistro = array();
                while($registro=$consulta->fetch_assoc()){
                    $listarRegistro[]=$registro;
                }
                  return $listarRegistro;
                  break;
        }
    }
}
?>