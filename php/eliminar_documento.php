<?php
	
	include_once('conectar.php');
	
	$num_solicitud=$_GET['num'];
	$documento=$_GET['doc'];
	$usu=$_GET['usu'];
	
	$ruta="../cargas/".$documento;
	
	$r=unlink($ruta);
	
	if($r){
	$q="delete from documento where documento='$documento'";
	$result=mysql_query($q,$conectar);
	
	echo "<script type='text/javascript' >alert('Documento Eliminado');</script>";
	
		if($usu=='administrador'){
			echo "<script type='text/javascript' >location.href='../administrador_documentos.php?num=$num_solicitud'</script>";
		}
		else
		{
			//consultor
			echo "<script type='text/javascript' >location.href='../consultor_documentos.php?num=$num_solicitud'</script>";	
		}

	}
?>