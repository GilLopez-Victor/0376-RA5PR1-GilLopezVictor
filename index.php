<!DOCTYPE html>
<html>
<head>
    <title>0376-RA5PR1-GilLopezVictor</title>
    <style>
        h1 {
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

<form method="get" action="index.php">
    <label>Introduce un número:</label>
    <input type="number" name="numero" min="1" max="12">
    <button type="submit">Generar tabla</button>
</form>

<?php
if (isset($_GET['numero'])) {

    $numero = (int)$_GET['numero'];

    echo "<h1>TABLA DE MULTIPLICAR DEL $numero</h1>";
    echo "<table>";
    echo "<tr><th>Operacion</th><th>Resultado</th></tr>";

    for ($i = 1; $i <= 10; $i++) {

        if ($i % 2 == 0) {
            $clase = "par";
        } else {
            $clase = "impar";
        }

        $resultado = $numero * $i;

        echo "<tr class='$clase'>";
        echo "<td>$numero x $i</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>