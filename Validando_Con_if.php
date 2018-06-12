<html>

<head>
  <title>Ejecicio if</title>
</head>


<body>

<?php

$a= 1;
$b= 3;
$c= 4;

echo "A es igual a:" .$a;
echo "<br>";
echo "B es igual a:" .$b;
echo "<br>";
echo "C es igual a:" .$c;
echo "<br>";


if($a>$b && $a>$c)
{
	echo "<br>";
	echo "La Letra a es mayor";
}else
{
	if($b>=$a && $b>=$c)
	{
	 echo "<br>";
	 echo "La Letra B es mayor";
	 
	}else
	{	
		echo "<br>";
		echo "La Letra C es mayor";
	}
}


?>

</body>

</html>