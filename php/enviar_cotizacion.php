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
	
	
	$q="insert into cotizacion values(NULL,$EmpresaID,NOW(),'$observacion','En Proceso',NULL)"; //insertar cotizacion
	$result=mysql_query($q,$conectar);
	
	
	$q2="select * from cotizacion order by num_cotizacion desc"; //obtener ultima cotizacion
	$result2=mysql_query($q2,$conectar);
	$num_cotizacion=mysql_result($result2,0,0);
	
	$total=0;
	for($i=0;$i<=($tam-1);$i++){
		
		$desc=$_GET['s'.$i];	
		$q3="select * from servicio where descripcion='$desc'"; //obtiene el codigo de servicio
		$result3=mysql_query($q3,$conectar);					//de los servicios seleccionados
		$cod_servicio=mysql_result($result3,0,0);
		$precio=mysql_result($result3,0,2);
		
		$q4="insert into detalle_cotizacion values(NULL,$num_cotizacion,$cod_servicio)";	//llena la tabla detalle_cotizacion
		$result4=mysql_query($q4,$conectar);
		$total=$total+$precio;
	}
	
	$q5="update cotizacion set total=$total where num_cotizacion=$num_cotizacion";
	$result5=mysql_query($q5,$conectar);
	

	echo '<script type="text/javascript">alert("Cotizacion Generada");</script>';
	
	echo '<script type="text/javascript">
	location.href="../usuario.php'.$url.'&mostrar=1"</script>';	

?>