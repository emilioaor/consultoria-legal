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
table {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	margin-right: auto;
	margin-left: auto;
	width: 1000px;
}
#p2 {
	height: 170px;
	width: 1200px;
	margin-top: 10px;
}
.boton {
	height: 60px;
	width: 100px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 18px;
	color: #FFF;
	background-color: #021D48;
	border: 3px solid #F90;
	margin-bottom: 5px;
}
#principal2 {
	background-color: #FFF;
	height: 800px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
.tabla_usuario {
	width: 500px;
	margin-right: auto;
	margin-left: auto;
}
.caja {
	height: 30px;
	width: 200px;
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
        <th colspan="4" bgcolor="#FF9900" scope="col">Todos los Usuarios</th>
      </tr>
      <tr>
        <th width="332" bgcolor="#021D48" scope="col">Usuario</th>
        <th width="332" bgcolor="#021D48" scope="col">Contraseña</th>
        <th width="150" bgcolor="#021D48" scope="col">Cod Nivel</th>
        <th width="150" bgcolor="#021D48" scope="col">EmpresaID</th>
      </tr>
      <?php
  
  include_once('php/conectar.php');
  
  $proc_usuario=$_GET['usu'];
  $proc_contra=$_GET['contra'];
  $proc_nivel=$_GET['niv'];
  $proc_empresa=$_GET['n_empresa'];

  
  
  $q="select * from usuario where usuario<>'administrador'";
  $result=mysql_query($q,$conectar);
  $cantidad=mysql_num_rows($result);
 
  for($i=0;$i<=($cantidad-1);$i++){
  //vaciar todos los usuarios
  
  $usuario=mysql_result($result,$i,0);
  $contra=mysql_result($result,$i,1);
  $cod_nivel=mysql_result($result,$i,2);
  $EmpresaID=mysql_result($result,$i,3);
  
  echo '<tr>
    <th bgcolor="#006699" scope="row">'.$usuario.'</th>
    <th bgcolor="#006699">'.$contra.'</th>
    <th bgcolor="#006699">'.$cod_nivel.'</th>
    <th bgcolor="#006699">'.$EmpresaID.'</th>
  </tr>';
  }  
  
  ?>
    </table>
  </div>
  <div id="p2">
  <form action="php/tabla_usuario.php" method="post" name="form1">
  <table width="400" border="0" class="tabla_usuario" id="tabla_usuario" >
  <tr>
    <th width="150" bgcolor="#021D48" scope="col">Usuario</th>
    <th width="200" scope="col"><label for="usuario"></label>
      <input name="usuario" type="text" class="caja" id="usuario" value="<?php echo $proc_usuario ?>" /></th>
    <th width="136" rowspan="4" scope="col"><input name="buscar" type="submit" class="boton" id="buscar" value="Buscar"   />
      <input name="atras" type="button" class="boton" id="atras" value="Atras" onclick="location.href='administrador.php'"  /></th>
    </tr>
  <tr>
    <th bgcolor="#021D48" scope="row">Contraseña</th>
    <th><input name="contra" type="text" class="caja" id="contra" value="<?php echo $proc_contra ?>" readonly="readonly" /></th>
    </tr>
  <tr>
    <th bgcolor="#021D48" scope="row">Nivel de Usuario</th>
    <th><input name="nivel" type="text" class="caja" id="nivel" value="<?php echo $proc_nivel ?>" readonly="readonly" />
      </th>
    </tr>
  <tr>
    <th bgcolor="#021D48" scope="row">Empresa</th>
    <th><input name="n_empresa" type="text" class="caja" id="n_empresa" value="<?php echo $proc_empresa ?>" readonly="readonly" /></th>
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