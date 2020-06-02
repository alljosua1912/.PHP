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
while($primo && $i<$num){
    $primo=($num%$i) !=0;
    $i++;
}
if($primo){
    echo " El Numero $num es primo";
}
else {
    echo "El numero $num no es primo";
}
?>

<form>
<form>
Escriba un numero:
<input name="numero" type="text" placeholder="Numero" >
<input type="submit" value="Validadr">
</form>

</body>
</html>