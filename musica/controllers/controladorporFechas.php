<?php 

 session_start();
//Llamada al modelo -- Intermediario entre vista y modelo !!!
require_once("../models/funciones.php");

require_once("../db/conexion.php");

	$cliente= $_SESSION['id_user'];
	$inicio =$_POST['inicio'];
    $final =$_POST['final']; 

    if(empty($inicio)){
    	 header("location: ../views/facturasporfechas.php");
    }
    else{
    	 if(empty($final)){
    	  	 $final=curdate();
    	}

    	$arrayfechas=consultarFacturasEntreFechas($db,$cliente,$inicio,$final);
    }

    
    require_once("../views/verfacturasfecha.php");





?>