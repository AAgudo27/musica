<?php

if(isset($_COOKIE['canciones'])){
	$array=unserialize($_COOKIE['canciones']);

	//var_dump($array);
	$producto=$_POST['cancion'];
	
	$bool=true;

		for ($i=0; $i <count($array) ; $i++) { 
			if($array[$i] == $producto){
						$bool=false;
			}
		}

		if($bool){
			array_push($array,$producto);
			setcookie('canciones',serialize($array), time() + (86400 * 30), "/");
			header('Location: ../views/comprarMusica.php');
			//var_dump(unserialize($_COOKIE['canciones']));
		}
		else{
			header('Location: ../views/comprarMusica.php');
		}
		
}
else{

	$array[0]=$_POST['cancion'];
	//var_dump($array);
	setcookie('canciones',serialize($array), time() + (86400 * 30), "/");

	//var_dump(unserialize($_COOKIE['canciones']));
	header('Location: ../views/comprarMusica.php');

}

?>