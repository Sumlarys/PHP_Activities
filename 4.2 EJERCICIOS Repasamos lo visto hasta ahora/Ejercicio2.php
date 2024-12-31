<!--Ejercicio 2
Hacer un código con bucles anidados de variables dependientes que simule lo siguiente:
- Tienes 2 dados
- Tiras el primero.
- Tiras el segundo tantas veces como el valor obtenido del dado 1.
- Vuelves a tirar el primer dado y repetimos la operación.
- El primer dado, lo tiramos 3 veces.
Mostrar los datos de la siguiente manera:
Sentencia del primer dado incluyendo el valor en la primera tirada
Sentencia del segundo dado incluyendo el valor
Sentencia delsegundo dado incluyendo el valor
…
Sentencia del primer dado incluyendo el valor en la segunda tirada
Sentencia del segundo dado incluyendo el valor
Sentencia delsegundo dado incluyendo el valor
…
Sentencia del primer dado incluyendo el valor en la segunda tirada
Sentencia del segundo dado incluyendo el valor
Sentencia delsegundo dado incluyendo el valor
…
 -->

 <?php
for ($tirada1 = 1; $tirada1 <= 3; $tirada1++) {
    $dado1 = rand(1, 6);
    echo "Sentencia del primer dado incluyendo el valor en la tirada $tirada1: $dado1\n";
    for ($tirada2 = 1; $tirada2 <= $dado1; $tirada2++) {
        $dado2 = rand(1, 6);
        echo "<pre>";
        echo "Sentencia del segundo dado incluyendo el valor: $dado2\n";
        echo "</pre>";
    }
}
?>
