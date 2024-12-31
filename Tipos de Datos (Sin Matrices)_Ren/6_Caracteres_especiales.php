<?php
/**
 * Usa caracteres especiales como saltos de línea, tabulaciones 
 * o barras invertidas dentro de una cadena.
 */

// Cadena con caracteres especiales
$cadena = "1. Tabulación:\tElemento 1\n" .         // Tabulación
          "2. Barra invertida: \\\\ (doble barra)\n" . // Barra invertida
          "3. Salto de línea dentro de la cadena:\n" . // Salto de línea
          "Este texto está en una nueva línea.";

// Mostrar la cadena
echo $cadena;
?>
