<!--Conversión de tipos con operadores de
comparación. Compara un número entero con una cadena 
de texto usando === y == para mostrar la diferencia.-->
<?php 
//Declaramos las variables
$numero = 2;
$cadena = "2";

//Mostramos por pantalla pasando por una condicion ternaria.
echo ($numero == $cadena)? "Son iguales" : "No son iguales";
echo nl2br("\n");
echo ($numero === $cadena)? "Son iguales":"No son iguales";
?>