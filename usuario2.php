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
#p2  {
	height: 400px;
	width: 1200px;
	overflow: auto;
	margin-top: 10px;
}
#p3 {
	height: 100px;
	width: 1200px;
}
#principal2 {
	background-color: #FFF;
	height: 880px;
	width: 1200px;
	margin-right: auto;
	margin-left: auto;
}
table {
	color: #FFF;
	width: 1180px;
	margin-right: auto;
	margin-left: auto;
}
.i1:hover {
	height: 60px;
	width: 140px;
}
.i2:hover {
	height: 60px;
	width: 140px;
}
.btlista {
	width: 80px;
	height: 30px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFF;
	background-color: #021D48;
	border: 3px solid #F90;
}
a {
	color: #FFF;
}
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>


<?php

	include_once('php/conectar.php');

	$usuario=$_GET['usu'];
	$e_empresa=$_GET['emp'];
	$nombre=$_GET['nom'];
	$apellido=$_GET['ape'];
	$EmpresaID=$_GET['eid'];
	$url="?usu=$usuario&emp=$e_empresa&nom=$nombre&ape=$apellido&eid=$EmpresaID";
	
	$q="select * from solicitud where EmpresaID=$EmpresaID order by num_solicitud desc";
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
  
  <div id="p2">
    <form>
    <table width="400" border="0">
  <tr>
    <th colspan="5" bgcolor="#021D48" scope="col" >Mostrar 
      
	
	  
      <select name="mostrar" class="combo" id="mostrar" onchange="var pos=document.getElementById('mostrar').selectedIndex; var mostrar=document.getElementById('mostrar').options[pos].value; location.href='usuario2.php<?php echo $url ?>&mostrar='+mostrar">
        <option>---------------------------------------------</option>
        <option value="0">Lista de Solicitudes</option>
        <option value="1">Lista de Cotizaciones</option>
      </select></th>
    </tr>   
 <?php  
 
 $mostrar=$_GET['mostrar'];
 
 if($mostrar==0){
	 
	 //muesta las solicitudes
	 
	 echo'  <tr>
    <th colspan="4" bgcolor="#FF9900" scope="col">Lista de Solicitudes</th>
  </tr>';
  //Verificar si el usuario ha realizado solicitudes
  if($cantidad>0){
  //Con Solicitud
  	
	echo '<tr>
    	<th width="212" bgcolor="#021D48">Num Solicitud</th>
    	<th width="213" bgcolor="#021D48">Fecha</th>
    	<th width="274" bgcolor="#021D48">Estatus</th>
    	<th width="269" bgcolor="#021D48">&nbsp;</th>
    </tr>';
  
  
  	for($i=0;$i<=($cantidad-1);$i++){
	$num_solicitud=mysql_result($result,$i,0);
	$fecha=mysql_result($result,$i,1);
	$estatus=mysql_result($result,$i,4);
	
		echo'<tr>
		<th bgcolor="#006699">'.$num_solicitud.'</th>
    	<th bgcolor="#006699">'.$fecha.'</th>
    	<th bgcolor="#006699">'.$estatus.'</th>
    	<th bgcolor="#006699"><input id="'.$i.'" type="button" class="btlista" id="button" value="Abrir" onclick="'."location.href='visualizar_solicitud.php$url&num=$num_solicitud'".'" /></th>
    	</tr>';
	}
  }
  else
  {
 //Sin Solicitudes
  echo'	<tr>
    <th bgcolor="#021D48" scope="row" colspan="4">No ha realizado solicitudes</th>
    </tr>';
  }
  
 }
else
{
	//sino Mostrar las cotizaciones
	
	echo'  <tr>
    <th colspan="5" bgcolor="#FF9900" scope="col">Lista de Cotizaciones</th>
  </tr>';
	
	$q3="select * from cotizacion where EmpresaID=$EmpresaID order by num_cotizacion desc";
	$result3=mysql_query($q3,$conectar);
	$cantidad3=mysql_num_rows($result3);
	
	if($cantidad3>0){
		// hay cotizaciones	
		
		echo '<tr>
    	<th width="212" bgcolor="#021D48">Num Cotizacion</th>
    	<th width="213" bgcolor="#021D48">Fecha</th>
    	<th width="274" bgcolor="#021D48">Estatus</th>
    	<th width="269" bgcolor="#021D48" colspan="2" >&nbsp;</th>
    	</tr>';
		
		for($i=0;$i<=($cantidad3-1);$i++){
			
			$num_cotizacion=mysql_result($result3,$i,0);
			$fecha_cotizacion=mysql_result($result3,$i,2);
			$estatus_cotizacion=mysql_result($result3,$i,4);
	
		echo'<tr>
		<th bgcolor="#006699">'.$num_cotizacion.'</th>
    	<th bgcolor="#006699">'.$fecha_cotizacion.'</th>
    	<th bgcolor="#006699">'.$estatus_cotizacion.'</th>
    	<th bgcolor="#006699"><input id="'.$i.'" type="button" class="btlista" id="button" value="Abrir" onclick="'."location.href='visualizar_cotizacion.php$url&num=$num_cotizacion'".'" /></th>
		
		<th bgcolor="#006699" ><input id="'.$i.'" type="button" class="btlista" id="button" value="Eliminar" onclick="'."location.href='php/eliminar_cotizacion.php$url&num=$num_cotizacion'".'" /></th>
    	</tr>';
		
		}
	}
	else
	{
		//sin cotizaciones	
		 echo'	<tr>
    	<th bgcolor="#021D48" scope="row" colspan="4">No ha realizado cotizaciones</th>
    	</tr>';
	}
		
}
?>
 </table>

</form>
</div>




  <div id="p3"><table width="850" border="0">
  <tr>
    <th width="300" height="95" scope="col">&nbsp;</th>
    <th width="190" scope="col"><a href="usuario.php<?php echo $url ?>"><img src="imagenes/boton_atras.png" width="130" height="50" class="i1" /></a></th>
    <th width="192" scope="col"><a href="index.html"><img src="imagenes/boton_cerrar_sesion.png" width="130" height="50" class="i2" /></a></th>
    <th width="300" scope="col">&nbsp;</th>
  </tr>
</table>
</div>


</div>
<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12 </div>

</body>
</html>