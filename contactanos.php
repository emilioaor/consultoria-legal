<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<link href="css/pagina_basica.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<script type="text/javascript" >

function descargar_mensajes(){

	clearTimeout(t);
  // Obtener la instancia del objeto XMLHttpRequest
  if(window.XMLHttpRequest) {
     peticion_http = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {
    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
  }
 
  // Preparar la funcion de respuesta
  peticion_http.onreadystatechange = muestraContenido;
 
  // Realizar peticion HTTP
  peticion_http.open('GET', 'php/consultar_contactanos.php', true);
  peticion_http.send(null);
 
  function muestraContenido() {
    if(peticion_http.readyState == 4) {
      if(peticion_http.status == 200) {
        //alert(peticion_http.responseText);
		document.getElementById("p1").innerHTML=peticion_http.responseText;
		
      }
    }
  }
  timer();
}
  
  
  
 function timer(){
	 
	t=setTimeout("descargar_mensajes()",1000); 
 }


window.onload=timer();


function enviar_mensaje(msj,correo){	
  // Obtener la instancia del objeto XMLHttpRequest
  if(window.XMLHttpRequest) {
     peticion_http2 = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {
    peticion_http2 = new ActiveXObject("Microsoft.XMLHTTP");
  }
 
  // Preparar la funcion de respuesta
  peticion_http2.onreadystatechange = muestraContenido;
 
  // Realizar peticion HTTP
  peticion_http.open('GET', 'php/enviar_contactanos.php?correo='+correo+'&mensaje='+msj, true);
  peticion_http.send(null);
 
  function muestraContenido() {
   
  }

}



</script>


<?php
	include_once('php/conectar.php');
	
	$q="select * from contactanos order by codigo desc";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
	
?>

<style type="text/css">
#p1 {
	width: 940px;
	height: 400px;
	overflow: auto;
	margin-top: 10px;
	border: 5px solid #021D48;
	background-color: #CCC;
	float: left;
}
#chat {
	width: 920px;
	color: #000;
}
#p2 {
	height: 300px;
	width: 950px;
	float: left;
	margin-top: 10px;
	text-align: center;
}
#p3 {
	height: 300px;
	width: 1200px;
	float: left;
	text-align: center;
}
#principal2 {
	background-color: #FFF;
	height: 1050px;
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
.tabla_contactanos {
	background-image: url(imagenes/carta.png);
	background-repeat: no-repeat;
	background-size:100% 100%;
	margin-right: auto;
	margin-left: auto;
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

</style>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.boton_ingresar1 {	height: 25px;
	width: 70px;
	background-color: #021D48;
	border: 3px solid #FF9900;
	color: #FFF;
}
.caja {	width: 100px;
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
</head>

<body>
<div id="banner">D&amp;T Consultores C.A</div>
<div id="principal2">


<div id="p3">
  <object id="FlashID3" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1200" height="300">
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


<div id="menu" > 

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
            <input type="text" name="usuario" id="usuario" class="caja"/></th>
        </tr>
        <tr>
          <th height="17" scope="col">Contraseña</th>
        </tr>
        <tr>
          <th height="21" scope="col"><input type="password" name="contra" id="contra" class="caja" /></th>
        </tr>
        <tr>
          <th height="28" scope="col"><input name="button" type="submit" class="boton_ingresar1" id="button" value="Ingresar" /></th>
        </tr>
      </table>
    </form>
    
  </div>
  <div id="p1">
    <br />
  	 <table border="0" id="chat">
    <?php
if($cantidad>0){
	for($i=0;$i<=($cantidad-1);$i++){
	$correo=mysql_result($result,$i,1);
	$fecha=mysql_result($result,$i,2);
	$mensaje=mysql_result($result,$i,3);
  echo '<tr>
    <th width="160" height="62" scope="col" align="left" ><br>'.$correo.' dijo:<br>'.$mensaje.'</th>
    </tr>';
	}
  }
	?>
     </table>
  
  
</div>
  <div id="p2">
  <br />
  <table width="350" border="0" class="tabla_contactanos">
  <tr>
    <th height="138" colspan="2" scope="col"></th>
  </tr>
  <tr>
    <th width="159" height="24" scope="col">Correo</th>
    <th width="181" height="24" align="left" scope="col"><input name="correo" type="text" id="correo" value="@" /></th>
  </tr>
  <tr>
    <th height="24" scope="col">Mensaje</th>
    <th align="left" scope="col"><input type="text" name="mensaje" id="mensaje" /></th>
  </tr>
  <tr>
    <th height="48" colspan="2" scope="col"><input name="button2" type="button" class="boton_ingresar" id="button2" value="Enviar" onclick="var msj=document.getElementById('mensaje').value; var correo=document.getElementById('correo').value; enviar_mensaje(msj,correo); document.getElementById('correo').value='@'; document.getElementById('mensaje').value=''; " /></th>
  </tr>
  </table>
 </div>
</div>
<div id="pie">
	D&amp;T Consultores C.A<br />
  Emilio Ochoa C.I V-21.029.522
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID3");
</script>
</body>
</html>