<?php
/**
 * Escribe dos cadenas, una con comillas simples y 
 * otra con comillas dobles, que incluyan una variable. 
 * Observa la diferencia.
 */

//Declaración de la variable
$nombre = "Ren";

//Cadena con comillas dobles. Interpreta la variable.
$cadena_dobles = "Me llamo $nombre !";
echo "Con comillas dobles: " . $cadena_dobles . "\n";

//Cadena con comillas simples. No interpreta la variable.
$cadena_simples = 'Me llamo $nombre !';
echo "Con comillas simples: " . $cadena_simples . "\n";
?>