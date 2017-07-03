<?php
	
	include_once('conectar.php');
	
	$servicio=$_POST['descripcion'];
	$precio=$_POST['precio'];
	
	$q="insert into servicio values(NULL,'$servicio',$precio)";
	$result=mysql_query($q,$conectar);
	
	echo "<script type='text/javascript'>alert('Servicio Agregado'); location.href='../administrador_servicio.php'</script>";

?>