
<?php

require_once '../app/conexion.php';
 $conexion=conexion();

  $ciclo="SELECT ciclo_escolar FROM semestre GROUP BY ciclo_escolar";

  $semstres="SELECT ciclo_escolar, semestre, alumno.id_semestre FROM alumno
  INNER JOIN semestre ON semestre.id_semestre=alumno.id_semestre GROUP BY semestre ORDER BY id_semestre ASC";

    $select_ciclo = $conexion->query($ciclo);
  
    $select_semestre = $conexion->query($semstres);
    //$id_semestre=array();


  $html='';
    
        while($dato=$select_ciclo->fetch_assoc()){
            $html=$html.'<tr>
            <th scope="row">Ciclo Escolar</th>
            <td >'.$dato['ciclo_escolar'].'</td>
            <td><input type="text" class="form-control" id="ciclo_actualizado" name="ciclo_actualizado"></td>
           </tr>';
    
        }

    while($datos=$select_semestre->fetch_assoc()){
     // array_push($id_semestre, $datos['id_semestre']);
        
        $html=$html.'
                <tr>
                <th scope="row">Semestre</th>
                
                
                <td >'.$datos['semestre'].'</td>
                <td><select class="form-select" aria-label="Default select example" id="actualiza_semestre[]" name="actualiza_semestre[]" >
                        <option selected Disabled>Selecciona el semestre</option>
                        <option value="1">Semestre 1</option>
                        <option value="2">Semestre 2</option>
                        <option value="3">Semestre 3</option>
                        <option value="4">Semestre 4</option>
                        <option value="5">Semestre 5</option>
                        <option value="6">Semestre 6</option>
                        <option value="7">Egresados</option>
                        
                    </select></td>
                                        </tr>    
                    
                ';
    }

  //  var_dump( $id_semestre);
    //exit();
    echo $html;
  $conexion->close();


?>