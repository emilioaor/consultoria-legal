<?php

	$usuario=$_POST['usuario'];
	$num_solicitud=$_POST['numero'];
	$subibo_por=$_POST['usu'];
	
	include_once('conectar.php');
	
	$path="cargas/";
	
	$path=$path.basename($_FILES['archivo']['name']);
	
	$documento=basename($_FILES['archivo']['name']);
	
	if(move_uploaded_file($_FILES['archivo']['tmp_name'],"../".$path)){
		
		$q="insert into documento values(NULL,'$documento','$usuario')";
		$result=mysql_query($q,$conectar);
		
		echo "<script type='text/javascript' >alert('Documento cargado satisfactoriamente');</script>";	
	}
	else
	{
		echo "<script type='text/javascript' >alert('Error al cargar documento');</script>";	
	}
	
	if($subibo_por=='administrador'){
		//administrador
		echo "<script type='text/javascript' >location.href='../administrador_solicitud.php?num=$num_solicitud'</script>";	
	}
	else
	{
		//consultor
		echo "<script type='text/javascript' >location.href='../consultor_solicitud.php?num=$num_solicitud'</script>";		
	}
	
	

?>