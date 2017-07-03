<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
#p1 {
	height: 500px;
	width: 1200px;
	overflow: auto;
}
table {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	margin-right: auto;
	margin-left: auto;
}
#p2 {
	height: 150px;
	width: 1200px;
	margin-top: 10px;
}
.boton {
	height: 60px;
	width: 100px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 18px;
	background-color: #021D48;
	border: 3px solid #F90;
	color: #FFF;
	margin-top: 5px;
}
#principal2 {
	background-color: #FFF;
	height: 700px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
.tabla_usuario {
	margin-right: auto;
	margin-left: auto;
}
.caja {
	height: 30px;
	width: 200px;
}
</style>
<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">
  <div id="p1">
    <table width="1180" border="0">
    
      <tr>
        <th colspan="7" bgcolor="#FF9900" scope="col">Empresas</th>
      </tr>
      <tr>
        <th width="100" bgcolor="#021D48" scope="col">EmpresaID</th>
        <th width="270" bgcolor="#021D48" scope="col">Nombre</th>
        <th width="330" bgcolor="#021D48" scope="col">Direccion</th>
        <th width="150" bgcolor="#021D48" scope="col">Telefono</th>
        <th width="246" bgcolor="#021D48" scope="col">Ciudad</th>
        <th width="150" bgcolor="#021D48" scope="col">Fax</th>
        <th width="100" bgcolor="#021D48" scope="col">Cod Ramo</th>
      </tr>
      <?php
  
  include_once('php/conectar.php');
  
  $proc_EmpresaID=$_GET['eid'];
  $proc_nombre=$_GET['nom'];
  $proc_usuario=$_GET['usu'];
  $proc_repre=$_GET['rep'];

  
  
  $q="select * from empresa";
  $result=mysql_query($q,$conectar);
  $cantidad=mysql_num_rows($result);
 
  for($i=0;$i<=($cantidad-1);$i++){
  //vaciar todos los usuarios
  
  $EmpresaID=mysql_result($result,$i,0);
  $nombre=mysql_result($result,$i,1);
  $direccion=mysql_result($result,$i,2);
  $telefono=mysql_result($result,$i,3);
  $ciudad=mysql_result($result,$i,4);
  $fax=mysql_result($result,$i,5);
  $cod_ramo=mysql_result($result,$i,6);
  
  
  echo '<tr>
    <th bgcolor="#006699" scope="row">'.$EmpresaID.'</th>
    <th bgcolor="#006699">'.$nombre.'</th>
    <th bgcolor="#006699">'.$direccion.'</th>
    <th bgcolor="#006699">'.$telefono.'</th>
	<th bgcolor="#006699">'.$ciudad.'</th>
	<th bgcolor="#006699">'.$fax.'</th>
	<th bgcolor="#006699">'.$cod_ramo.'</th>
  </tr>';
  }
  

  
  ?>
    </table>
  </div>
  <div id="p2">
  <form action="php/tabla_empresa.php" method="post" name="form1">
  <table width="440" border="0" class="tabla_usuario" id="tabla_usuario" >
  <tr>
    <th width="120" height="32" bgcolor="#021D48" scope="col">EmpresaID</th>
    <th width="200" scope="col"><label for="EmpresaID"></label>
      <input name="EmpresaID" type="text" class="caja" id="EmpresaID" value="<?php echo $proc_EmpresaID ?>" /></th>
    <th width="106" rowspan="4" scope="col"><input name="buscar" type="submit" class="boton" id="buscar" value="Buscar"   />
      <input name="atras" type="button" class="boton" id="atras" value="Atras" onclick="location.href='administrador.php'"  /></th>
    </tr>
  <tr>
    <th bgcolor="#021D48" scope="row">Empresa</th>
    <th><input name="nombre" type="text" class="caja" id="nombre" value="<?php echo $proc_nombre ?>" readonly="readonly" /></th>
    </tr>
  <tr>
    <th bgcolor="#021D48" scope="row">Usuario</th>
    <th><input name="usuario" type="text" class="caja" id="usuario" value="<?php echo $proc_usuario ?>" readonly="readonly" /></th>
    </tr>
  <tr>
    <th height="32" bgcolor="#021D48" scope="row">Representante</th>
    <th><input name="representante" type="text" class="caja" id="representante" value="<?php echo $proc_repre ?>" readonly="readonly" /></th>
    </tr>
  </table>

  </form>
  </div>
</div>
<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12</div>
</body>
</html>