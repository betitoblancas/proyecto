<?php

    class Conectar{
        private $servidor = "localhost";
        private $usuario = "root";
        private $bd = "escuela";
        private $pass = "";
         
        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->pass,
                                    $this->bd                                    
                                    );
            return $conexion;
        }
    }
    

?>