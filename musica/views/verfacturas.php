<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
        
      </style>
      
   </head>
   
   <body >
	
      <div align = "center">
         <div >
            


				<?php
            echo  count($arrayfacturas).' Resultados';
            $cont=0;
            echo '<table border="1">';
            echo '<tr>';
            echo '<td>invoiceid</td><td>customerid</td><td>invoicedate</td><td>total</td><td>invoicelineID</td><td>trackid</td><td>unitprice</td>';
            echo '</tr>';
           while($cont < count($arrayfacturas)) {
      
              echo '<tr>';
              echo '<td>'.$arrayfacturas[$cont]['prueba'].'</td><td>'.$arrayfacturas[$cont]['customerid'].'</td><td>'.$arrayfacturas[$cont]['invoicedate'].'</td><td>'.$arrayfacturas[$cont]['total'].'</td><td>'.$arrayfacturas[$cont]['invoicelineID'].'</td><td>'.$arrayfacturas[$cont]['trackid'].'</td><td>'.$arrayfacturas[$cont]['unitprice'].'</td>';
                echo '</tr>';

                $cont++;
            }
            
            echo '</table>'
            ?>
           <a href="../views/main.php">Volver Compra</a>
				
         </div>
			
      </div>

   </body>
</html>