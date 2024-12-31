<?php 
/**Crea una matriz con tres números y añade dos números más a la matriz.
 Objetivo: Añadir elementos a una matriz existente. */

 // Declaramos matriz con 3 numeros.
 $numeros = array(1, 2, 3);
 
 // Añadir dos números más a la matriz
 array_push($numeros, 4, 5);

 /**
  * Se puede añadir elementos a la matriz sin utilizar el método push.
  * $numeros[] = 4;
  * $numeros[] = 5;
  */
 
 // Imprimir la matriz. Utilizo la etiqueta <pre> para dar saltos de línea.
 echo"<pre>";
 print_r($numeros);
 echo "</pre>";
 ?>
 