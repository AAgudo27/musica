<HTML>
<HEAD> <TITLE> Alejandro cabañas </TITLE>
</HEAD>
<BODY>
<form name='mi_formulario' action='../controllers/controladorporFechas.php' method='post'>

 <h1>Pedidos Por Fechas</h1><br><br>

Fecha inicio yyyy-mm-dd: <input type='text' name='inicio' value='' size=15><br>
Fecha final yyyy-mm-dd: <input type='text' name='final' value='' size=15><br>

<input type="hidden" name="pagina" value="1">

<br>
<input type="submit" value='Mostrar'>
<a href="../views/main.php">Volver Main</a>
</FORM>
</BODY>
</HTML>