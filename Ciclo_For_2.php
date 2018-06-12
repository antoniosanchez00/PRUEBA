<html>
<head><title>Ciclo For #2</title></head>

<body>
	
	
	<?php
		
		$contar=0;
		$can=0;
		$Resul= 0;
		
		
		echo "<table border='1'>";
		echo "<tr>";
		for($i=1; $i<=10; $i++)
		{
		
			echo " <td>" .$i ."</td > ";
	
			$contar +=$i;
			$can = $i;
			
			
		
		}
		
		echo "</tr>";
		echo "</table>";
		
		echo "<br > ";
		$Resul= $contar / $can;
		
		echo " El conteo es: " .$contar ."<br > ";
		echo " La Cantidad es: " .$can ."<br > ";
		
		?>
		<table border="1">
		<tr>
		<td> <?php echo " El Promedio es: "  ."$Resul" ?> </td>
		</tr>

		</table>
		
	


	</body>
</html>