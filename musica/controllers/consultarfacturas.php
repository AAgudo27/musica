<?php
session_start();
require_once("../models/funciones.php");

require_once("../db/conexion.php");


$cliente= $_SESSION['id_user'];

$arrayfacturas=consultarFacturas($db,$cliente);

require_once("../views/verfacturas.php");
	




?>