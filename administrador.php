<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<link href="css/pagina_basica.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#p1 {
	height: 200px;
	width: 1200px;
}
#p3 {
	width: 175px;
	height: 175px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 10px;
}
#p2 {
	height: 350px;
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
.boton_animado:hover {
	height: 160px;
	width: 160px;
}
a {
	text-decoration: none;
}
.boton_solicitud {
	height: 30px;
	width: 80px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	border: 3px solid #F90;
	background-color: #021D48;
	color: #FFF;
}
table {
	width: 1180px;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	margin-right: auto;
	margin-left: auto;
}
.tabla_administrador {
	background-image: url(imagenes/fondo_administrador.png);
	background-repeat: no-repeat;
	background-size:100% 100%;
}
</style>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">
  <div id="p1">
  <br />
  	<table width="100" border="0" class="tabla_administrador">
  <tr>
    <th width="232" height="163" scope="col"><a href="administrador_empresa.php"><img src="imagenes/empresa.png" width="150" height="150" class="boton_animado" /></a></th>
    <th width="231" scope="col"><a href="administrador_usuario.php"><img src="imagenes/usuarios.png" width="150" height="150" class="boton_animado" /></a></th>
    <th width="231" scope="col"><a href="administrador_representante.php"><img src="imagenes/representante.png" width="150" height="150" class="boton_animado" /></a></th>
    <th width="232" scope="col"><a href="administrador_servicio.php"><img src="imagenes/servicio.png" width="150" height="150" class="boton_animado" /></a></th>
    <th width="232" scope="col"><a href="administrador_ramo.php"><img src="imagenes/ramos.png" width="150" height="150" class="boton_animado" /></a></th>
  </tr>
</table>

  </div>
  <div id="p2"><table width="1180" border="0">
  <tr>
    <th width="120" bgcolor="#021D48" scope="row">Num Solicitud</th>
    <th width="200" bgcolor="#021D48">Fecha</th>
    <th width="544" bgcolor="#021D48">Empresa</th>
    <th width="100" bgcolor="#021D48"><input name="button5" type="button" class="boton_solicitud" id="button5" value="Actualizar" onclick="location.href=document.URL" /></th>
    </tr>
    <?php
	include_once('php/conectar.php');
	
	$q="select * from solicitud order by num_solicitud desc";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
	
	for($i=0;$i<=($cantidad-1);$i++){
		//vaciar las solicitudes
		$num_solicitud=mysql_result($result,$i,0);
		$fecha=mysql_result($result,$i,1);
		$EmpresaID=mysql_result($result,$i,2);
		$estatus=mysql_result($result,$i,4);
		
		$q2="select * from empresa where EmpresaID=$EmpresaID";
		$result2=mysql_query($q2,$conectar);
		$n_empresa=mysql_result($result2,0,1);
		
		if($estatus=='Sin Leer'){
			$color="#FF0000";
		}
		else
		{
			$color="#006699";
		}
		
		
		echo '<tr>
    <th width="120" bgcolor="'.$color.'" scope="row">'.$num_solicitud.'</th>
    <th width="200" bgcolor="'.$color.'">'.$fecha.'</th>
    <th width="544" bgcolor="'.$color.'">'.$n_empresa.'</th>
    <th width="100" bgcolor="'.$color.'"><input name="button5" type="button" class="boton_solicitud" id="button5" value="Abrir" onclick="'."location.href='administrador_solicitud.php?num=$num_solicitud'".'" /></th>
    </tr>';
	}
    ?>
  
</table>
</div>
  <div id="p3">
    <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="175" height="175">
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
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
  </div>
</div>
<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12</div>
<script type="text/javascript">
swfobject.registerObject("FlashID2");
</script>
</body>
</html>