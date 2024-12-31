<?php 
/**Realiza una operación binaria y muestra el resultado. */

//Declaración de variables
$tamaño_entero = PHP_INT_SIZE;
$max_entero = PHP_INT_MAX;

//Operación binaria
$resultado = $max_entero + $tamaño_entero;

//Mostramos por pantalla
echo "La solución de la operación binaria entre:\n $tamaño_entero y $max_entero es de $resultado";
?>