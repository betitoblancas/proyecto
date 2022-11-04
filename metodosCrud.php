<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";
?>
<?php 
    class metodos{
        public function mostrarDatos($sql){
            $c= new conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        public function insertarDatos($datos){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into alumno (nombre,marca,modelo,color,capacidad)
                    values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            return $result=mysqli_query($conexion,$sql);       
        }
        public function actualizarDatos($datos){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="UPDATE alumno set nombre='$datos[0]',
                                        marca='$datos[1]',
                                        modelo='$datos[2]',
                                        color='$datos[3]',
                                        capacidad='$datos[4]'
                                    where id_alumno='$datos[5]'";
            return $result=mysqli_query($conexion,$sql);       
        }
        public function eliminarDatos($id){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="DELETE from alumno where id_alumno='$id'";
            return $result=mysqli_query($conexion,$sql);       
        }
        

    }
    
?>