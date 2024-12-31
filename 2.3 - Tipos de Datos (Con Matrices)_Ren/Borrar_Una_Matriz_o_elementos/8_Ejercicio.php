<?php 
/**
 *  Crea una matriz con cinco números y elimina el tercer número usando
 *  unset().
 *  Objetivo: Eliminar elementos de una matriz.
 */

 //Creando una matriz con numeros
 $numeros = [1,2,3,4,5];

 //Imprimiendo la matriz
 echo "<pre>";
 print_r($numeros);
 echo "</pre>";

 //Eliminando el tercer numero de la matriz
 unset($numeros[2]);

 //Imprimiendo la matriz con el cambio
 echo "<pre>";
 print_r($numeros);
 echo "</pre>";
?>