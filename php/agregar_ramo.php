<?php
	include_once('conectar.php');
	
	$descripcion=$_POST['descripcion'];
	
	$q="insert into ramo values(NULL,'$descripcion')";
	$result=mysql_query($q,$conectar);
	
	echo "<script type='text/javascript'>alert('Ramo Agregado'); location.href='../administrador_ramo.php'</script>";
	
?>