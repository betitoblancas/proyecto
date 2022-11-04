<?php
require_once '../app/conexion.php';
$conexion=conexion();
$grupo=$_POST['actualiza_grupo'] ?? NULL;
$semestre=$_POST['actualizar_semestre'] ?? null;
$hora=$_POST['actualiza_hora'] ?? null;
$lunes=$_POST['actualiza_lunes'] ?? null;
$martes=$_POST['actualiza_martes'] ?? null;
$miercoles=$_POST['actualiza_miercoles'] ?? null;
$jueves=$_POST['actualiza_jueves'] ?? null;
$viernes=$_POST['actualiza_viernes'] ?? null;
$nombres_docentes = $_POST['lista_profesores'] ?? [];
$dias=array($lunes,$martes,$miercoles,$jueves,$viernes);

$errores = [];
$i=0;

//validar el array de dias :) y hacer funciones para el otro insert 


$query_insert="INSERT INTO horario (id_horario, id_hora, Lunes, Martes, Miercoles, Jueves, Viernes, grupo, semestre) 
                VALUES (NULL, '$hora', '$lunes', '$martes', '$miercoles', '$jueves', '$viernes', '$grupo', '$semestre')";




function insertaMaterias($nombre,$materias,$grupo,$semestre,$conexion){
    $stmt=$conexion->prepare("INSERT INTO materias (materia,id_docente,grupo,semestre) VALUES (?,?,?,?)");
    $stmt->bind_param("ssis",$materias,$nombre,$grupo,$semestre);
    return $stmt->execute();
}


if (!empty($nombres_docentes)) {
    foreach ($nombres_docentes as $key => $nombre){   
        if (!insertaMaterias($nombre,$dias[$i],$grupo,$semestre,$conexion)) {
            $errores[] = $key;
        }
        $i++;      
    }
}




if (empty($errores) && mysqli_query($conexion,$query_insert)) {
	echo 1;
    $conexion->close();

}else{
    mysqli_query($conexion,$query_insert)->mysqli->error();
    $conexion->close();
    
}


