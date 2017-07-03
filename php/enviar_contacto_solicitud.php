<?php
	
	include_once('conectar.php');
	
	$usuario=$_GET['usu'];
	$e_empresa=$_GET['emp'];
	$nombre=$_GET['nom'];
	$apellido=$_GET['ape'];
	$EmpresaID=$_GET['eid'];
	$url="?usu=$usuario&emp=$e_empresa&nom=$nombre&ape=$apellido&eid=$EmpresaID";
	
	$num_solicitud=$_GET['num'];
	$mensaje=$_GET['msj'];
	
	$nivel=$_GET['nivel'];
	
	$q="insert into contactanos_solicitud values(NULL,$num_solicitud,'$mensaje','$usuario')";
	$result=mysql_query($q,$conectar);

	if($usuario=='administrador'){
		//Mensaje del Administrador
		/*echo '<script type="text/javascript">location.href="../administrador_solicitud.php?num='.$num_solicitud.'"</script>';*/
	}
	elseif($usuario=='consultor'){
		//mensaje del consultor
		/*echo '<script type="text/javascript">location.href="../consultor_solicitud.php?num='.$num_solicitud.'"</script>';*/
	}
	else
	{
	// Mensaje del usuario
	$q2="update solicitud set estatus='Sin Leer' where num_solicitud=$num_solicitud";
	$result2=mysql_query($q2,$conectar);
	/*echo '<script type="text/javascript">location.href="../visualizar_solicitud.php'.$url.'&num='.$num_solicitud.'"</script>';*/
	}

?>