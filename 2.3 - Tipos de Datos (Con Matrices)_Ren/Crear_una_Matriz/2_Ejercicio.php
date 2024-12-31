<?php 
/**Crea una matriz asociativa para almacenar información de un coche
(marca, modelo, año) y luego imprime el valor del modelo. */

//Creamos una variable y almacenamos en el una matriz asociativa.
$coche = ["marca" => "Seat", "modelo" => "Ibiza", "año" => 2018];

//Imprimimos por pantalla el contenido de la matriz, 
//Uso la etiqueta <pre> para separarlos en diferentes líneas
printf("<pre>");
print_r($coche);
printf("<pre>");
?>