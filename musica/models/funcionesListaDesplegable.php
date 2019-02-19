<?php

function nombrecancion($db,$codigo){


	 $sql = "select Name from Track where TrackId=$codigo;";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

     
    return $row['Name'];
}



?>
