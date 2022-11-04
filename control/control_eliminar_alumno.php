<?php
require_once '../app/conexion.php';
$conexion=conexion();
$id=$_POST['id_alumno'];

 $sql = "DELETE FROM alumno WHERE id_alumno='$id'";

  $drop_preparado = $conexion->prepare($sql);

  if($drop_preparado->execute()){
    echo 1;
    $drop_preparado->close();
    $conexion->close();
  }else{
    echo 2;
    $drop_preparado->close();
    $conexion->close();
  }
  

?>