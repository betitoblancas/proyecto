
<?php

require_once "../app/conexion.php";
$conexion = conexion();


$colums=['id_alumno', 'nombre', 'apellido_paterno', 'apellido_materno', 'carrera', 'semestre', 'grupo', 'grado', 'correo','matricula','password'];
$colum=['nombre','matricula'];
$table="alumno";

$campo = isset($_POST['buscar']) ? $conexion->real_escape_string($_POST['buscar']) : null;



$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($colum);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $colum[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql="SELECT ". implode(", ", $colums) ."
from $table
INNER JOIN semestre on alumno.id_semestre=semestre.id_semestre
INNER JOIN carrera on alumno.id_carrera=carrera.id_carrera $where";


$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;


$html="";

if($num_rows>0){
  while($datos=$resultado->fetch_assoc()){
      $html=$html.'
      <tr>
      <th scope="row">'.$datos['id_alumno'].'</th>
      <td>'.$datos['nombre'].' '.$datos['apellido_paterno'].' '.$datos['apellido_materno'].'</td>
      <td>'.$datos['carrera'].'</td>
      <td>'.$datos['semestre'].'</td>
      <td>'.$datos['grado'].'</td>
      <td>'.$datos['grupo'].'</td>
      <td>'.$datos['correo'].'</td>
      <td>'.$datos['matricula'].'</td>
      <td>'.$datos['password'].'</td>
      <td><span class="btn btn-outline-danger" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActualizarAlumno" onclick="precarga_alumno('.$datos['id_alumno'].')" >+</span>

        <span class="btn btn-outline-danger" 
        onclick="borrar_info_alumno('.$datos['id_alumno'].')" >-</span>
      </td>
    </tr> 

      ';
  }
}else{
  $html=$html.'<tr>
                <th scope="row">#</th>
                <td colspan="8">Sin resultado </td>
              </tr>
  ';
}

echo $html;
$conexion->close();
?>




