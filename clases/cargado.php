<?php
    class Cargar {
        private $bd;

        function __construct($base){
            $this->bd = $base;
        }
    
        public function registrarUsuario($mail, $password) {
            $respuesta = $this->bd->ejecutarConsultas("INSERT INTO registro VALUES ('$mail','$password')");
            return $respuesta;
        }

        public function validarUsuario($mail) {
            $respuesta = $this->bd->ejecutarConsultas("SELECT password FROM registro WHERE mail = '$mail'");
            return $respuesta;
        }
    }
?>