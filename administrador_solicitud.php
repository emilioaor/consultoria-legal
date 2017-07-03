<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<script type="text/javascript">

function descargaArchivo() {
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
  peticion_http.open('GET', 'php/consultar_mensajes.php?num=<?php echo $_GET['num']; ?>', true);
  peticion_http.send(null);
 
  function muestraContenido() {
    if(peticion_http.readyState == 4) {
      if(peticion_http.status == 200) {
        //alert(peticion_http.responseText);
		document.getElementById("chat").innerHTML=peticion_http.responseText;
		
      }
    }
  }
  timer();
}


  function timer(){
	 t=setTimeout("descargaArchivo()",1000);
 }
 
window.onload = timer();


function enviar_mensaje(msj){	
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
  peticion_http.open('GET', 'php/enviar_contacto_solicitud.php?num=<?php echo $_GET['num']; ?>&usu=administrador&msj='+msj, true);
  peticion_http.send(null);
 
  function muestraContenido() {
   
  }

}


</script>


<style type="text/css">
#p1 {
	height: 400px;
	width: 1200px;
	overflow: auto;
}
#p2 {
	height: 400px;
	width: 1200px;
	margin-top: 10px;
}
#tabla_chat {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	width: 580px;
}
table {
	width: 1000px;
	font-family: Tahoma, Geneva, sans-serif;
	color: #FFF;
	margin-right: auto;
	margin-left: auto;
}
#chat {
	height: 300px;
	width: 600px;
	overflow: auto;
	
}
.chat {
	background-repeat: no-repeat;
	background-image: url(imagenes/pantalla_chat.png);
}
.area {
	height: 210px;
	width: 200px;
	max-height:210px;
	min-height:210px;
	max-width:200px;
	min-width:200px;
}
.boton {
	height: 40px;
	width: 60px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	background-color: #006699;
	color: #FFF;
	margin-right: 5px;
	border: 5px solid #F90;
}
.boton2 {
	height: 30px;
	width: 60px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	background-color: #333;
	color: #FFF;
	margin-right: 5px;
	border: 5px solid #999;
}
.boton_lista {
	height: 40px;
	width: 170px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	background-color: #069;
	color: #FFF;
	margin-right: 5px;
	border: 5px solid #F90;
}
#principal2 {
	background-color: #FFF;
	height: 1080px;
	width: 1200px;
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

a {
	color: #FFF;
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
        <th width="764" bgcolor="#FF9900" scope="row">Descripcion</th>
        <th width="212" bgcolor="#FF9900">Precio</th>
      </tr>
      <?php


	include_once('php/conectar.php');
	
	/*$usuario=$_GET['usu'];
	$e_empresa=$_GET['emp'];
	$nombre=$_GET['nom'];
	$apellido=$_GET['ape'];
	$EmpresaID=$_GET['eid'];
	$url="?usu=$usuario&ape=$apellido&nom=$nombre&emp=$e_empresa&eid=$EmpresaID";*/
	
	$num_solicitud=$_GET['num'];
	
	$q4="update solicitud set estatus='Leida' where num_solicitud=$num_solicitud";
	$result4=mysql_query($q4,$conectar);
	
	$q="select * from detalles_solicitud where num_solicitud=$num_solicitud";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
	if($cantidad>0){
	$total=0;
	for($i=0;$i<=($cantidad-1);$i++){
		$cod_servicio=mysql_result($result,$i,2);
		$q2="select * from servicio where cod_servicio=$cod_servicio";
		$result2=mysql_query($q2,$conectar);
		
		$descripcion=mysql_result($result2,0,1);
		$precio=mysql_result($result2,0,2);
		$total=$total+$precio;
		
		echo "<tr>
			<th bgcolor='#006699'>$descripcion</th><th bgcolor='#006699'>$precio BsF</th>
		</tr>";
	}
	}
	
	?>
     
      <tr bgcolor="#FF9900">
        <th align="right" bgcolor="#021D48" scope="row">Total</th>
        <th bgcolor="#021D48"><?php echo $total.' BsF'; ?></th>
      </tr>
    </table>
  </div>
  
  
  <div id="p3"><table width="850" border="0">
  <tr>
    <th width="300" height="95" scope="col">&nbsp;</th>
    <th width="190" scope="col"><a href="administrador.php"><img src="imagenes/boton_atras.png" width="130" height="50" class="i1" /></a></th>
    <th width="192" scope="col"><a href="index.html"><img src="imagenes/boton_cerrar_sesion.png" width="130" height="50" class="i2" /></a></th>
    <th width="300" scope="col">&nbsp;</th>
  </tr>
</table>
</div>
  
  
  <div id="p2">
  <form>
  <table width="999" height="400" border="0" class="chat">
  <tr>
    <th height="21" colspan="4" scope="col">&nbsp;
    
    </th>
  </tr>
  <tr>
    <th width="36" rowspan="4" scope="col">&nbsp;</th>
    <th width="604" height="325" rowspan="3" scope="col">
      <div id="chat" >
        <table width="400" border="0" id="tabla_chat">
          <?php
	  
	  $q3="select * from contactanos_solicitud where num_solicitud=$num_solicitud order by codigo";
	  $result3=mysql_query($q3,$conectar);
	  $cantidad2=mysql_num_rows($result3);
	  
	  if($cantidad2>0){
		  //si existen mensajes en el chat
		  $ccolor=0;
	  for($i=0;$i<=($cantidad2-1);$i++){
		  $usuario=mysql_result($result3,$i,3);
		  $mensaje=mysql_result($result3,$i,2);
		  if($ccolor==0){
			$color="#006699"; 
			$ccolor++;
		  }
		  else
		  {
			  $color="";
			  $ccolor=0;
		  }
		  
        echo '<tr>
          <th scope="col" align="left" bgcolor="'.$color.'" >'.$usuario.' dice: '.$mensaje.'</th>
        </tr>';
	  }
	  
	  }
	  else
	  {
		//si no existen mensajes
		
		echo '<th bgcolor="#0000FF" >Sin Mensajes</th>';  
	  }
	  
		?>
          </table>
        </div>
      </th>
    <th width="43" rowspan="4" scope="col">&nbsp;</th>
    <th width="299" height="39" scope="col"><label for="mensaje"></label></th>
  </tr>
  <tr>
    <th height="235" valign="bottom" scope="col"><textarea name="mensaje" cols="45" rows="5" class="area" id="mensaje"></textarea></th>
  </tr>
  <tr>
    <th scope="col"><input name="button" type="button" class="boton" id="button" value="Enviar" onclick="var msj=document.getElementById('mensaje').value;if(msj!=''){ enviar_mensaje(msj);document.getElementById('mensaje').value='';}" /></th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
    <th width="299" scope="col">&nbsp;</th>
  </tr>
  </table>

  </form>
  
  
  <form action="php/subir_archivo.php" method="post" enctype="multipart/form-data" id="form1">
  <?php 
  	$q5="select * from solicitud where num_solicitud=$num_solicitud";
	$result5=mysql_query($q5,$conectar);
	$EmpresaID=mysql_result($result5,0,2);
	
	$q6="select * from usuario where EmpresaID=$EmpresaID";
	$result6=mysql_query($q6,$conectar);
	$usu=mysql_result($result6,0,0);
  ?>
  <br />
  <label for="num"></label>
  <table width="629" border="0">
    <tr>
    <th width="350" rowspan="2" scope="col"><input name="usuario" type="text" id="usuario"  value="<?php echo $usu ?>" readonly="readonly" style="visibility:hidden" /></th>
    <th width="286" bgcolor="#FF9900" scope="col">Subir Documento</th>
    <th width="350" rowspan="2" scope="col"><label for="numero"></label>
      <input name="numero" type="text" id="numero" value="<?php echo $num_solicitud ?>" readonly="readonly" style="visibility:hidden" /></th>
    </tr>
  <tr>
    <th height="49" bgcolor="#021D48" scope="col"><input type="file" name="archivo" id="archivo" /></th>
    </tr>
  <tr>
    <th scope="col"><input name="usu" type="text" id="usu"  value="administrador" readonly="readonly" style="visibility:hidden" /></th>
    <th height="64" scope="col"><input name="button3" type="submit" class="boton" id="button3" value="Subir" />
      <input name="button4" type="button" class="boton_lista" id="button4" value="Lista de Documentos" onclick="location.href='administrador_documentos.php?num=<?php echo $num_solicitud; ?>'" /></th>
    <th scope="col">&nbsp;</th>
  </tr>
  </table>
</form>
  
</div>
  
</div>
<div id="pie">D&amp;T Consultores C.A<br />
Emilio Ochoa C.I V-21.029.522<br />
#f39c12</div>
</body>
</html>

