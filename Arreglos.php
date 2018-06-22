<html>

<head>
	<title>Arreglos</title>
</head>

<body>

<?php

	$a[0]='lunes';
	$a[1]='martes';
	$a[2]='miercoles';
	$a[3]='jueves';
	$a[4]='viernes';
	$a[5]='sabado';
	$a[6]='domingo';
	
	for($i=0; $i<=6; $i++)
	{
		echo "<br>";
		echo $a[$i];
		
	}

?>

</body>

</html>