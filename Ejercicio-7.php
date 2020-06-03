<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
<?php

// Este ejercicio corresponde a utilizacion de Formularios en PHP
header ("Content-type: text/html;charset =\"utf-8\"");

/*Enviar informacion del navegador 
hasta el lado del servidor*/
$num=$_GET['numero'];
$i=2;
$primo=true;
if (is_numeric($num)) { 
    echo $num . " Es numerico"; 
    echo "<br>";
} 
else { 
    echo $num . " No es numerico"; 
    echo "<br>";
} 
endif;


while($primo && $i<$num){
    $primo=($num%$i) !=0;
    $i++;
}
if($primo){
    echo " El Numero $num es primo";
    echo "<br>";
}
else {
    echo "El numero $num no es primo";
    echo "<br>";
}



?>

<form>
<form>
Escriba un numero:
<input name="numero" type="text" placeholder="Numero" >
<input type="submit" value="Validar">
</form>

</body>
</html>