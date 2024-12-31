<?php 
/**Declara una cadena y realiza operaciones 
 * básicas como obtener su longitud, convertirla 
 * a mayúsculas y concatenarla con otra cadena. */

//Declaramos dos cadenas
$cadena = "Hola, me llamo Ren";
$cadena2 = " y soy del 96";

//Obtener la longitud de la cadena
$longitud = strlen($cadena);
echo "Longitud de la cadena: ".$longitud."\n";

//Convertir a mayúsculas una cadena
$mayusculas = strtoupper($cadena);
echo "Cadena de mayúsculas: ".$mayusculas."\n";

//Concatenar dos cadenas
$cadena_concatenada = $cadena. " " . $cadena2;
echo "Cadena concatenada: " . $cadena_concatenada;

?>