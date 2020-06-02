<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 2</h1>
<?php

// Este ejercicio corresponde a utilizacion de Variables en PHP
   $NombreClase = "Lenguaje 4";

    echo "<html><head> <meta charset=\"utf-8\"></head>";
    echo "<body>";
    echo "<h2> Esta es una clase de $NombreClase mañana y tarde (Símbolo)</h2>";
    echo "<h2> Esta es otra fila de la clase:".$NombreClase." con dos cadenas cotatenadas</h2>";
    echo "</body>";
    echo "</html>";

    $numero =50;
    $calculo = $numero / 2 +6;
    echo  "El resultado de la operacion es : $calculo";

    $logico = true;
    $logico2 = false;
    echo "<p> El contenido de una variable tipo booleana verdadera: $logico y vatiable booleana falsa: $logico2</p>";

    $variableNombreClase = "NombreClase";
    echo"<p> Este es un nombre de variable extraido de una cadena" .$$variableNombreClase."</p>";
?>
</body>
</html>