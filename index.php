<?php
$numero = 7;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0376-RA5PR1-GilLopezVictor</title>
    <style>
    
    h1{
    	text-align: center;
        }
        
    table { 
    	border-collapse: collapse;
        margin: auto;
    	 
    	}
        
        td { 
            border: 1px solid black;
            padding: 15px; 
        }
        
        th {
            border: 1px solid black;
            padding: 15px;
            background-color: lightblue;
        	}
            
        tr.par { 
            background-color: lightgray; 
        	}
            
        tr.impar { 
            background-color: white; 
        }
        
    </style>
</head>
<body>

    <h1> TABLA DE MULTIPLICAR DEL <?php echo $numero; ?></h1>

    <?php
	echo "<table>";
	echo "<tr><th>Operacion</th><th>Resultado</th></tr>";

	for ($i = 1; $i <= 10; $i++) {
    
    	if ($i % 2 == 0) {
            $clase = "par";
        } else {
            $clase = "impar";
        }
        
        $resultado = $numero * $i;
        
    	echo "<tr class= '$clase'>";
  	  	echo "<td>$numero x $i</td>";
    	echo "<td>$resultado</td>";
    	echo "</tr>";
	}

	echo "</table>";
?>

</body>
</html>