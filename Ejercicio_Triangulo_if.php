<html>

<head>
  <title>Ejecicio Triangulo</title>
</head>


<body>

<?php

$a= 1;
$b= 3;
$c= 4;

if($a==$b && $b == $c)
{
	echo "El triangulo es equilatero";
}
else
{
	if($a== $b || $a==$c || $b==$c)
	{
		echo "El triangulo es isosceles";
	}else
	{
	
		echo "El triangulo es Escaleno" ;
	}
}


?>

</body>

</html>