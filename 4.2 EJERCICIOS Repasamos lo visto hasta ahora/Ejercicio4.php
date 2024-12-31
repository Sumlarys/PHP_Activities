<!-- Escribe un programa que cada vez que se ejecute genere un número aleatorio entre 1 y 10.
Acontinuación guarde en una matriz la tabla de multiplicar de dicho número. Obtén el valor
mínimo y máximo de la matriz generada.
NOTA: Para generar la matriz utiliza la función RANGE.-->
<?php
$numero = rand(1, 10); // Generar un número aleatorio entre 1 y 10
echo "Número aleatorio: $numero\n";

$indices = range(1, 10); // Crear un array del 1 al 10
$tabla = [];

foreach ($indices as $i) {
    $tabla[] = $numero * $i; // Generar la tabla de multiplicar
}

echo "Tabla de multiplicar:\n";
print_r($tabla);

$min = min($tabla); // Encontrar el valor mínimo
$max = max($tabla); // Encontrar el valor máximo

echo nl2br("\nValor mínimo: $min\n");
echo nl2br("Valor máximo: $max\n");
?>

