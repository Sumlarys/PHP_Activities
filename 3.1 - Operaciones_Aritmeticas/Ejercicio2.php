<!--Calcular el resto y cociente de dos números.
Dado dos números enteros, calcula el cociente y 
el resto de la división.-->

<?php 
//Declaramos dos números enteros
$primerNumero = 2;
$segundoNumero = 4;
//Metemos en una variable los calculos
$cociente = $segundoNumero/$primerNumero;
$resto = $segundoNumero%$primerNumero;
//Imprimimos por pantalla
echo "El cociente entre los numeros $segundoNumero y $primerNumero es: ".nl2br("\n")."$cociente y su resto $resto";
?>