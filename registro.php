<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultores</title>
<link href="css/pagina_basica.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="JavaScript/Eventos_basicos.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<style type="text/css">
#p1 {
	width: 950px;
	height: 500px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 10px;
	float: left;
}
#p2 {
	height: 300px;
	width: 1200px;
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
	height: 25px;
	width: 70px;
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

</style>
<link href="css/estilos_basicos.css" rel="stylesheet" type="text/css" />
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
<style type="text/css">
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
</head>

<body>
<div id="banner">D&amp;T Consultores C.A</div>

<div id="principal2">

<div id="p2">
  <img src="imagenes/banner.gif" width="100%" height="250px" />
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
    
    <form id="form2" action="php/ingreso_usuario.php" method="post">
      <table width="147" height="165" border="0" class="tabla_ingreso1">
        <tr>
          <th width="141" height="42" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th height="17" scope="col">Usuario</th>
        </tr>
        <tr>
          <th height="21" scope="col"><label for="usuario"></label>
            <input type="text" name="usuario" id="usuario" class="caja1"/></th>
        </tr>
        <tr>
          <th height="17" scope="col">Contraseña</th>
        </tr>
        <tr>
          <th height="21" scope="col"><input type="password" name="contra" id="contra" class="caja1" /></th>
        </tr>
        <tr>
          <th height="28" scope="col"><input name="button2" type="submit" class="boton_ingresar1" id="button2" value="Ingresar" /></th>
        </tr>
      </table>
    </form>
    
  </div>
  <div id="p1">
    <form action="registro2.php" method="post" name="form1" id="form1" onsubmit="MM_validateForm('USUARIO','','R','CONTRA','','R','rcontra','','R');return document.MM_returnValue" >
      <br />
      <br />
      <br />
      <br />
      <table width="453" border="0">
        <tr>
          <th height="36" colspan="2" bgcolor="#FF9900" scope="col">Cuenta de Usuario</th>
        </tr>
        <tr>
          <th width="243" height="34" bgcolor="#021D48" scope="row">Usuario</th>
          <td width="200"><label for="USUARIO"></label>
          <input name="USUARIO" type="text" class="caja" id="USUARIO" tabindex="1" maxlength="20" /></td>
        </tr>
        <tr>
          <th height="34" bgcolor="#021D48" scope="row">Contraseña</th>
          <td><input name="CONTRA" type="password" class="caja" id="CONTRA" tabindex="2" maxlength="20" /></td>
        </tr>
        <tr>
          <th height="34" bgcolor="#021D48" scope="row">Repetir Contraseña          </th>
          <th height="34" scope="row"><input name="rcontra" type="password" class="caja" id="rcontra" tabindex="3" maxlength="20" /></th>
        </tr>
        <tr>
          <th height="83" colspan="2" scope="row"><input name="button" type="submit" class="boton" id="button" value="Registrar" /></th>
        </tr>
      </table>
    </form>
  </div>
</div>
<div id="pie">
	D&amp;T Consultores C.A<br />
  Emilio Ochoa C.I V-21.029.522
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID2");
</script>
</body>
</html>