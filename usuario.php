<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<script type="text/javascript" src="JavaScript/Otros_Eventos.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="css/pagina_basica.css" rel="stylesheet" type="text/css" />
<?php
	include_once('php/conectar.php');

	$usuario=$_GET['usu'];
	$e_empresa=$_GET['emp'];
	$nombre=$_GET['nom'];
	$apellido=$_GET['ape'];
	$EmpresaID=$_GET['eid'];
	$url="?usu=$usuario&emp=$e_empresa&nom=$nombre&ape=$apellido&eid=$EmpresaID";
?>

<style type="text/css">
#p4 {
	height: 300px;
	width: 1200px;
	float: left;
}

#p1 {
	float: left;
	height: 270px;
	width: 1200px;
	margin-top: 15px;
}
.lista {
	width: 400px;
	height: 120px;
}
#p2 {
	height: 175px;
	width: 1200px;
	float: left;
	text-align: center;
	margin-top: 10px;
}
.combo {
	width: 150px;
}
.boton {
	width: 120px;
	height: 30px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	color: #FFF;
	background-color: #021D48;
	border: 3px solid #F90;
	margin-top: 5px;
}
.area {
	height: 120px;
	width: 400px;
	max-width:400px;
	max-height:120px;
	min-height:120px;
	min-width:400px;
}

table {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	width: 1180px;
	margin-right: auto;
	margin-left: auto;
}
#principal2 {
	background-color: #FFF;
	height: 800px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
</style>

<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">


<div id="p4">
  <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1200" height="300">
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


<div id="p1">
   <form enctype="multipart/form-data"   >
  <table width="400" border="5">
  <tr>
    <th colspan="4" bgcolor="#FF9900" scope="col">Datos de su Cuenta</th>
    </tr>
  <tr bgcolor="#021D48">
    <th width="186" scope="row">Usuario</th>
    <th width="400" bgcolor="#021D48">Representante Legal</th>
    <th colspan="2">Empresa</th>
  </tr>
  <tr>
    <th bgcolor="#006699" scope="row"><?php echo $usuario ?></th>
    <th bgcolor="#006699"><?php echo $apellido." ".$nombre ?></th>
    <th colspan="2" bgcolor="#006699"><?php echo $e_empresa ?></th>
  </tr>
  <tr>
    <th colspan="4" bgcolor="#FF9900" scope="row">Solicitud</th>
    </tr>
  <tr>
    <th bgcolor="#021D48" scope="row">Servicios
      <label for="observacion"></label></th>
    <th bgcolor="#021D48" scope="row">Servicios Seleccionados</th>
    <th width="400" bgcolor="#021D48" scope="row">Observacion</th>
    <th width="158" rowspan="2" bgcolor="#006699" scope="row"><input name="Botón" type="button" class="boton" onclick="var observacion=document.getElementById('observacion').value; var tam=document.getElementById('lista').length;s=''; if(tam>0){ for(x=0;x<=(tam-1);x++){s=s+'&s'+x+'='+document.getElementById('lista').options[x].text}; location.href='php/enviar_solicitud.php<?php echo $url ?>&obs='+observacion+s+'&tam='+tam }else{alert('Debe agregar servicios');}" value="Solicitar" />
    
    <input name="Botón" type="button" class="boton" onclick="var observacion=document.getElementById('observacion').value; var tam=document.getElementById('lista').length;s=''; if(tam>0){ for(x=0;x<=(tam-1);x++){s=s+'&s'+x+'='+document.getElementById('lista').options[x].text}; location.href='php/enviar_cotizacion.php<?php echo $url ?>&obs='+observacion+s+'&tam='+tam }else{alert('Debe agregar servicios');}" value="Cotizar" />
    <input name="Botón3" type="button" class="boton" onclick="location.href='usuario2.php<?php echo $url ?>&mostrar=0'" value="Ver Solicitudes" /></th>
    </tr>
  <tr>
    <th height="124" bgcolor="#006699" scope="row"><label for="select"></label>
      <select name="servicios" class="combo" id="servicios">
        <?php
			$q2="select * from servicio";
			$result2=mysql_query($q2,$conectar);
			$cantidad2=mysql_num_rows($result2);
			
			for($i=0;$i<=($cantidad2-1);$i++){
				
			$cod_servicio=mysql_result($result2,$i,0);
			$servicio=mysql_result($result2,$i,1);
			$id='c'+($i+1);
			echo "<option id='$id' value='$cod_servicio'>$servicio</option>";
			}
		?>
        </select> <br />
             <input name="Botón2" type="button" class="boton"  value="Agregar" onclick="agregar()" /></th>
    <th bgcolor="#006699" scope="row"><select name="lista" size="1" multiple="MULTIPLE" class="lista" id="lista">
      </select></th>
    <th width="400" bgcolor="#006699" scope="row"><textarea name="observacion" cols="45" rows="5" class="area" id="observacion"></textarea></th>
  </tr>
  </table>
   </form>
   </div>
   
   
  <div id="p2">
    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="175" height="175">
      <param name="movie" value="boton_salir.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="transparent" />
      <param name="swfversion" value="6.0.65.0" />
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <param name="SCALE" value="exactfit" />
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="boton_salir.swf" width="175" height="175">
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
</div>
<div id="pie">
	D&amp;T Consultores C.A<br />
  Emilio Ochoa C.I V-21.029.522
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID2");
swfobject.registerObject("FlashID");
</script>
</body>
</html>