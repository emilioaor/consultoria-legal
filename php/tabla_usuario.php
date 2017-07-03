<?php
include_once('conectar.php');

	$usuario=$_POST['usuario'];
	
	$q="select * from usuario where usuario='$usuario'";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
	
	if($cantidad>0){
		$usuario=mysql_result($result,0,0);
		$contra=mysql_result($result,0,1);
		$cod_nivel=mysql_result($result,0,2);
		$EmpresaID=mysql_result($result,0,3);
		
		$q2="select * from nivel_usuario where cod_nivel=$cod_nivel";
		$result2=mysql_query($q2,$conectar);
		$nivel=mysql_result($result2,0,1);
		
		$q3="select * from empresa where EmpresaID=$EmpresaID";
		$result3=mysql_query($q3,$conectar);
		$n_empresa=mysql_result($result3,0,1);
		
	echo "<script type='text/javascript'>location.href='../administrador_usuario.php?usu=$usuario&contra=$contra&niv=$nivel&n_empresa=$n_empresa'</script>";	
	}
	else
	{
		echo "<script type='text/javascript'>alert('Usuario no encontrado');location.href='../administrador_usuario.php'</script>";		
	}
	
		



?>