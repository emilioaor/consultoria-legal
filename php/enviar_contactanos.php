<?php
	include_once('conectar.php');

	$correo=$_GET['correo'];
	$mensaje=$_GET['mensaje'];
	
	$q="insert into contactanos values(NULL,'$correo',NOW(),'$mensaje')";
	$result=mysql_query($q,$conectar);
	
?>