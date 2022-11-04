<?php
require_once '../app/conexion.php';
$conexion=conexion();


$datos_recibidos =  array(
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_id'])) ,
                                     $conexion->real_escape_string(htmlentities($_POST['actualiza_nombre'])) ,
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_paterno'])) ,
                                     $conexion->real_escape_string(htmlentities($_POST['actualiza_materno'])) ,
                                     $conexion->real_escape_string(htmlentities($_POST['carrera'])) ,
                                     $conexion->real_escape_string(htmlentities($_POST['semestre'])) ,
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_grupo'])) ,
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_correo'])) ,
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_matricula'])),
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_contra'])) 

                                    );
$sql = "SET foreign_key_checks = 0;";
$sql1 = "SET foreign_key_checks = 1;";
mysqli_query($conexion,$sql);

$query_update = "UPDATE alumno
              SET nombre=?, apellido_paterno=?, apellido_materno=?, id_carrera=?, id_semestre=?, grupo=?, correo=?, matricula=?, password=?
              WHERE id_alumno=?";







$update_preparado = $conexion->prepare($query_update);

$update_preparado->bind_param('sssiiisisi', 
                                                  $datos_recibidos[1], 
                                                  $datos_recibidos[2], 
                                                  $datos_recibidos[3], 
                                                  $datos_recibidos[4], 
                                                  $datos_recibidos[5],
                                                  $datos_recibidos[6],
                                                  $datos_recibidos[7],
                                                  $datos_recibidos[8],
                                                  $datos_recibidos[9],
                                                  $datos_recibidos[0] 
                                                );


if($update_preparado->execute()){
  echo 1;
  $update_preparado->close();
  $conexion->close();
}else{
  echo 2;
  $update_preparado->close();
  $conexion->close();
}





?>