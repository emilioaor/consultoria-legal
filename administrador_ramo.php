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
#p2 {
	height: 100px;
	width: 1200px;
	margin-top: 10px;
}
#principal2 {
	background-color: #FFF;
	height: 700px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
.caja_descripcion {
	width: 700px;
}
.boton {
	width: 100px;
	height: 30px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	background-color: #021D48;
	border: 3px solid #F90;
	color: #FFF;
	margin-left: 5px;
}
.boton_peque {
	height: 30px;
	width: 75px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFF;
	border: 3px solid #F90;
	background-color: #021D48;
}
table {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	margin-right: auto;
	margin-left: auto;
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
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
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
    <th colspan="4" bgcolor="#FF9900" scope="col">Ramos</th>
    </tr>
  <tr>
    <th width="124" bgcolor="#021D48" scope="col">Codigo Ramo</th>
    <th width="660" bgcolor="#021D48" scope="col">Descripcion</th>
    <th width="202" colspan="2" bgcolor="#021D48" scope="col">&nbsp;</th>
    </tr>
    <?php
		
		include_once('php/conectar.php');
		
		$q="select * from ramo";
		$result=mysql_query($q,$conectar);
		$cantidad=mysql_num_rows($result);
		
		if($cantidad>0){
		//hay ramos
		for($i=0;$i<=($cantidad-1);$i++){
		//vaciar los ramos
		$cod_ramo=mysql_result($result,$i,0);
		$descripcion=mysql_result($result,$i,1);
		echo ' <tr>
    <th bgcolor="#006699" scope="col">'.$cod_ramo.'</th>
    <th bgcolor="#006699" scope="col"><input name="textfield" type="text" class="caja_descripcion" id="des'.$i.'" value="'.$descripcion.'" /></th>
    <th width="90" bgcolor="#006699" scope="col"><input name="button" type="button" class="boton_peque" id="button" value="Eliminar" onclick="var desc=document.getElementById(\'des'.$i.'\').value;location.href=\'php/tabla_ramo.php?cod='.$cod_ramo.'&proc=0&des=\'+desc" /></th>
    <th width="90" bgcolor="#006699" scope="col"><input name="button2" type="button" class="boton_peque" id="button2" value="Actualizar" onclick="var desc=document.getElementById(\'des'.$i.'\').value; location.href=\'php/tabla_ramo.php?cod='.$cod_ramo.'&proc=1&des=\'+desc" /></th>
  </tr>';
  
		}
  
		}
		
	?>
  </table>
</div>
  <div id="p2"><form action="php/agregar_ramo.php" method="post" id="form1" onsubmit="MM_validateForm('descripcion','','R');return document.MM_returnValue">
    <table width="1000" border="0">
      <tr>
      <th colspan="3" bgcolor="#FF9900" scope="col">Agregar Ramos</th>
      </tr>
    <tr>
      <th width="181" height="43" bgcolor="#021D48" scope="col">Descripcion
        <label for="descripcion"></label>        <label for="precio"></label></th>
      <th width="670" bgcolor="#021D48" scope="col"><input name="descripcion" type="text" class="caja_descripcion" id="descripcion" /></th>
      <th width="135" bgcolor="#021D48" scope="col"><input name="button2" type="submit" class="boton" id="button2" value="Agregar"/></th>
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