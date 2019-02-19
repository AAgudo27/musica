<?php 

function nuevoInvoiceId($db){

$sql = "select max(InvoiceId)+1 from Invoice;";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

     
    return $row['max(InvoiceId)+1'];

}
function invoiceLineId($db,$invoiceid){

	$sql="select ifnull(max(InvoiceLineId),0)+1 from InvoiceLine;";
	$result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

     
    return $row['ifnull(max(InvoiceLineId),0)+1'];
}

function nuevaInvoice($db,$id,$cliente,$preciototal){

	
	$bool=true;

	$sql2= "insert into Invoice(InvoiceId,CustomerId,InvoiceDate,Total) values($id,$cliente,curdate(),$preciototal);";

	//echo $sql2;

	if($sentencia=mysqli_query($db,$sql2)){

		$bool=true;
	}
	else{
		$bool=false;
		mysqli_rollback($db);
	}
	return $bool;
}
function sacarPrecioCancion($db,$cancion){

	$sql="select UnitPrice from Track where TrackId=$cancion;";
	$result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    return $row['UnitPrice'];

}
function nuevaInvoiceLine($db,$idline,$idinvoice,$cancion){

	$bool='';

	$precio=sacarPrecioCancion($db,$cancion);

	$sql2= "insert into InvoiceLine(InvoiceLineId,InvoiceId,TrackId,UnitPrice,Quantity) values($idline,$idinvoice,$cancion,$precio,1);";

	//echo $sql2;

	if($sentencia=mysqli_query($db,$sql2)){

		$bool='Cancion '.$cancion.' descargada con exito.';
		mysqli_commit($db);
	}
	else{
		$bool='Cancion '.$cancion.' No descargada con exito.';
		mysqli_rollback($db);
	}

	return $bool;

}

function consultarFacturas($db,$cliente){

	$sql="select Invoice.InvoiceId  ,Invoice.CustomerId,Invoice.InvoiceDate,Invoice.Total, InvoiceLine.InvoiceLineID,InvoiceLine.TrackId,InvoiceLine.UnitPrice from Invoice,InvoiceLine where Invoice.InvoiceId=InvoiceLine.InvoiceId and CustomerId=$cliente order by Invoice.InvoiceId ;";

	//echo $sql;
	$result = mysqli_query($db,$sql);
	$pos=0;
	$array[0]='';

	 while($row = mysqli_fetch_assoc($result)){

	 	$array[$pos]=$row;
		$pos++;
	 }
    

    //var_dump($array);

    return $array;
}

function consultarFacturasEntreFechas($db,$cliente,$fechaInicio,$fechaFinal){

	$sql="select Invoice.InvoiceId  ,Invoice.CustomerId,Invoice.InvoiceDate,Invoice.Total, InvoiceLine.InvoiceLineID,InvoiceLine.TrackId,InvoiceLine.UnitPrice from Invoice,InvoiceLine where Invoice.InvoiceId=InvoiceLine.InvoiceId and CustomerId=$cliente and Invoice.InvoiceDate between '$fechaInicio' and '$fechaFinal';";

	$result = mysqli_query($db,$sql);
	$pos=0;
	$array[0]='';

	 while($row = mysqli_fetch_assoc($result)){

	 	$array[$pos]=$row;
		$pos++;
	 }
    

    //var_dump($array);

    return $array;
}





















?>