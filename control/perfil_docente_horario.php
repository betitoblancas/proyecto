<?php

session_start();
require_once '../app/conexion.php';
$conexion=conexion();


$query="SELECT id_docente, nombre,apellido_paterno,apellido_materno FROM docente";

$resultado = $conexion->query($query);

$html="<label class='form-label'>Profesores</label> 
<select class='form-select' id='lista_profesores[]' name='lista_profesores[]'>";

while( $datos=$resultado->fetch_assoc()){
       
    
    $html=$html.'<option value='.$datos['id_docente'].'>'.$datos['nombre'].' '.$datos['apellido_paterno'].' '.$datos['apellido_materno'].' </option>';
    
}

$conexion->close();

echo  $html."</select>";
          ?>





