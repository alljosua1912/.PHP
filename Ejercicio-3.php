<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 3</h1>

<?php
//Arreglos
    echo "<h2>Arreglos</h2>";
    $miarreglo = array (10,20,30,40,50);

    echo "<p>  Contenido del elemento 2 del arreglo: $miarreglo[2]</p>";
    echo "<p> Despliega el contenido del arreglo: </p>";
    print_r ($miarreglo);// Se utiliza esta funcion para ver de forma entendible el arreglo
 
    echo " <p> El tamaño del arreglo es:" .sizeof($miarreglo).  "</p>";

    $miFechaArr["dia"]= "Lunes";
    $miFechaArr["mes"]= "Junio";
    $miFechaArr["dia"]= "2020";

    echo"<br><br>";
    var_dump ($miFechaArr); //Muestra Info de la variable del arreglo

    unset ($miFechaArr["año"]); //Elimina el Elemento Indicado del arreglo
    echo"<br><br>";
    print_r ($miFechaArr);
    $miarregloReves = array_reverse($miarreglo);

    echo"<br><br>";
    print_r($miarregloReves); // Este arreglo esta impreso en forma inversa

?>
</body>
</html>