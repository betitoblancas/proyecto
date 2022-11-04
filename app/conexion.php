<?php
 function conexion(){
   $conexion =new mysqli('127.0.0.1','root','','escuela');
   if($conexion->connect_errno){
     echo 'error en la conexion'.$conexion->connect_error;
   }
   $conexion->set_charset('utf8');
   
   return $conexion;
 }


?>