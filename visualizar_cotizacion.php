<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<style type="text/css">
#p1 {
	height: 400px;
	width: 1200px;
	overflow: auto;
	margin-top: 10px;
}
#p3 {
	height: 300px;
	width: 1200px;
}
#p2 {
	height: 50px;
	width: 1200px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFF;
	float: left;
	background-color: #069;
}
#principal2 {
	height: 800px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
	background-color: #FFF;
}
#enviar {
	width: 270px;
	height: 40px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFF;
	background-color: #021D48;
	border: 3px solid #F90;
}
#atras {
	height: 40px;
	width: 80px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFF;
	background-color: #021D48;
	border: 3px solid #F90;
}
table {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	margin-right: auto;
	margin-left: auto;
}
</style>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">


<div id="p3">
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
<div id="p1">
    <table width="1000" border="0">
      <tr>
        <th colspan="2" bgcolor="#FF9900" scope="col">Cotizacion de Servicios</th>
      </tr>
      <tr>
        <th width="764" bgcolor="#021D48" scope="col">Descripcion</th>
        <th width="212" bgcolor="#021D48" scope="col">Precio</th>
      </tr>
      <?php
		include_once('php/conectar.php');

		$usuario=$_GET['usu'];
		$e_empresa=$_GET['emp'];
		$nombre=$_GET['nom'];
		$apellido=$_GET['ape'];
		$EmpresaID=$_GET['eid'];
		$url="?usu=$usuario&emp=$e_empresa&nom=$nombre&ape=$apellido&eid=$EmpresaID";
		
		$num_cotizacion=$_GET['num'];
		
		$q="select * from detalle_cotizacion where num_cotizacion=$num_cotizacion";
		$result=mysql_query($q,$conectar);
		$cantidad=mysql_num_rows($result);
		
		for($i=0;$i<=($cantidad-1);$i++){
			
			$cod_servicio=mysql_result($result,$i,2);
			
			$q2="select * from servicio where cod_servicio=$cod_servicio";
			$result2=mysql_query($q2,$conectar);
			$servicio=mysql_result($result2,0,1);
			$precio=mysql_result($result2,0,2);
			
		echo' <tr>
        <th width="764" bgcolor="#006699" scope="col">'.$servicio.'</th>
        <th width="212" bgcolor="#006699" scope="col">'.$precio.'</th>
      </tr>';
	  
		}
		
		$q3="select * from cotizacion where num_cotizacion=$num_cotizacion and EmpresaID=$EmpresaID";
		$result3=mysql_query($q3,$conectar);
		$total=mysql_result($result3,0,5);
		$estatus=mysql_result($result3,0,4);
		
	?>
      <tr>
        <th align="right" bgcolor="#021D48" scope="col">Total</th>
        <th bgcolor="#021D48" scope="col"><?php echo $total ?></th>
      </tr>
    </table>
  </div>
  <div id="p2">
    <table width="1199" border="0">
      <tr>
        <th width="1193" scope="col">
          <?php
		if($estatus=='En Proceso'){
    	echo '<input type="button" name="enviar" id="enviar" value="Enviar solicitud en base a esta cotizacion" onclick="location.href=\'php/cotizacion_solicitud.php'.$url.'&num='.$num_cotizacion.'\'" />';
		}
		else
		{
			echo'Esta cotizacion ya fue procesada'	;
		}
		?>
      <input type="button" name="atras" id="atras" value="Atras" onclick="location.href='usuario2.php<?php echo $url ?>&mostrar=1'" />
        </th>
      </tr>
    </table>

</div>
</div>
<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12</div>

</body>
</html>