<?php
require_once '../app/conexion.php';
$conexion=conexion();
$id=$_POST['id_docente'];

 $query_drop = "DELETE FROM docente WHERE id_docente='$id'";

  $drop_preparado = $conexion->prepare($query_drop);

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