<html>

	<head>
		<title>Arreglo asociado</title>
	</head>
	
	<body>
	
		<?php
			
			$b=array("0" => array("Nombre" => "Julia","Telefono" => "8092511550"),
			
			"1" => array ("Nombre" => "Lourdes","Telefono" => "8093216675"),
			"2" => array ("Nombre" => "Mirian", "Telefono" => "8495467231"));
			
			$i=0;
			
			echo "<table border='1'>";
			echo  "<tr>";
			
			while($i<=2)
			{
				echo "<td>";
				echo $b[$i]['Nombre'] ."<br>";
				echo $b[$i]['Telefono'] ."<br>";
				echo "<br>";
				
				$i++;
				echo"</td>";
			
				
			}
			
			echo "</tr>";
			echo "</table>";
			
		?>
	
	</body>

</html>