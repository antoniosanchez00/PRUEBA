<?php

 $lado1= $_POST['lado1'];
 $lado2= $_POST['lado2'];
 $lado3= $_POST['lado3'];
 
 echo "<table border='2'>";
 echo "<tr>";
 echo "<td>";
 if($lado1 == $lado2 && $lado1 == $lado3)
 {
	 echo "El trangulo es equilatero";
	 
 }else
	 if($lado1 == $lado2 or $lado1 == $lado3 or $lado2 == $lado3)
		{
			
			echo "El trangulo es Isosceles";
			
		}else
			if($lado1 <> $lado2 && $lado1 <> $lado3 && $lado2 <> $lado3)
			{
				echo "El trangulo es Escaleno";
			}
		echo "</td>";	
echo "</tr>";
echo "</table>";
?>