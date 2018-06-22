<html>

	<head>
		<title>Arreglo asociado #2</title>
	</head>
	
	<body>
	
	 <?php
	 
		$a=array("Primero" => array("Nombre" => "Pedro","Apellido" => "Rodriguez", "Email" => "pedrorodriguez@gmail.com"), 
		         "Segundo" => array("Nombre" => "David","Apellido" => "Lopez", "Email" => "David_come_coco@gmail.com"));
				 
				 echo $a["Segundo"]["Nombre"]." <br>".$a["Segundo"]["Email"];
	 
		?>
	
	</body>

</html>