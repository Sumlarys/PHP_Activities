<!--Dadas las siguientes tablas con nombre y edad de los alumnos de dos clases diferentes:
Clase A || Clase B
Nombre Edad || Nombre Edad
Juan 21 || Jaime 27
María 19 || Luisa 21
Pedro 24 || Aitor 33
Antonio 30 || Macarena 22
Carmen 24 || María 27
Carlos 26 || Pedro 28
Lucía 22 || Juan 24
- Crea dos arrays independientes para guardar los datos de cada una de las
tablasanteriores y muestra por pantalla la información de ambas.
- A continuación une ambas tablas en una sola y muestra los datos de esta nueva tabla.
-->
<?php
$claseA = [
    ["Nombre" => "Juan", "Edad" => 21],
    ["Nombre" => "María", "Edad" => 19],
    ["Nombre" => "Pedro", "Edad" => 24],
    ["Nombre" => "Antonio", "Edad" => 30],
    ["Nombre" => "Carmen", "Edad" => 24],
    ["Nombre" => "Carlos", "Edad" => 26],
    ["Nombre" => "Lucía", "Edad" => 22],
];

$claseB = [
    ["Nombre" => "Jaime", "Edad" => 27],
    ["Nombre" => "Luisa", "Edad" => 21],
    ["Nombre" => "Aitor", "Edad" => 33],
    ["Nombre" => "Macarena", "Edad" => 22],
    ["Nombre" => "María", "Edad" => 27],
    ["Nombre" => "Pedro", "Edad" => 28],
    ["Nombre" => "Juan", "Edad" => 24],
];

// Función para imprimir los datos en formato columnas para navegador
function imprimirTablaColumnas($titulo, $datos) {
    echo "<pre>"; // Usamos <pre> para mantener el formato de texto
    echo "$titulo<br>"; //str_pad añade padding en ambos lados a no ser que se especifique en el cuarto argumento
    echo str_pad("Nombre", 15) . str_pad("Edad", 5) . "<br>";
    echo str_repeat("-", 20) . "<br>";
    foreach ($datos as $fila) {
        echo str_pad($fila['Nombre'], 16) . str_pad($fila['Edad'],5) . "<br>";
    }
    echo "</pre><br>";
}

// Mostrar las tablas de las clases A y B
imprimirTablaColumnas("Clase A", $claseA);
imprimirTablaColumnas("Clase B", $claseB);

// Fusionar las tablas
$claseUnida = array_merge($claseA, $claseB);

// Mostrar la tabla fusionada
imprimirTablaColumnas("Clase Unida", $claseUnida);
?>
