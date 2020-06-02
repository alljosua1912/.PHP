<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 4</h1>
<?php
   header ("Content-type: text/html;charset=\"utf-8\"");
   $usuario="guzz2020";

   if ($usuario == "guzz2020" || $usuario=="guzz2020") //Utilizando el operador || or y tambien se puede usar &&
   {
        //Si la instruccion es verdadera
        echo "<h1>Usuario es valido</h1>";
   }
   else
   {
       //Si la instruccion es falsa
       echo "<h1>Lo siento $usuario, no tiene las opciones</h1>";
   }

   $edad=15;
   if($edad>=18)
   {
       echo"<h1>Tiene la edad requerida</h1>";
   }
   else
   {
    "<h1>Lo siento debe tener al menos 18 años</h1>";
   }

?>
</body>
</html>