
        <table width="400" border="0" id="tabla_chat">
          <?php
	  	include_once('conectar.php');
		$num_solicitud=$_GET['num'];
	  $q3="select * from contactanos_solicitud where num_solicitud=$num_solicitud order by codigo";
	  $result3=mysql_query($q3,$conectar);
	  $cantidad2=mysql_num_rows($result3);
	  
	  if($cantidad2>0){
		  //si existen mensajes en el chat
		  $ccolor=0;
	  for($i=0;$i<=($cantidad2-1);$i++){
		  $usuario=mysql_result($result3,$i,3);
		  $mensaje=mysql_result($result3,$i,2);
		  if($ccolor==0){
			$color="#006699"; 
			$ccolor++;
		  }
		  else
		  {
			  $color="";
			  $ccolor=0;
		  }
		  
        echo '<tr>
          <th scope="col" align="left" bgcolor="'.$color.'" >'.$usuario.' dice: '.$mensaje.'</th>
        </tr>';
	  }
	  
	  }
	  else
	  {
		//si no existen mensajes
		
		echo '<th bgcolor="#0000FF" >Sin Mensajes</th>';  
	  }
	  
		?>
          </table>
    