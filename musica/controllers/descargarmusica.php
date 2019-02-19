<?php
session_start();
require_once("../models/funciones.php");

require_once("../db/conexion.php");

$nuevoIdInvoice=nuevoInvoiceId($db);

$cliente= $_SESSION['id_user'];

$array=unserialize($_COOKIE['canciones']);

$precioTotal=0;

	for ($i=0; $i <count($array); $i++) { 

		$precioUnit=sacarPrecioCancion($db,$array[$i]);
		$precioTotal+=$precioUnit;
	}

$invoice=nuevaInvoice($db,$nuevoIdInvoice,$cliente,$precioTotal);
//echo $invoice.'<br>';

	if($invoice){
		$ok[0]='';
		$pos=0;
		while($pos<count($array)){

				$idline=invoiceLineId($db,$nuevoIdInvoice);
				//echo $idline;

				$ok[$pos]=nuevaInvoiceLine($db,$idline,$nuevoIdInvoice,$array[$pos]);
				$pos++;
		}

	}
	setcookie('canciones','', time() -1, "/");

	
	
	require_once("../views/compraHecha.php");
	




	











?>