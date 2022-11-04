<?php

session_start();
require_once '../app/conexion.php';
$conexion = conexion();
$grupo = $_POST['grupo_buscar'];
$semestre = $_POST['semestre_buscar'];

$query = "SELECT hora.hora, Lunes, Martes, Miercoles,Jueves,Viernes FROM horario
INNER JOIN hora on horario.id_hora=hora.id_hora WHERE grupo='$grupo' AND semestre='$semestre' ORDER BY horario.id_hora  ASC";

$resultado = $conexion->query($query);
$html = "";

while ($datos = $resultado->fetch_assoc()) {

    $html = $html . '   
    <tr>    
            <th scope="row">' . $datos['hora'] . '</th>
            <td >' . $datos['Lunes'] . '</td>
            <td>' . $datos['Martes'] . '</td>
            <td>' . $datos['Miercoles'] . '</td>
            <td>' . $datos['Jueves'] . '</td>
                        <td>' . $datos['Viernes'] . '</td>
                        </tr>                         

        ';
}

$conexion->close();

echo $html;
