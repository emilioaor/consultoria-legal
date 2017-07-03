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
	overflow: auto;
}
#p2 {
	height: 150px;
	width: 1200px;
}
.i1:hover {
	height: 60px;
	width: 140px;
}
.i2:hover {
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
table {
	margin-right: auto;
	margin-left: auto;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
}
.imagen:hover {
	width: 130px;
	height: 90px;
}
#principal2 {
	background-color: #FFF;
	height: 950px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
a {
	color: #FFF;
}
#p3 {
	height: 300px;
	width: 1200px;
}
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<?php

	$usuario=$_GET['usu'];
	$e_empresa=$_GET['emp'];
	$nombre=$_GET['nom'];
	$apellido=$_GET['ape'];
	$EmpresaID=$_GET['eid'];
	$url="?usu=$usuario&ape=$apellido&nom=$nombre&emp=$e_empresa&eid=$EmpresaID";
	
	$num_solicitud=$_GET['num'];
	
	include_once('php/conectar.php');
	
	$q="select * from documento where usuario='$usuario'";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
	
?>

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
    <br />
    <table width="550" border="0">
  <tr>
    <th colspan="2" bgcolor="#FF9900" scope="col">Lista de Documentos</th>
  </tr>
  <tr>
    <th width="270" bgcolor="#021D48" scope="col">Documento</th>
    <th width="270" bgcolor="#021D48" scope="col">Descarga</th>
    </tr>
    <?php
		
		for($x=0;$x<=($cantidad-1);$x++){
			
			$nombre_documento=mysql_result($result,$x,1);
			
			echo '<tr>
   		 <th bgcolor="#006699" scope="col"><img src="imagenes/word.png" width="70" height="100" /><br />'.
      		$nombre_documento.'</th>
   		 <th bgcolor="#006699" scope="col"><a href="cargas/'.$nombre_documento.'" ><img src="imagenes/descargar.png" width="120" height="80" class="imagen" /><a></th>
    		</tr>';
			
		}
	
	?>
    
  
    </table>
    
</div>

  <div id="p2">
  <br />
  <table width="1200" border="0">
  <tr>
    <th width="397" height="95" scope="col">&nbsp;</th>
    <th width="190" scope="col"><a href="visualizar_solicitud.php<?php echo $url."&num=".$num_solicitud ?>"><img src="imagenes/boton_atras.png" width="130" height="50" class="i1" /></a></th>
    <th width="190" scope="col"><a href="index.html"><img src="imagenes/boton_cerrar_sesion.png" width="130" height="50" class="i2" /></a></th>
    <th width="405" scope="col">&nbsp;</th>
  </tr>
</table>
  </div>
</div>
<div id="pie">
  D&T Consultores C.A<br />
  Emilio Ochoa C.I V-21.029.522</div>

</body>
</html>