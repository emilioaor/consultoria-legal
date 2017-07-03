<?php


	include_once('conectar.php');

	$usuario=$_GET['usu'];
	$e_empresa=$_GET['emp'];
	$nombre=$_GET['nom'];
	$apellido=$_GET['ape'];
	$EmpresaID=$_GET['eid'];
	$url="?usu=$usuario&emp=$e_empresa&nom=$nombre&ape=$apellido&eid=$EmpresaID";
	
	$num_cotizacion=$_GET['num'];
	
	
	$q1="delete from detalle_cotizacion where num_cotizacion=$num_cotizacion";
	$result1=mysql_query($q1,$conectar);
	
	
	$q="delete from cotizacion where num_cotizacion=$num_cotizacion";
	$result=mysql_query($q,$conectar);
	
	echo "<script type='text/javascript' >alert('Cotizacion Eliminada'); location.href='../usuario2.php$url&mostrar=1'</script>";

?>