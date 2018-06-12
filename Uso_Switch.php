<html>
<head>
<title>Switch</title>
</head>

<body>

<?php

$a= 1;
$b= 4;
$c= 2;
$i= "Triangulo";

switch($i)
{
	case ($a==$b && $a==$c):
	echo "equilatero";
	break;
	
	case ($a==$b || $a==$c || $b==$c):
	echo "Isosceles";
	break;
	
	case ($a<>$b && $a<>$c && $b<>$c):
	echo "Escaleno";
	break;
}

?>

</body>
</html>