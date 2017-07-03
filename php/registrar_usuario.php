<?php
	include_once('conectar.php');

	$usuario=$_POST['usuario'];
	$contra=$_POST['contra'];
	$rcontra=$_POST['rcontra'];
	$e_nombre=$_POST['e_nombre'];
	$e_direccion=$_POST['e_direccion'];
	$e_telefono=$_POST['e_telefono'];
	$e_ciudad=$_POST['e_ciudad'];
	$e_ramo=$_POST['e_ramo'];
	$e_fax=$_POST['e_fax'];
	$cedula=$_POST['cedula'];
	$apellido=$_POST['apellido'];
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$cargo=$_POST['cargo'];
	$telefono=$_POST['telefono'];
	
$q5="select * from usuario where usuario='$usuario'";
$result5=mysql_query($q5,$conectar);

$cantidad5=mysql_num_rows($result5);

if($cantidad5>0){
	//el usuario ya existe
	echo "<script type='text/javascript'> alert('Ya existe este usuario'); location.href='../registro.php' </script>";
}
else
{
//usuario disponible

	if($contra==$rcontra){
	//Coinciden las contraseñas
	
	$q="insert into empresa values(NULL,'$e_nombre','$e_direccion','$e_telefono','$e_ciudad','$e_fax',$e_ramo)";
	$result=mysql_query($q,$conectar);
	
	$consulta="select * from empresa order by EmpresaID desc";
	$result2=mysql_query($consulta,$conectar);
	$EmpresaID=mysql_result($result2,0,0);
	
	$q3="insert into representante_legal values($EmpresaID,'$cedula','$apellido','$nombre','$direccion','$cargo','$telefono')";
	$result3=mysql_query($q3,$conectar);
	
	$q4="insert into usuario values('$usuario','$contra',3,$EmpresaID)";
	$result4=mysql_query($q4,$conectar);
	
		
	echo "<script type='text/javascript'> alert('Registro Completado'); location.href='../index.html' </script>";
		
	}
	else
	{
		//Las contraseñas no coinciden
		echo "<script type='text/javascript'> alert('Contrasenas no Coinciden'); location.href='../registro.php' </script>";	
	}
	
}
	
?>