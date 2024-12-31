<!--Ejercicio 3
Crear un código para calcular el factorial de un número, usando la función FOR-->
<?php
$numero = 10; 
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de $numero es $factorial\n";
?>
