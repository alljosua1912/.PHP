<!DOCTYPE html>
<html>
<body>

<h2>EJERCICIO 7</h2>
<?php

// Para determinar si un Numero es Primo o no
header ("Content-type: text/html;charset =\"utf-8\"");

// Funcion Primo
function primo($numero)
{
    $contador=0;

    for ($i=2;$i<=$numero;$i++)

    {
        if($numero%$i==0)
        {
        if(++$contador>1)
        return false;
        }
    }
return true;
}


if (ctype_digit($_GET['numero']) && $_GET ['numero']>0)
{
    echo "El numero es valido";
    $numeroprimo= (int) $_GET['numero'];
    echo "<h1>$numeroprimo</h1>";
    if (primo($numeroprimo))
        {
        echo "Es un numero que ingreso es primo";
        }
    else
        {
        echo "El numero que ingreso NO ES numero primo";   
        }
}
else
{
    echo "<h3> Numero no valido</h3>";
}


?>

<form>
Escribe un numero:

<input name="numero" type="text" placeholder="Ingrese numero" >
<input type="submit" value="Evaluar">
</form>

</body>
</html>