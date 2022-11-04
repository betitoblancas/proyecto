<?php

require_once "../app/conexion.php";
$conexion = conexion();

$colums=['id_alumno', 'nombre', 'apellido_paterno', 'apellido_materno','correo'];
$colum=['nombre'];
$table="alumno";

$campo = isset($_POST['buscar']) ? $conexion->real_escape_string($_POST['buscar']) : null;



$where = '';

if ($campo != null) {
    $where = "WHERE nombre='$campo'";
}

$sql="SELECT " . implode(", ", $colums) . " 
FROM $table $where";

$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;


$html="";

if($num_rows>0){
  while($datos=$resultado->fetch_assoc()){
      $html=$html.'
                   
                    <tr>
                    <td>'.$datos['nombre'].' '.$datos['apellido_paterno'].' '.$datos['apellido_materno'].'</td>
                    <td>'.$datos['correo'].'</td>
                    <td><input class="form-check-input" type="checkbox" value="'.$datos['correo'].'" id="id_alumno[]" name="id_alumno[]"></td>
                  </tr>

      ';
  }
}else{
  $html=$html.'<tr>
                <th scope="row">#</th>
                <td colspan="3">Sin resultado </td>
              </tr>
  ';
}

echo $html;
$conexion->close();
?>


