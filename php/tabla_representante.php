<?php
	
	include('conectar.php');
	
	$cedula=$_POST['cedula'];
	
	$q="select * from representante_legal where cedula='$cedula'";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
	
	if($cantidad>0){
	//representante encontrado
	
	$EmpresaID=mysql_result($result,0,0);
	$ced=mysql_result($result,0,1);
	$apellido=mysql_result($result,0,2);
	$nombre=mysql_result($result,0,3);
	$tlf=mysql_result($result,0,6);
	$nom=$apellido.' '.$nombre;
	
	$q2="select * from empresa where EmpresaID=$EmpresaID";
	$result2=mysql_query($q2,$conectar);
		
	$emp=mysql_result($result2,0,1);
	
	echo "<script type='text/javascript' >location.href='../administrador_representante.php?ced=$ced&nom=$nom&emp=$emp&tlf=$tlf'</script>";
	
	}
	else
	{
	//ningun representante corresponde con la cedula	
	
	echo "<script type='text/javascript' >alert('Sin resultados');location.href='../administrador_representante.php'</script>";
	}

?>