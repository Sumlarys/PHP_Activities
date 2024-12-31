<!--Hacer un código con bucles anidados de variables independientes, donde la variable del bucle
exterior ($i) tome valores numéricos entre 1 y 3, y la del bucle interior ($j) valores entre a y d.
Los resultados se deben ver de la siguiente forma:
Sentencia de la variable $i incluyendo el valor
Sentencia de la variable $j incluyendo el valor
Sentencia de la variable $j incluyendo el valor
…
Sentencia de la variable $i incluyendo el valor
Sentencia de la variable $j incluyendo el valor
Sentencia de la variable $j incluyendo el valor -->
<?php
for ($i = 1; $i <= 3; $i++) {
    echo nl2br("Sentencia de la variable \$i incluyendo el valor $i\n\n");
    foreach (['a', 'b', 'c', 'd'] as $j) {
        
        echo nl2br("\tSentencia de la variable \$j incluyendo el valor $j\n");
    }
    echo nl2br("\n");
}
?>
