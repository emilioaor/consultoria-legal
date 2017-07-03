<?php

	include_once('conectar.php');
	
	$proceso=$_GET['proc'];
	$cod_servicio=$_GET['cod'];
	
	//verificar si se esta actualizando o eliminando el registro
	
	if($proceso==0){
		//eliminar servicio y detalles de solicitud de este servicio
		
		$q="delete from detalles_solicitud where cod_servicio=$cod_servicio";
		$result=mysql_query($q,$conectar);
		
		$q0="delete from servicio where cod_servicio=$cod_servicio";
		$result0=mysql_query($q0,$conectar);
		
		echo "<script type='text/javascript'>alert('Servicio Eliminado')</script>";
	}
	
	
	if($proceso==1){
		//actualizar datos del servicio
		
		$servicio=$_GET['des'];
		$precio=$_GET['pre'];
		
		$q1="update servicio set descripcion='$servicio', precio=$precio where cod_servicio=$cod_servicio";
		$result1=mysql_query($q1,$conectar);
		
		echo "<script type='text/javascript'>alert('Servicio Actualizado')</script>";
		
	}
	
	
	echo "<script type='text/javascript'>location.href='../administrador_servicio.php'</script>";

?>