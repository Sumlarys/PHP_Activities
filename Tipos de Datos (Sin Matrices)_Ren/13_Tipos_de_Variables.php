<?php 
//Declara variables de diferentes tipos (entero, flotante, booleano) y muestralas

//Declaracion de variables
$entero = 20;
$flotante = 5.5;
$booleano = $entero > $flotante;

//Mostrar por pantalla
echo "Numero entero: " . $entero . "\n".
     "Numero flotante: " . $flotante . "\n".
    "¿Es el entero mayor que el flotante? " . ($booleano ? 'true' : 'false');
?>