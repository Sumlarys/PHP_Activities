<!--Ejercicio 6
Generar una matriz con el conjunto de números primos que hay entre dos números
enterospositivos y mostrarlo en pantalla.
-->
<?php
//Función que averigua si es primo o no
function esPrimo($numero) {
    if ($numero <= 1) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

$inicio = 10; 
$fin = 50;    

$primos = []; 
for ($i = $inicio; $i <= $fin; $i++) {
    if (esPrimo($i)) {
        $primos[] = $i; //Utiliza append de PHP, si se cumple la condición, se añade al array
    }
}

echo nl2br("Números primos entre $inicio y $fin:\n");
print_r($primos);
?>
