<?php

setcookie('canciones','', time() -1, "/");
header('Location: ../views/comprarMusica.php');

?>