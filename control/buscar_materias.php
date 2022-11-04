<?php

require_once "../app/conexion.php";
$conexion = conexion();




$sql="SELECT materia, docente.nombre, docente.apellido_paterno, docente.apellido_materno, grupo, semestre FROM materias 
INNER JOIN docente ON docente.id_docente=materias.id_docente
ORDER BY materia ASC";


$resultado = $conexion->query($sql);

$html="";

while($datos=$resultado->fetch_assoc()){
  $html=$html.'
  <tr>
  
  <td>'.$datos['materia'].'</td>
  <td>'.$datos['nombre'].' '.$datos['apellido_paterno'].' '.$datos['apellido_materno'].'</td>
  <td>'.$datos['semestre'].'</td>
  <td>'.$datos['grupo'].'</td>
</tr>
               

  ';
}

echo $html;
$conexion->close();

