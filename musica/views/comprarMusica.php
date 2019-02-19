<HTML>
<HEAD> <TITLE> Alejandro cabañas</TITLE>
</HEAD>
<BODY>
<form name='mi_formulario' action='../controllers/cookie.php' method='post'>


<h3>Canciones</h3>

<?php
require '../db/conexion.php';
require '../models/funcionesListaDesplegable.php';

echo "<select name='cancion'>";


$sql="select trackid , name  from track limit 500;";

$sentencia=mysqli_query($db, $sql);

	
	while($linea=mysqli_fetch_assoc($sentencia)){
		echo "<option value='".$linea['trackid']."'>".$linea['name'].' '.$linea['trackid']."</option>";
	}

echo "</select>";

?>



<br><br><br>
<input type="submit" value='añadir a la Cesta'><br>
<a href="../controllers/borrarcookie.php">borrar Canciones</a><br>
<a href="../controllers/descargarmusica.php">Descargar</a><br>
<a href = 'main.php'>VOLVER</a>


</FORM>
</BODY>
</HTML>

<?php


if(isset($_COOKIE['canciones'])){
	echo "<table border='1'>";
	echo "<th> Codigo Cancion</th><th>Cancion</th>";

 	$arrayCodigoCanciones=unserialize($_COOKIE['canciones']);


		for ($i=0; $i < count($arrayCodigoCanciones) ; $i++) { 
			
		$nombre=nombrecancion($db,$arrayCodigoCanciones[$i]);

		echo '<tr>';
		echo "<td >".$arrayCodigoCanciones[$i]."</td><td>".$nombre."</td>";
		echo '</tr>';
		
		}
	
	echo "</table>";
//var_dump(unserialize($_COOKIE['pedidos']));
}


?>