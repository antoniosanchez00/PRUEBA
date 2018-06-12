<html>
	<head>
		<title>Ejercicio #7</title>
	</head>
	
	<body>
	
	<?php
	
		$A=3;
		$B=1;
		$C=2;
		
		if($A>$B && $B>$C )
		{
			echo " " .$A ."<br>";
			echo " " .$B ."<br>";
			echo " " .$C ."<br>";
		 
		}elseif ($B>$A && $A>$C )
		{
			echo " " .$B ."<br>";
			echo " " .$A ."<br>";
			echo " " .$C ."<br>";
		 
		}elseif($C>$A && $A>$B)
		{
			echo " " .$C ."<br>";
			echo " " .$A ."<br>";
			echo " " .$B ."<br>";
			
		}elseif($C>$B && $B>$A)
		{
			echo " " .$C ."<br>";
			echo " " .$B ."<br>";
			echo " " .$A ."<br>";
			
		}elseif($A>$C && $C>$B)
		{
			echo " " .$A ."<br>";
			echo " " .$C ."<br>";
			echo " " .$B ."<br>";
		}
	?>
	
	</body>
</html>