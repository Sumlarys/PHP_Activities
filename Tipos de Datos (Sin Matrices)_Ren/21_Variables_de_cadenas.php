<?php
/**
 * Declara una variable de cadena y manipúlala (mayúsculas, minúsculas).
 */
// Declaración de una variable de cadena
$cadena = "hola, me llamo ren!";

// Convertir la cadena a mayúsculas
$cadenaMayusculas = strtoupper($cadena);

// Convertir la cadena a minúsculas
$cadenaMinusculas = strtolower($cadena);

// Mostrar la longitud de la cadena
$longitudCadena = strlen($cadena);

// Convertir solo la primera letra de cada palabra a mayúscula
$cadenaTitulo = ucwords($cadena);

// Convertir solo la primera letra a mayúscula
$cadenaPrimeraMayuscula = ucfirst($cadenaMinusculas);

// Mostrar resultados
echo "Cadena original: $cadena\n";
echo "En mayúsculas: $cadenaMayusculas\n";
echo "En minúsculas: $cadenaMinusculas\n";
echo "Longitud de la cadena: $longitudCadena caracteres\n";
echo "En formato título: $cadenaTitulo\n";
echo "Primera letra en mayúscula: $cadenaPrimeraMayuscula\n";
?>