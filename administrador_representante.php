<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<style type="text/css">
#p1 {
	height: 500px;
	width: 1200px;
	overflow: auto;
}
.tabla_representante {
	width: 500px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 10px;
}
.boton {
	font-family: Arial, Helvetica, sans-serif;
	height: 60px;
	width: 100px;
	font-size: 18px;
	color: #FFF;
	background-color: #021D48;
	border: 3px solid #F90;
	margin-top: 5px;
}
#principal2 {
	background-color: #FFF;
	height: 800px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
.caja {
	height: 30px;
	width: 200px;
}
table {
	width: 1180px;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	margin-right: auto;
	margin-left: auto;
}
#p2 {
	height: 180px;
	width: 1200px;
	margin-top: 10px;
}
</style>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">
  <div id="p1">
    <table width="400" border="0">
    
      <tr>
        <th colspan="7" bgcolor="#FF9900" scope="col">Representantes Legales</th>
      </tr>
      <tr>
        <th width="114" bgcolor="#021D48" scope="col">EmpresaID</th>
        <th width="151" bgcolor="#021D48" scope="col">Cedula</th>
        <th width="193" bgcolor="#021D48" scope="col">Apellido</th>
        <th width="193" bgcolor="#021D48" scope="col">Nombre</th>
        <th width="324" bgcolor="#021D48" scope="col">Direccion</th>
        <th width="281" bgcolor="#021D48" scope="col">Cargo</th>
        <th width="190" bgcolor="#021D48" scope="col">Telefono</th>
      </tr>
      <?php
  
  include_once('php/conectar.php');
  
  $proc_cedula=$_GET['ced'];
  $proc_empresa=$_GET['emp'];
  $proc_nombre=$_GET['nom'];
  $proc_telefono=$_GET['tlf'];

  
  
  $q="select * from representante_legal";
  $result=mysql_query($q,$conectar);
  $cantidad=mysql_num_rows($result);
 
  for($i=0;$i<=($cantidad-1);$i++){
  //vaciar todos los representantes legales
  
  $EmpresaID=mysql_result($result,$i,0);
  $cedula=mysql_result($result,$i,1);
  $apellido=mysql_result($result,$i,2);
  $nombre=mysql_result($result,$i,3);
  $direccion=mysql_result($result,$i,4);
  $cargo=mysql_result($result,$i,5);
  $telefono=mysql_result($result,$i,6);
  
  
  echo '<tr>
    <th bgcolor="#006699" scope="row">'.$EmpresaID.'</th>
    <th bgcolor="#006699">'.$cedula.'</th>
    <th bgcolor="#006699">'.$apellido.'</th>
    <th bgcolor="#006699">'.$nombre.'</th>
	<th bgcolor="#006699">'.$direccion.'</th>
	<th bgcolor="#006699">'.$cargo.'</th>
	<th bgcolor="#006699">'.$telefono.'</th>
  </tr>';
  }
  

  
  ?>
    </table>
  </div>
  <div id="p2">
  <form action="php/tabla_representante.php" method="post" name="form1">
  <table width="400" border="0" class="tabla_representante" id="tabla_representante" >
  <tr>
    <th width="142" height="34" bgcolor="#021D48" scope="col">Cedula</th>
    <th width="200" scope="col"><label for="cedula"></label>
      <input name="cedula" type="text" class="caja" id="cedula" value="<?php echo $proc_cedula ?>" /></th>
    <th width="144" rowspan="4" scope="col"><input name="buscar" type="submit" class="boton" id="buscar" value="Buscar"   />
      <input name="atras" type="button" class="boton" id="atras" value="Atras" onclick="location.href='administrador.php'"  /></th>
    </tr>
  <tr>
    <th height="34" bgcolor="#021D48" scope="row">Nombre</th>
    <th><input name="nombre" type="text" class="caja" id="nombre" value="<?php echo $proc_nombre ?>" readonly="readonly" /></th>
    </tr>
  <tr>
    <th height="34" bgcolor="#021D48" scope="row">Empresa</th>
    <th><input name="empresa" type="text" class="caja" id="empresa" value="<?php echo $proc_empresa ?>" readonly="readonly" />
      </th>
    </tr>
  <tr>
    <th height="34" bgcolor="#021D48" scope="row">Telefono</th>
    <th><input name="telefono" type="text" class="caja" id="telefono" value="<?php echo $proc_telefono ?>" readonly="readonly" /></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  </form>
  </div>
</div>
<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12</div>
</body>
</html>