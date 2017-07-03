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
#principal2 {
	background-color: #FFF;
	height: 800px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
.boton {
	width: 100px;
	height: 30px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFF;
	background-color: #021D48;
	border: 3px solid #F90;
}
.boton_peque {
	height: 30px;
	width: 80px;
	font-size: 14px;
	color: #FFF;
	border: 3px solid #F90;
	font-family: Arial, Helvetica, sans-serif;
	background-color: #021D48;
}
#p2 {
	height: 160px;
	width: 1200px;
	margin-top: 10px;
}
table {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	margin-right: auto;
	margin-left: auto;
}
.caja_descripcion {
	width: 700px;
}
.caja_precio {
	width: 60px;
}
</style>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' debe ser numerico.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
    } if (errors) alert('Ocurrio el siguiente error(es):\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">
  <div id="p1"><table width="1000" border="0">
  <tr>
    <th colspan="4" bgcolor="#FF9900" scope="col">Servicios</th>
  </tr>
  <tr>
    <th width="712" bgcolor="#021D48" scope="col">Descripcion</th>
    <th width="75" bgcolor="#021D48" scope="col">Precio</th>
    <th width="127" colspan="2" bgcolor="#021D48" scope="col" ></th>
    </tr>

  <?php
  	include_once('php/conectar.php');
	
	$q="select * from servicio";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
	
	if($cantidad>=0){
	//hay servicios
	
	for($i=0;$i<=($cantidad-1);$i++){
	
	$cod_servicio=mysql_result($result,$i,0);
	$servicio=mysql_result($result,$i,1);
	$precio=mysql_result($result,$i,2);
	
	echo '<tr>
    <th bgcolor="#006699" scope="col">
      <input type="text" class="caja_descripcion" id="s'.$i.'"  value="'.$servicio.'" /></th>
    <th bgcolor="#006699" scope="col"><input type="text" class="caja_precio" id="pre'.$i.'" value="'.$precio.'" /></th>
	<th bgcolor="#006699" ><input id="'.$cod_servicio.'" type="button" class="boton_peque" id="button5" value="Eliminar" onclick="location.href=\'php/tabla_servicio.php?cod='.$cod_servicio.'&proc=0\'" /></th>
	<th bgcolor="#006699" ><input id="'.$cod_servicio.'" type="button" class="boton_peque" id="button6" value="Actualizar" onclick="var des=document.getElementById(\'s'.$i.'\').value; var pre=document.getElementById(\'pre'.$i.'\').value ;location.href=\'php/tabla_servicio.php?cod='.$cod_servicio.'&des=\'+des+\'&pre=\'+pre+\'&proc=1\'" /></th>
  </tr>';
  
	}
  
	}
  
  ?>
  </table>
</div>
  <div id="p2"><form action="php/agregar_servicio.php" method="post" id="form1" onsubmit="MM_validateForm('descripcion','','R','precio','','RisNum');return document.MM_returnValue">
    <table width="1000" border="0">
      <tr>
      <th colspan="3" bgcolor="#FF9900" scope="col">Agregar Servicios</th>
      </tr>
    <tr>
      <th width="753" bgcolor="#021D48" scope="col">Descripcion</th>
      <th width="81" bgcolor="#021D48" scope="col">Precio</th>
      <th width="152" bgcolor="#021D48" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th height="40" bgcolor="#006699" scope="col"><label for="descripcion"></label>
        <input name="descripcion" type="text" class="caja_descripcion" id="descripcion" /></th>
      <th bgcolor="#006699" scope="col"><label for="precio"></label>
        <input name="precio" type="text" class="caja_precio" id="precio" /></th>
      <th bgcolor="#006699" scope="col"><input name="button2" type="submit" class="boton" id="button2" value="Agregar"/></th>
    </tr>
    </table>
    <table width="1000" border="0">
      <tr>
        <th scope="col"><input name="button4" type="button" class="boton" id="button4" value="Atras" onclick="location.href='administrador.php'" /></th>
      </tr>
  </table>
  </form></div>
</div>
<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12</div>
</body>
</html>