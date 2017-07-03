<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#p1 {
	height: 500px;
	width: 1200px;
}
table {
	margin-right: auto;
	margin-left: auto;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
}
.i1:hover {
	height: 90px;
	width: 110px;
}
.i2:hover {
	height: 110px;
	width: 90px;
}
.i3:hover {
	height: 60px;
	width: 140px;
}
.i4:hover {
	height: 60px;
	width: 140px;
}

.boton {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	background-color: #021D48;
	height: 50px;
	width: 80px;
	border: 5px solid #F90;
	font-size: 20px;
}
#principal2 {
	background-color: #FFF;
	height: 650px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}

#p2 {
	width: 1200px;
	height: 150px;
}
a {
	color: #FFF;
}
</style>
</head>

<?php
	
	$num_solicitud=$_GET['num'];
	
	include_once('php/conectar.php');
	
	$q="select * from solicitud where num_solicitud=$num_solicitud";
	$result=mysql_query($q,$conectar);
	$EmpresaID=mysql_result($result,0,2);
	
	$q1="select * from usuario where EmpresaID=$EmpresaID";
	$result1=mysql_query($q1,$conectar);
	$usuario=mysql_result($result1,0,0);
	
	$q2="select * from documento where usuario='$usuario'";
	$result2=mysql_query($q2,$conectar);
	$cantidad2=mysql_num_rows($result2);

?>

<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">
  <div id="p1">
  <br />
  <table width="824" border="0">
  <tr>
    <th colspan="3" bgcolor="#FF9900" scope="col">Lista de Documentos</th>
  </tr>
  <tr>
    <th width="270" bgcolor="#021D48" scope="col">Documento</th>
    <th width="270" bgcolor="#021D48" scope="col">Descarga</th>
    <th width="270" bgcolor="#021D48" scope="col">Eliminar</th>
  </tr>
  
  <?php
  	for($x=0;$x<=($cantidad2-1);$x++){
		
		$documento=mysql_result($result2,$x,1);
		
		echo '<tr>
    <th bgcolor="#006699" scope="col"><img src="imagenes/word.png" width="80" height="100" /><br />'.$documento.'</th>
    <th bgcolor="#006699" scope="col"><a href="cargas/'.$documento.'"><img src="imagenes/descargar.png" width="100" height="80" class="i1" /></a></th>
    <th bgcolor="#006699" scope="col"><a href="php/eliminar_documento.php?num='.$num_solicitud.'&doc='.$documento.'&usu=consultor"><img src="imagenes/eliminar_documento.png" width="80" height="100" class="i2" /></a></th>
  </tr>';
			
	}
  ?>
  
  </table>
  </div>
  <div id="p2"><br />
  <table width="1200" border="0">
  <tr>
    <th width="300" height="95" scope="col">&nbsp;</th>
    <th width="190" scope="col"><a href="consultor_solicitud.php?num=<?php echo $num_solicitud ?>"><img src="imagenes/boton_atras.png" width="130" height="50" class="i3" /></a></th>
    <th width="192" scope="col"><a href="index.html"><img src="imagenes/boton_cerrar_sesion.png" width="130" height="50" class="i4" /></a></th>
    <th width="300" scope="col">&nbsp;</th>
  </tr>
</table>
</div>
</div>
<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12</div>
</body>
</html>