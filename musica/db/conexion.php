<?php
   define('DB_SERVER', '10.131.73.18');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootroot');
   define('DB_DATABASE', 'spotify');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if (!$db) {
		die("Error conexión: " . mysqli_connect_error());
				}

	mysqli_autocommit($db, false); 
  //include('session.php');
?>
