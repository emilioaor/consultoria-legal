<?php
	
	include_once('conectar.php');

	$usuario=$_GET['usu'];
	$e_empresa=$_GET['emp'];
	$nombre=$_GET['nom'];
	$apellido=$_GET['ape'];
	$EmpresaID=$_GET['eid'];
	$url="?usu=$usuario&emp=$e_empresa&nom=$nombre&ape=$apellido&eid=$EmpresaID";
	
	$num_cotizacion=$_GET['num'];
	
	$q="select * from cotizacion where num_cotizacion=$num_cotizacion";	//consultar cotizacion
	$result=mysql_query($q,$conectar);
	$obs=mysql_result($result,0,3);
	
	$q2="insert into solicitud values(NULL,NOW(),$EmpresaID,'$obs','Sin Leer')";	//insertar solicitud desde la cotizacion
	$result2=mysql_query($q2,$conectar);
	
	$q3="select * from solicitud order by num_solicitud desc";	//obtener ultima solicitud
	$result3=mysql_query($q3,$conectar);
	$num_solicitud=mysql_result($result3,0,0);
	
	$q4="select * from detalle_cotizacion where num_cotizacion=$num_cotizacion"; //obtener los servicios de la cotizacion
	$result4=mysql_query($q4,$conectar);
	$cantidad4=mysql_num_rows($result4);
	
	for($i=0;$i<=($cantidad4-1);$i++){
		
		$cod_servicio=mysql_result($result4,$i,2);
		$q5="insert into detalles_solicitud values(NULL,$num_solicitud,$cod_servicio)";		//llenar los servicios de la solicitud
		$result5=mysql_query($q5,$conectar);												//con los servicios de la cotizacion
	}
	
	
	$q6="update cotizacion set estatus='Procesada' where num_cotizacion=$num_cotizacion";	//marcar la cotizacion como procesada
	$result6=mysql_query($q6,$conectar);
	
	echo "<script type='text/javascript'>alert('Solicitud Enviada'); location.href='../usuario.php$url&mostrar=0' </script>";
	
?>