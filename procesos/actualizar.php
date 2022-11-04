<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    
    $nombre=$_POST['txtnombre'];
    $marca=$_POST['txtmarca'];
    $modelo=$_POST['txtmodelo'];
    $color=$_POST['txtcolor'];
    $capacidad=$_POST['txtcapacidad'];
    $id=$_POST['id'];
    
    $datos=array(
        
        $nombre,
        $marca,
        $modelo,
        $color,
        $capacidad,
        $id
    );

    
    $obj= new metodos();
    if ($obj->actualizarDatos($datos)==1) {
        header("location:../views/horario.php");
    }else {
        echo "fallo";
    }

?>