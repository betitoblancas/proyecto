<?php 
    require_once "../app/conexion.php";

    $conexion=conexion();


        
    $nombre=$_POST['nombre'];
    $apellidoP=$_POST['apellidoP'];
    $apellidoM=$_POST['apellidoM'];
    $grupo=$_POST['grupo'];
    $correo=$_POST['correo'];
    $semestre=$_POST['semestre'];
    $matricula=$_POST['matricula'];
    $password=$_POST['password'];
    $carrera=$_POST['carrera'];    
     
    

    $query="insert into alumno (id_alumno, nombre, apellido_paterno, apellido_materno, id_carrera,
                                id_semestre, grupo, correo, matricula, password)
                                values (NULL, '$nombre', '$apellidoP', '$apellidoM', '$carrera', 
                                        '$semestre', '$grupo', '$correo', '$matricula', '$password')";
                
    $sql = "SET foreign_key_checks = 0;";
    $sql1 = "SET foreign_key_checks = 1;";
    mysqli_query($conexion,$sql);
    if(mysqli_query($conexion,$query)){   
        echo 1;
        mysqli_query($conexion,$sql);
        $conexion->close();
    }else{
        mysqli_query($conexion,$query)->error();
        $conexion->close();
    }
    
   
    

?>