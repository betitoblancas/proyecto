<?php
session_start();
require_once '../app/conexion.php';
$conexion=conexion();

$matricula = $_POST['usuario'];
$password = $_POST['password'];


$busqueda_docente = "SELECT * FROM docente WHERE clave_trabajador='$matricula' AND password='$password' ";

$resultado_docente=$conexion->query($busqueda_docente);

if(mysqli_num_rows($resultado_docente)>0){
  $_SESSION['admin'] = $matricula;
  echo 1;
  $conexion->close();
}else{
  echo 0;
  $conexion->close();
  session_destroy();
}

?>