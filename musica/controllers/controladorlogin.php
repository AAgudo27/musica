<?php

 session_start();
//Llamada al modelo -- Intermediario entre vista y modelo !!!
require_once("../models/funcionesLogin.php");

require_once("../db/conexion.php");

	 $correo =$_POST['correo'];
   $mypassword =$_POST['password']; 


$id=idcustomers($db,$correo,$mypassword);

//echo $id;

if(empty($id)){

   header("location: ../views/login.php");

}
else{
       $_SESSION['login_user'] = $correo;
       $_SESSION['id_user']=$id;

        header("location: ../views/main.php");

}
/*if ($id!='error') {
      

     	}*/


//$title= titleEmployees($db,$id);
//echo $title;
//Llamada a la vista -- Intermediario entre vista y modelo !!!
/*if($title=='Manager'){
               header("location: ../views/welcome.php");
            }
            else{
               header("location: ../views/welcome2.php");
           }*/



//echo "Fin controller"."<br>";
?>