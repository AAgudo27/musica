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
            echo  count($arrayfechas).' Resultados';
            $cont=0;
            echo '<table border="1">';
            echo '<tr>';
            echo '<td>invoiceid</td><td>customerid</td><td>invoicedate</td><td>total</td><td>invoicelineID</td><td>trackid</td><td>unitprice</td>';
            echo '</tr>';
           while($cont < count($arrayfechas)) {
      
              echo '<tr>';
              echo '<td>'.$arrayfechas[$cont]['invoiceid'].'</td><td>'.$arrayfechas[$cont]['customerid'].'</td><td>'.$arrayfechas[$cont]['invoicedate'].'</td><td>'.$arrayfechas[$cont]['total'].'</td><td>'.$arrayfechas[$cont]['invoicelineID'].'</td><td>'.$arrayfechas[$cont]['trackid'].'</td><td>'.$arrayfechas[$cont]['unitprice'].'</td>';
                echo '</tr>';

                $cont++;
            }
            
            echo '</table>'
            ?>
           <a href="../views/facturasporfechas.php">Volver Compra</a>
				
         </div>
			
      </div>

   </body>
</html>