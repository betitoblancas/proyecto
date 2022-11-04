<?php 
    require_once "../app/conexion.php";

    $conexion=conexion();
        
    $nombre=$_POST['nombre'];
    $apellidoP=$_POST['apellidoP'];
    $apellidoM=$_POST['apellidoM'];
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $password=$_POST['password'];
       
     

    $query="insert into docente (id_docente, nombre, apellido_paterno, apellido_materno, correo,clave_trabajador, password)
                                values (NULL, '$nombre', '$apellidoP', '$apellidoM', '$correo', '$clave','$password')";
                
    $sql = "SET foreign_key_checks = 0;";
    $sql1 = "SET foreign_key_checks = 1;";
    mysqli_query($conexion,$sql);

    if(mysqli_query($conexion,$query)){   
        echo 1;
        mysqli_query($conexion,$sql);
        $conexion->close();
    }else{
        mysqli_query($conexion,$query)->error;
        $conexion->close();
    }
    
   
    

?>