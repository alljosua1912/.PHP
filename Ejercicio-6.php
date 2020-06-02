<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 6</h1>
<?php

// Este ejercicio corresponde a utilizacion de Formularios en PHP
header ("Content-type: text/html;charset =\"utf-8\"");

/*Enviar informacion del navegador 
hasta el lado del servidor*/
echo "<h1>".$_GET ['clase']."</h1>";
echo "<h2>".$_GET ['periodo']."</h2>";

echo "<h1>".$_GET ['nombre']."</h1>";
echo "<h2>".$_GET ['apellido']."</h2>";

if (is_numeric($_GET['edad']) && $_GET ['edad']>=1)
{
    echo "<h3> Bienvenido ".$_GET['nombre']. " ".$_GET['apellido']."</h3>";

}
else
{
    echo "<h3> No es una edad valida</h3>";
}

?>

<form>
Escribe tu nombre completo:
<input name="nombre" type="text" placeholder="Escribe nombres" >
<input name="apellido" type="text" placeholder="Escribe apellidos" >
<input name="edad" type="text" placeholder="Escribe Edad" >
<input type="submit" value="Registrar">
</form>

</body>
</html>