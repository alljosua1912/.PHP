<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 6</h1>
<?php

// Este ejercicio corresponde a utilizacion de Formularios en PHP
header ("Content-type: text/html;charset =\"utf-8\"");

/*Enviar informacion del navegador 
hasta el lado del servidor*/
echo "<h1>".$_GET ['numero']."</h1>";

do{

if (is_numeric($_GET['numero']) && is_float($_GET['numero'] !=1) && $_GET ['numero']>1) 
{
    
    
$primo=0;
$divisores =2;
while($divisores < $_GET['numero'] && $primo !=1)
{
    if($_GET['numero'] % ==0 ) 
    $primo =1 ;
    $divisores++;
}

    if(primo==0)
    {
        echo "<h3> Numero primo".$_GET['numero']."</h3>";
    }
    else
    {
        echo "<h3> No es primo </h3>";
    }

}
}while
?>

<form>
Ingrese un número para validar:
<input name="numero" type="text" placeholder="Escribe el numero" >

<input type="submit" value="Registrar">
</form>

</body>
</html>