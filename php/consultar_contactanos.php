 <br />
  	 <table border="0" id="chat">
    <?php
include_once('conectar.php');

$q="select * from contactanos order by codigo desc";
$result=mysql_query($q,$conectar);
$cantidad=mysql_num_rows($result);

if($cantidad>0){
	for($i=0;$i<=($cantidad-1);$i++){
  	$correo=mysql_result($result,$i,1);
  	$fecha=mysql_result($result,$i,2);
  	$mensaje=mysql_result($result,$i,3);
    echo '<tr>
      <th width="160" height="62" scope="col" align="left" ><br>'.$correo.' dijo:<br>'.$mensaje.'</th>
      </tr>';
  	}
  }
	?>
     </table>
  