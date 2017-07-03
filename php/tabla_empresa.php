<?php

include_once('conectar.php');

$EmpresaID=$_POST['EmpresaID'];

$q="select * from empresa where EmpresaID=$EmpresaID";
$result=mysql_query($q,$conectar);
$cantidad=mysql_num_rows($result);

if($cantidad>0){
	//encoontro la empresa
$nombre=mysql_result($result,0,1);

$q2="select * from usuario where EmpresaID=$EmpresaID";
$result2=mysql_query($q2,$conectar);
$usuario=mysql_result($result2,0,0);

$q3="select * from representante_legal where EmpresaID=$EmpresaID";
$result3=mysql_query($q3,$conectar);
$ape=mysql_result($result3,0,2);
$nom=mysql_result($result3,0,3);

$rep=$ape.' '.$nom;

echo "<script type='text/javascript'>location.href='../administrador_empresa.php?nom=$nombre&usu=$usuario&rep=$rep&eid=$EmpresaID'</script>";
}
else
{
	//sin empresa de resultado
echo "<script type='text/javascript'>alert('Sin Resultados');location.href='../administrador_empresa.php'</script>";
}

?>