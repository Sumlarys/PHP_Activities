<!--Escriba un programa que muestre una secuencia aleatoria de N bits y su secuencia
complementaria. -->
<?php
// Función para generar una secuencia aleatoria de N bits
function generarBitsAleatorios($n) {
    $bits = [];
    for ($i = 0; $i < $n; $i++) {
        $bits[] = rand(0, 1); // Genera un bit aleatorio (0 o 1)
    }
    return $bits;
}

// Función para generar la secuencia complementaria
function generarComplemento($bits) {
    $complemento = [];
    foreach ($bits as $bit) {
        $complemento[] = $bit === 0 ? 1 : 0; // Cambiar 0 por 1 y 1 por 0
    }
    return $complemento;
}

// Generar secuencia de bits y su complemento
$n = 10; // Número de bits
$bits = generarBitsAleatorios($n);
$complemento = generarComplemento($bits);

// Mostrar los resultados
echo nl2br("Secuencia de bits aleatoria: ");
foreach ($bits as $bit) {
    echo $bit; // Mostrar cada bit sin espacios
}
echo nl2br("\nSecuencia complementaria: ");

foreach ($complemento as $bit) {
    echo $bit; // Mostrar cada bit complementario sin espacios
}
echo "\n";
?>
