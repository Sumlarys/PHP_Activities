<?php 
/**Crea una matriz multidimensional que contenga información de tres
estudiantes (nombre, edad, nota). Imprime el nombre del segundo estudiante.
Objetivo: Practicar la creación y acceso a matrices multidimensionales. */

//Declaramos la matriz multidimensional con datos de 3 estudiantes.

//Primer estudiante.
$estudiantes[0] ["nombre"] = "Laura";
$estudiantes[0] ["edad"]= 28;
$estudiantes[0] ["nota"] = 10;
//Segundo estudiante.
$estudiantes[1] ["nombre"] = "Javier";
$estudiantes[1] ["edad"] = 26;
$estudiantes[1] ["nota"] = 8;
//Tercer estudiante.
$estudiantes[2] ["nombre"] = "Clara";
$estudiantes[2] ["edad"] = 24;
$estudiantes[2] ["nota"] = 6;
//Imprimimos el nombre del segundo estudiante-
echo "El nombre del segundo estudiante de la lista es ".$estudiantes[1] ["nombre"];
?>