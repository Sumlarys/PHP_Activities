<?php 
/**Crea dos matrices, una con los nombres de tres frutas y otra con tres
verduras. Únelas en una sola matriz.
Objetivo: Unir matrices usando array_merge() */

//Declaramos dos matrices.
$cestaFrutas = ["Fresa", "Plátano", "Chirimoya"];
$cestaVerduras = ["Brocoli", "Lechuga", "Pimentón"];

//Unimos las matrices usando array_merge().
$cestaSaludable = array_merge($cestaFrutas,$cestaVerduras);

//Imprimos por pantalla la matriz resultante.
echo"<pre>";
print_r($cestaSaludable);
echo "</pre>";
?>