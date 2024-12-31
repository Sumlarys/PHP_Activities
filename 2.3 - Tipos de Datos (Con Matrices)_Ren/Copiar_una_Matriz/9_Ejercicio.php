<?php 
/**Crea una matriz y luego copia sus valores a otra variable.
Objetivo: Copiar matrices en PHP */

//Creamos la matriz
$matrizOriginal = [1,2,3];

//Creamos la matriz copia
$matrizCopia = $matrizOriginal;

//Añadimos un valor para diferenciar la original de la copia.
$matrizCopia[] = 10;

//Imprimimos ambas matrices.
echo"Matriz Original";
echo "<pre>";
print_r( $matrizOriginal );
echo "</pre>";
echo "Matriz Copia";
echo "<pre>";
print_r( $matrizCopia );
echo "</pre>";
?>