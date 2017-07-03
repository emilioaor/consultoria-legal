<?php

	include_once('conectar.php');
	
	$proceso=$_GET['proc'];
	$cod_ramo=$_GET['cod'];
	$descipcion=$_GET['des'];
	//verificar si actualiza o elimina ramo
	
	if($proceso==0){
	//eliminar ramo	
		
		$q0="select * from empresa where cod_ramo=$cod_ramo";
		$result0=mysql_query($q0,$conectar);					//verificar si alguna empresa utilizo
		$cantidad0=mysql_num_rows($result0);					//este ramo en su registro
		
		if($cantidad0>0){
			//si hay empresa no permitir eliminar ramo	
			echo "<script type='text/javascript'>alert('No se puede eliminar, existen empresas asociadas a este ramo');</script>";
		}
		else
		{
			//eliminar el ramo normalmente	
			$q2="delete from ramo where cod_ramo=$cod_ramo";
			$result2=mysql_query($q2,$conectar);
			echo "<script type='text/javascript'>alert('Ramo Eliminado');</script>";
		}
	
	}
	
	if($proceso==1){
	//actualizar ramo	
	
		$q1="update ramo set Descripcion='$descipcion' where cod_ramo=$cod_ramo";
		$result1=mysql_query($q1,$conectar);
		
		echo "<script type='text/javascript'>alert('Ramo Actualizado');</script>";
	}
	
	echo "<script type='text/javascript'>location.href='../administrador_ramo.php'</script>";

?>