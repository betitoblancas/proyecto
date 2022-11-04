<?php
require_once '../app/conexion.php';
$conexion=conexion();


$datos_recibidos =  array(
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_id_docente'])) ,
                                     $conexion->real_escape_string(htmlentities($_POST['actualiza_nombre'])) ,
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_paterno'])) ,
                                     $conexion->real_escape_string(htmlentities($_POST['actualiza_materno'])) ,
                                     $conexion->real_escape_string(htmlentities($_POST['actualiza_correo'])) ,
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_clave'])) ,
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_contra'])) 

                                    );



$query_update = "UPDATE docente
              SET nombre=?, apellido_paterno=?, apellido_materno=?, correo=?, clave_trabajador=?, password=?
              WHERE id_docente=?";

$update_preparado = $conexion->prepare($query_update);

$update_preparado->bind_param('ssssiii', 
                                                  $datos_recibidos[1], 
                                                  $datos_recibidos[2], 
                                                  $datos_recibidos[3], 
                                                  $datos_recibidos[4], 
                                                  $datos_recibidos[5],
                                                  $datos_recibidos[6],
                                                  $datos_recibidos[0] 
                                                );


if($update_preparado->execute()){
  echo 1;
  $conexion->close();
  $update_preparado->close();
}else{
  echo 2;
  $conexion->close();
  $update_preparado->close();
}

?>