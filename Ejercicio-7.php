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
    echo $num . "<h3> Es numerico</h3>"; 
    echo "<br>";
} 
else { 
    echo $num . "<h3> No es numerico</h3>"; 
    echo "<br>";
break;
} 



while($primo && $i<$num){
    $primo=($num%$i) !=0;
    $i++;
}
if($primo){
    echo " <h3>El Numero $num es primo</h3>";
    echo "<br>";
}
else {
    echo "<h3>El numero $num no es primo</h3>";
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