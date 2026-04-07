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

<!-- Formulario que envía el número por GET al mismo archivo -->
<form method="get" action="index.php">
    <label>Introduce un número:</label>
    <!-- Solo acepta del 1 al 12 -->
    <input type="number" name="numero" min="1" max="12">
    <button type="submit">Generar tabla</button>
</form>

<?php
// Si el usuario ha enviado el formulario
if (isset($_GET['numero'])) {

    // Recoge el número enviado y lo convierte a entero
    $numero = (int)$_GET['numero'];

    // Muestra el título con el número elegido
    echo "<h1>TABLA DE MULTIPLICAR DEL $numero</h1>";

    // Inicia la tabla HTML
    echo "<table>";
    echo "<tr><th>Operacion</th><th>Resultado</th></tr>";

    // Bucle del 1 al 10
    for ($i = 1; $i <= 10; $i++) {

        // Asigna una clase CSS según si la fila es par o impar
        if ($i % 2 == 0) {
            $clase = "par";
        } else {
            $clase = "impar";
        }

        // Multiplica
        $resultado = $numero * $i;

        // Imprime la fila con su clase CSS
        echo "<tr class='$clase'>";
        echo "<td>$numero x $i</td>";
        echo "<td>$