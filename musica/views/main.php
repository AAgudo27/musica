<?php
 session_start();
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo  $_SESSION['login_user']; ?></h1> 
	  
	  
	  <nav class="dropdownmenu">
  <ul>
    <li><a href="comprarMusica.php">Comprar Musica</a></li>
     <li><a href="../controllers/consultarfacturas.php">Consultar Facturas</a></li> 
    <li><a href="facturasporfechas.php">Consultar Facturas Entre 2 Fechas</a></li>
     
  </ul>
</nav>
	  
      <h2><a href = "../controllers/sesiondestroy.php">Cerrar Sesion</a></h2>
   </body>
   
</html>