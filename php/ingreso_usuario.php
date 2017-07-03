<?php
	include_once('conectar.php');
	
	$usuario=$_POST['usuario'];
	$contra=$_POST['contra'];
	
	$q="select * from usuario where usuario='$usuario' and password='$contra'";
	$result=mysql_query($q,$conectar);
	$cantidad=mysql_num_rows($result);
	
	if($cantidad>0){
		//Usuario Correcto
		$nivel=mysql_result($result,0,2); //verificando nivel de usuario
		$EmpresaID=mysql_result($result,0,3);
		
			if($nivel==3){
				//si es cliente
				$q2="select apellido,nombre from representante_legal where EmpresaID=$EmpresaID";
				$result2=mysql_query($q2,$conectar);
				$apellido=mysql_result($result2,0,0);
				$nombre=mysql_result($result2,0,1);
				
				$q3="select Nombre from empresa where EmpresaID=$EmpresaID";
				$result3=mysql_query($q3,$conectar);
				$e_nombre=mysql_result($result3,0,0);
				
				echo "<script type='text/javascript' > location.href='../usuario.php?usu=$usuario&ape=$apellido&nom=$nombre&emp=$e_nombre&eid=$EmpresaID&mostrar=0'</script>";
			}
			else
			{
				//si es administrador!
				if($nivel==1){
					echo "<script type='text/javascript' > location.href='../administrador.php'</script>";
				}
				else
				{
					
					echo "<script type='text/javascript' > location.href='../consultor.php'</script>";
				}
			}
	}
	else
	{
		//usuario incorrecto
			echo "<script type='text/javascript' >alert('Usuario o contraseña incorrecta'); location.href='../index.html'</script>";
	}
	
	echo $res;
	
?>