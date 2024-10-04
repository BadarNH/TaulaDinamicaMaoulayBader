<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple arrays</title>
</head>
<body>
    <?php
		$dades = array(
					array(
						"Nom"  => "Bader",
						"Cognom"  => "Maoulay",
						"2Cognom"  => "Khayati",						
						"Naixament"  => "10-02-2002",
						"DNI"  => "47819564B",
					),
					array(
						"Nom"  => "Laura",
						"Cognom"  => "Gómez",
						"2Cognom"  => "Fernández",						
						"Naixament"  => "15-08-1999",
						"DNI"  => "47821654C",
					),
					
					array(
						"Nom"  => "Carlos",
						"Cognom"  => "Martínez",
						"2Cognom"  => "Pérez",						
						"Naixament"  => "22-11-1985",
						"DNI"  => "52418975D",
					),
					
					array(
						"Nom"  => "Marta",
						"Cognom"  => "Sánchez",
						"2Cognom"  => "López",						
						"Naixament"  => "30-05-1993",
						"DNI"  => "43819762A",
					),
					
					array(
						"Nom"  => "David",
						"Cognom"  => "Navarro",
						"2Cognom"  => "Ortiz",						
						"Naixament"  => "03-12-1990",
						"DNI"  => "45729183E",
					)					
				);
				
		echo "<table>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>" . "Nom";
		echo "<th>" . "Cognom";
		echo "<th>" . "2Cognom";
		echo "<th>" . "Naixament";
		echo "<th>" . "DNI";
		echo "<tbody>";
		
		foreach($dades as &$persona)
		{
			echo "<tr>";
			echo "<td>" . $persona["Nom"];
			echo "<td>" . $persona["Cognom"] ;
			echo "<td>" . $persona["2Cognom"];
			echo "<td>" . $persona["Naixament"];
			echo "<td>" . $persona["DNI"];
			
		}

	?>
</body>
</html>