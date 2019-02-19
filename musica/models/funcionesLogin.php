<?php

function idcustomers($db,$correo,$password){


	 $sql = "SELECT CustomerId FROM Customer WHERE Email = '$correo' and LastName = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

     
    return $row['CustomerId'];
}












?>