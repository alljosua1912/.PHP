<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
<?php

// Este ejercicio corresponde a utilizacion de Formularios en PHP
header ("Content-type: text/html;charset =\"utf-8\"");

/*Enviar informacion del navegador 
hasta el lado del servidor*/
echo "<h1>".$_GET ['numero']."</h1>";

function primo($num){
    $cont = 0;
    for($i = 1; $i <= $num; $i++){
    if($num % $i == 0){
    //echo «$i <br>»;
    $cont++;
    }
    }
    
    if($cont==2){
    return true;
    }
    else{
    return false;
    }
    }
?>

<form>
<tr>
<td><strong>Ingrese un número:</strong></td>
<td><label>
<input type=»text» name=»numero_primo» id=»numero_primo» />
</label></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan=»2″><div align=»center»>
<label>
<input type=»submit» name=»ok» id=»ok» value=»Ok» />
</label>
</div></td>
</tr>
</table>
<label></label>
</form>

</body>
</html>