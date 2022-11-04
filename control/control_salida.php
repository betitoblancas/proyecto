<?php 
session_start();
if($_SESSION['admin'] ){	
	session_destroy();
  header("location: inicio");
}
else{
  session_destroy();
  header("location: inicio");
}
?>