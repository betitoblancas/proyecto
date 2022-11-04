<?php
require_once '../app/conexion.php';
$conexion=conexion();


$ciclo_actualizado=$_POST['ciclo_actualizado'] ?? NULL;
$semestre_a_actualizar=$_POST['actualiza_semestre'] ?? [];


$query_update_ciclo=$conexion->prepare("UPDATE semestre SET ciclo_escolar=?");
$query_update_ciclo->bind_param("s",$ciclo_actualizado);




function actualizarSemestre($actual,$anterior,$conexion){
  $stmt=$conexion->prepare("UPDATE alumno SET id_semestre = ? WHERE id_semestre=?");
  $stmt->bind_param("ii",$actual,$anterior);

  return $stmt->execute();
}


if (!empty($semestre_a_actualizar)) {
  foreach ($semestre_a_actualizar as $key => $actual){  
    $anterior=$actual-1; 
      if (!actualizarSemestre($actual,$anterior,$conexion)) {
          $errores[] = $key;
      }
      
     
  }
}

if (empty($errores) && $query_update_ciclo->execute()) {
	echo 1;
    $conexion->close();

}else{
    
    $conexion->close();
    
}

?>