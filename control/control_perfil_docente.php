<?php

require_once "../app/conexion.php";
$conexion = conexion();

$colums=['id_docente', 'nombre', 'apellido_paterno', 'apellido_materno','clave_trabajador','correo','password'];
$colum=['nombre','clave_trabajador'];
$table="docente";

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

$sql="SELECT " . implode(", ", $colums) . " 
FROM $table $where";

$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;


$html="";

if($num_rows>0){
  while($datos=$resultado->fetch_assoc()){
      $html=$html.'
                    <tr>
                      <th scope="row">'.$datos['id_docente'].'</th>
                      <td>'.$datos['nombre'].' '.$datos['apellido_paterno'].' '.$datos['apellido_materno'].'</td>
                      <td>'.$datos['correo'].'</td>
                      <td>'.$datos['clave_trabajador'].'</td>
                      <td>'.$datos['password'].'</td>
                      <td><span class="btn btn-outline-danger" 
                      class="btn btn-primary" 
                      data-bs-toggle="modal" 
                      data-bs-target="#modalActualizarDocente" 
                      onclick="precarga_docente('.$datos['id_docente'].')" >+</span>

                        <span class="btn btn-outline-danger" 
                        onclick="borrar_info_docente('.$datos['id_docente'].')" >-</span>
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


