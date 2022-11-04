<?php

 require_once '../app/conexion.php';
 $conexion=conexion();

  $id_recibido = $conexion->real_escape_string(htmlentities($_POST['id_alumno']));

  $query_select_id = "SELECT id_alumno, nombre, apellido_paterno, apellido_materno,carrera, 
  semestre,grupo, grado,correo ,matricula, password FROM alumno INNER JOIN carrera ON carrera.id_carrera=alumno.id_carrera
INNER JOIN semestre ON semestre.id_semestre=alumno.id_semestre WHERE id_alumno=?";

  $select_id_preparado = $conexion->prepare($query_select_id);

  $select_id_preparado->bind_param('i', $id_recibido);

  $select_id_preparado->execute();

  $extractor_datos_query = $select_id_preparado->get_result()->fetch_assoc();

  echo json_encode($extractor_datos_query);

  //$select_id_preparado->close();

?>