<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#p1 {
	height: 300px;
	width: 1200px;
}
#p2 {
	height: 500px;
	width: 950px;
	float: left;
}
table {
	color: #FFF;
	font-size: 20px;
	margin-right: auto;
	margin-left: auto;
}
.caja {
	height: 30px;
	width: 200px;
}
.boton {
	height: 50px;
	width: 150px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #FFF;
	background-color: #021D48;
	border: 3px solid #F90;
	margin-right: 5px;
}
#principal2 {
	background-color: #FFF;
	height: 970px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
.tabla_ingreso {
	margin-right: auto;
	margin-left: auto;
	background-image: url(imagenes/fondo_ingreso.png);
	background-repeat: no-repeat;
	color: #FFF;
	background-size: 100% 100%;
}
.boton_ingresar {
	height: 30px;
	width: 80px;
	background-color: #021D48;
	border: 3px solid #FF9900;
	color: #FFF;
}
.boton_menu {
	width: 190px;
	height: 60px;
	position: relative;
	text-decoration: none;
}
.boton_menu:hover {
	width: 190px;
	height: 60px;
	position: relative;
	text-decoration: none;
	-webkit-animation: animacion_boton 0.8s;
	-webkit-animation-iteration-count:infinite;
	-moz-animation: animacion_boton 0.8s;
	-moz-animation-iteration-count:infinite;
	-ms-animation: animacion_boton 0.8s;
	-ms-animation-iteration-count:infinite;
	/*left: 10px;
	top: -5px;*/
}

@-webkit-keyframes animacion_boton{
	
	0%{-webkit-transform:translate(0px,0px);}
		
	50%{-webkit-transform:translate(10px,-5px);}
		
	100%{-webkit-transform:translate(0,0);}
}
@keyframes animacion_boton{
	
	0%{transform:translate(0px,0px);}
		
	50%{transform:translate(10px,-5px);}
		
	100%{transform:translate(0,0);}
}

.boton_ingresar1 {	height: 25px;
	width: 70px;
	background-color: #021D48;
	border: 3px solid #FF9900;
	color: #FFF;
}
.caja1 {	width: 100px;
	height: 20px;
}
.tabla_ingreso1 {	margin-right: auto;
	margin-left: auto;
	background-image: url(imagenes/fondo_ingreso.png);
	background-repeat: no-repeat;
	color: #FFF;
	background-size: 100% 100%;
	font-size: 12px;
}
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
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
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>

<?php
	include_once('php/conectar.php');
	
	$usuario=$_POST['USUARIO'];
	$contra=$_POST['CONTRA'];
	$rcontra=$_POST['rcontra'];
	
	$q="select * from ramo";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
?>



<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">

  <div id="p1">
    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1200" height="300">
      <param name="movie" value="transicion.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="transparent" />
      <param name="swfversion" value="6.0.65.0" />
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <param name="SCALE" value="exactfit" />
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="transicion.swf" width="1200" height="300">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="6.0.65.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <param name="SCALE" value="exactfit" />
        <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
        <div>
          <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
  </div>
  
  
  
  <div id="menu"> 
  
  <table width="250" border="0">
      <tr>
        <th height="75" scope="col"><a href="index.html"><img src="imagenes/btn_inicio.png" width="190" height="60" class="boton_menu" /></a></th>
      </tr>
      <tr>
        <th height="75" scope="col"><a href="informacion.html"><img src="imagenes/btn_qs.png" width="190" height="60" class="boton_menu" /></a></th>
      </tr>
      <tr>
        <th height="75" scope="col"><a href="registro.php"><img src="imagenes/btn_registro.png" width="190" height="60" class="boton_menu" /></a></th>
      </tr>
      <tr>
        <th height="75" scope="col"><a href="contactanos.php"><img src="imagenes/btn_contactanos.png" width="190" height="60" class="boton_menu" /></a></th>
      </tr>
    </table>
  
  <br />
    
    <form action="php/ingreso_usuario.php" method="post">
      <table width="147" height="165" border="0" class="tabla_ingreso1">
        <tr>
          <th width="141" height="42" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th height="17" scope="col">Usuario</th>
        </tr>
        <tr>
          <th height="21" scope="col"><label for="usuario"></label>
            <input type="text" name="usuario2" id="usuario" class="caja1"/></th>
        </tr>
        <tr>
          <th height="17" scope="col">Contraseña</th>
        </tr>
        <tr>
          <th height="21" scope="col"><input type="password" name="contra2" id="contra2" class="caja1" /></th>
        </tr>
        <tr>
          <th height="28" scope="col"><input name="button2" type="submit" class="boton_ingresar1" id="button2" value="Ingresar" /></th>
        </tr>
      </table>
    </form>
    
  </div>
  
  
  <div id="p2">
  
  <form action="php/registrar_usuario.php" method="post" name="form1" id="form1" onsubmit="MM_validateForm('rcontra','','R','e_nombre','','R','cedula','','R','e_direccion','','R','apellido','','R','e_telefono','','R','nombre','','R','e_ciudad','','R','direccion','','R','cargo','','R','telefono','','R');return document.MM_returnValue">
      <br />
      <br />
      <table width="700" border="0">
      <tr>
      	<th colspan="4"><input name="usuario" type="text" class="caja" id="usuario" tabindex="4" maxlength="40" value="<?php echo $usuario ?>" style="visibility:hidden" />      	  <input name="contra" type="text" class="caja" id="contra" tabindex="4" maxlength="40" value="<?php echo $contra ?>" style="visibility:hidden" />
      	  <input name="rcontra" type="text" class="caja" id="rcontra" tabindex="4" maxlength="40" value="<?php echo $rcontra ?>" style="visibility:hidden" /></th>
        </tr>
        <tr>
          <th colspan="2" bgcolor="#FF9900" scope="col">Empresa</th>
          <th colspan="2" bgcolor="#FF9900" scope="col">Cliente</th>
        </tr>
        <tr>
          <th width="194" height="34" bgcolor="#021D48" scope="row">Nombre</th>
          <td width="200"><input name="e_nombre" type="text" class="caja" id="e_nombre" tabindex="4" maxlength="40" /></td>
          <th width="219" bgcolor="#021D48">Cedula</th>
          <th width="200"><input name="cedula" type="text" class="caja" id="cedula" tabindex="10" maxlength="8"  /></th>
        </tr>
        <tr>
          <th height="34" bgcolor="#021D48" scope="row">Direccion</th>
          <td><input name="e_direccion" type="text" class="caja" id="e_direccion" tabindex="5" maxlength="50"/></td>
          <th bgcolor="#021D48">Apellido</th>
          <th><input name="apellido" type="text" class="caja" id="apellido" tabindex="11" maxlength="25" /></th>
        </tr>
        <tr>
          <th height="34" bgcolor="#021D48" scope="row">Telefono</th>
          <td><input name="e_telefono" type="text" class="caja" id="e_telefono" tabindex="6" maxlength="11" /></td>
          <th bgcolor="#021D48">Nombre</th>
          <th><input name="nombre" type="text" class="caja" id="nombre" tabindex="12" maxlength="25" /></th>
        </tr>
        <tr>
          <th height="34" bgcolor="#021D48" scope="row">Ciudad</th>
          <td><input name="e_ciudad" type="text" class="caja" id="e_ciudad" tabindex="7" maxlength="25" /></td>
          <th bgcolor="#021D48">Direccion</th>
          <th><input name="direccion" type="text" class="caja" id="direccion" tabindex="13" maxlength="50" /></th>
        </tr>
        <tr>
          <th height="34" bgcolor="#021D48" scope="row">Ramo</th>
          <td>
          <select name="e_ramo" class="caja" id="e_ramo" tabindex="8">
          <?php
		  	for($i=0;$i<=($cantidad-1);$i++){
				$ramo=mysql_result($result,$i,1);
				$cod_ramo=mysql_result($result,$i,0);
		  	echo "<option value='$cod_ramo'>$ramo</option>";
			}
		  ?>
          </select>
          </td>
          <th bgcolor="#021D48">Cargo</th>
          <th><input name="cargo" type="text" class="caja" id="cargo" tabindex="14" maxlength="30" /></th>
        </tr>
        <tr>
          <th height="34" bgcolor="#021D48" scope="row">Fax</th>
          <td><input name="e_fax" type="text" class="caja" id="e_fax" tabindex="9" maxlength="11" /></td>
          <th bgcolor="#021D48">Telefono </th>
          <th><input name="telefono" type="text" class="caja" id="telefono" tabindex="15" maxlength="11" /></th>
        </tr>
        <tr>
          <th height="74" colspan="4" scope="row"><input name="button" type="submit" class="boton" id="button" value="Registrar"  tabindex="16"/></th>
        </tr>
      </table>
    </form>
  
  </div>
  
  
</div>




<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12 </div>

</body>
</html>