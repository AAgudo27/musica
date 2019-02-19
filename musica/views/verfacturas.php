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
              echo '<td>'.$arrayfacturas[$cont]['InvoiceId'].'</td><td>'.$arrayfacturas[$cont]['CustomerId'].'</td><td>'.$arrayfacturas[$cont]['InvoiceDate'].'</td><td>'.$arrayfacturas[$cont]['Total'].'</td><td>'.$arrayfacturas[$cont]['InvoiceLineId'].'</td><td>'.$arrayfacturas[$cont]['TrackId'].'</td><td>'.$arrayfacturas[$cont]['UnitPrice'].'</td>';
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
