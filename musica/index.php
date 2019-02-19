<?php
//echo "Inicio index"."<br>";
// Llamada al fichero que inicia la conexión a la Base de Datos

 session_start();
require_once("db/conexion.php");



 header("Location:views/login.php");
     	
   
// Llamada al controlador
 //require_once("controllers/controladorlogin.php");
//echo "Fin index"."<br>";
?>