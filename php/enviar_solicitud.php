<?php
	include_once('conectar.php');
	
	
	$usuario=$_GET['usu'];
	$e_empresa=$_GET['emp'];
	$nombre=$_GET['nom'];
	$apellido=$_GET['ape'];
	$EmpresaID=$_GET['eid'];
	$observacion=$_GET['obs'];
	$url="?usu=$usuario&emp=$e_empresa&nom=$nombre&ape=$apellido&eid=$EmpresaID";
	$tam=$_GET['tam'];
	
	$q="insert into solicitud values(NULL,NOW(),$EmpresaID,'$observacion','Sin Leer')"; //insertar solicitud
	$result=mysql_query($q,$conectar);
	
	$q2="select * from solicitud order by num_solicitud desc";  //obtener num de ultima solicitud insertada
	$result2=mysql_query($q2,$conectar);
	$num_solicitud=mysql_result($result2,0,0);
	
	for($i=0;$i<=($tam-1);$i++){
	
	$desc=$_GET['s'.$i];	
	$q3="select * from servicio where descripcion='$desc'"; //obtiene el codigo de servicio
	$result3=mysql_query($q3,$conectar);					//de los servicios seleccionados
	$cod_servicio=mysql_result($result3,0,0);
	
	$q4="insert into detalles_solicitud values(NULL,$num_solicitud,$cod_servicio)"; //llena la tabla detalles_solicitud
	$result4=mysql_query($q4,$conectar);
	
	}
	
	echo '<script type="text/javascript">alert("Solicitud Enviada");</script>';	

	
	echo '<script type="text/javascript">
	location.href="../usuario.php'.$url.'&mostrar=0"</script>';
	
	
	?>
