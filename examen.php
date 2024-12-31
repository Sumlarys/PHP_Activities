<?php 
$lineasMetro = [
    [
        "linea" => "Línea 1",
        "longitud_km" => 23.9,
        "max_trenes" => 30,
        "paradas" => [
            ["nombre" => "Sol", "subidas" => 1200, "bajadas" => 1100, "transbordo" => true],
            ["nombre" => "Gran Vía", "subidas" => 950, "bajadas" => 1020, "transbordo" => true],
            ["nombre" => "Cuatro Caminos", "subidas" => 700, "bajadas" => 650, "transbordo" => false]
        ]
    ],
    [
        "linea" => "Línea 2",
        "longitud_km" => 14.5,
        "max_trenes" => 25,
        "paradas" => [
            ["nombre" => "Retiro", "subidas" => 800, "bajadas" => 750, "transbordo" => false],
            ["nombre" => "Goya", "subidas" => 1000, "bajadas" => 1200, "transbordo" => true],
            ["nombre" => "Ventas", "subidas" => 600, "bajadas" => 500, "transbordo" => false]
        ]
    ]
];

// Actividad 1.
echo nl2br("ACTIVIDAD 1: Mostrar información básica de las líneas de metro.\n");
echo nl2br("---------------------------------------------------------------------------------\n");

foreach ($lineasMetro as $linea) {  //Itera sobre el array $linea imprimiendo los datos básicos.
    echo nl2br("Línea: " . $linea['linea'] . ", Longitud: " . $linea['longitud_km'] . " km\n");
    echo nl2br("Total paradas: " . count($linea['paradas']) . "\n\n"); //Uso del método count(), para contar los elementos del array.
}

echo nl2br("\n");

//Actividad 2.
echo nl2br("ACTIVIDAD 2: Calcular el total de subidas y bajadas en todas las líneas.\n");
echo nl2br("---------------------------------------------------------------------------------\n");

$totalSubidasBajadas = []; //Creamos una variable que contendrá el total de tanto subidas como bajadas.
foreach ($lineasMetro as $linea) { //Iteramos el array e inicializamos $totalSubidas y $totalBajadas.
    $totalSubidas = 0;
    $totalBajadas = 0;
    foreach ($linea['paradas'] as $parada) { //Por cada "parada", si es subida incrementa $totalSubidas y si es bajada, $totalBajadas.
        $totalSubidas += $parada['subidas'];
        $totalBajadas += $parada['bajadas'];
    }
    $totalSubidasBajadas[$linea['linea']] = $totalSubidas + $totalBajadas; //Suma total de subidas y bajadas por línea.
    echo nl2br("Línea: " . $linea['linea'] . " - Total subidas: $totalSubidas, Total bajadas: $totalBajadas\n");
}
arsort($totalSubidasBajadas); //Utilizamos el método arsort() para ordenar el array.
echo nl2br("Línea con más subidas y bajadas: " . array_key_first($totalSubidasBajadas) . "\n");//Coge la clave del primer elemento del array que previamente hemos ordenado.

echo nl2br("\n");

//Actividad 3.
echo nl2br("ACTIVIDAD 3: Mostrar paradas donde se puede hacer trasbordo.\n");
echo nl2br("---------------------------------------------------------------------------------\n");

foreach ($lineasMetro as $linea) { //Iteramos sobre las líneas.
    echo nl2br("Línea: " . $linea['linea'] . " - Paradas con transbordo:\n");
    foreach ($linea['paradas'] as $parada) { //En el array, en la posición de 'paradas', si tiene trasbordo se imprime por pantalla.
        if ($parada['transbordo']) {
            echo nl2br("\t- " . $parada['nombre'] . "\n");
        }
    }
}

echo nl2br("\n");

//Actividad 4
echo nl2br("ACTIVIDAD 4: Ordenar las líneas de metro según su longitud.\n");
echo nl2br("---------------------------------------------------------------------------------\n");

//Método usort() para ordenar un array. De orden descendiente por el orden de las variables pasados como argumento.
usort($lineasMetro, function($a, $b) {
    return $b['longitud_km'] <=> $a['longitud_km'];
});

//Iterando el array $linea, imprime el array ordenado.
foreach ($lineasMetro as $linea) {
    echo nl2br("Línea: " . $linea['linea'] . " - Longitud: " . $linea['longitud_km'] . " km\n");
}

echo nl2br("\n");

//Actividad 5
echo nl2br("ACTIVIDAD 5: Crear un reporte tabular de las líneas y sus paradas.\n");
echo nl2br("---------------------------------------------------------------------------------\n");

foreach ($lineasMetro as $linea) { //Iteramos el array $linea.
    echo nl2br("Reporte de " . $linea['linea'] . "\n\n");

    //Inicializamos las variables que harán el conteo del total de subidas y bajadas.
    $totalSubidas = 0;
    $totalBajadas = 0;
    //Iteramos las paradas de la línea.
    foreach ($linea['paradas'] as $parada) {
        //Condicional terciario que imprime 'Si' o 'No', según sea true o false el argumento pasado.
        echo nl2br("Parada: " . $parada['nombre'] . ", Subidas: " . $parada['subidas'] . ", Bajadas: " . $parada['bajadas'] . ", Transbordo: " . ($parada['transbordo'] ? 'Sí' : 'No') . "\n");
        $totalSubidas += $parada['subidas'];
        $totalBajadas += $parada['bajadas'];
    }

    //Imprimimos los totales de subidas y bajadas.
    echo nl2br("Total subidas: $totalSubidas, Total bajadas: $totalBajadas\n\n");
}

echo nl2br("\n");

//Actividad 6
echo nl2br("ACTIVIDAD 6: Permitir buscar información sobre una parada específica.\n");
echo nl2br("---------------------------------------------------------------------------------\n");

$paradaBuscar = "Goya"; // Cambiar por el deseado.
foreach ($lineasMetro as $linea) { //Primera iteración sobre el array $línea.
    foreach ($linea['paradas'] as $parada) {//Segunda iteración sobre el array 'paradas', dentro de $línea.
        if ($parada['nombre'] === $paradaBuscar) {//Condicional que compara el string pasado con las paradas del array.
            //Si se cumple, imprime los datos de la parada.
            echo nl2br("Parada: $paradaBuscar\nLínea: " . $linea['linea'] . "\nSubidas: " . $parada['subidas'] . ", Bajadas: " . $parada['bajadas'] . ", Transbordo: " . ($parada['transbordo'] ? 'Sí' : 'No') . "\n");
        }
    }
}
echo nl2br("\n");

//Actividad 7
echo nl2br("ACTIVIDAD 7: Calcular y mostrar el promedio de personas que suben y bajan en cada línea\n");
echo nl2br("---------------------------------------------------------------------------------\n");

foreach ($lineasMetro as $linea) { //Primera iteración sobre $linea.

    //Inicializamos las variables.
    $totalSubidas = 0;
    $totalBajadas = 0;

    //Método count() que cuenta el número de elementos en un array.
    $numParadas = count($linea['paradas']);

    //Segundo iteración sobre el array 'paradas'. Por cada elemento, incrementa las subidas o bajadas respectivamente.
    foreach ($linea['paradas'] as $parada) {
        $totalSubidas += $parada['subidas'];
        $totalBajadas += $parada['bajadas'];
    }

    //Imprimimos por pantalla los resultados junto con el cálculo del promedio.
    echo nl2br("Línea: " . $linea['linea'] . " \n- Promedio subidas: " . number_format($totalSubidas / $numParadas,0,",",".") . "\n- Promedio bajadas: " . number_format($totalBajadas / $numParadas,0,",",".") . "\n");
}

echo nl2br("\n\n");

//Actividad 8
echo nl2br("ACTIVIDAD 8: Identificar la línea con mayor cantidad de personas (subias + bajadas)\n");
echo nl2br("---------------------------------------------------------------------------------\n");
//Inicializamos las variables.
$mayorAfluencia = null;
$lineaMayorAfluencia = null;

//Primera iteración sobre array $linea.
foreach ($lineasMetro as $linea) {
    $totalAfluencia = 0; //Inicialización de una variable que llevará el total de la afluencia por línea. Se resetea.
    //Segunda iteración sobre 'paradas'.
    foreach ($linea['paradas'] as $parada) {
        //Añadimos en la variable el total de subidas y bajadas.
        $totalAfluencia += $parada['subidas'] + $parada['bajadas'];
    }
    //Condicional que al entrar, reestructura el orden según la mayor afluencia hasta ahora.
    if ($mayorAfluencia === null || $totalAfluencia > $mayorAfluencia) {
        //Si $totalAfluencia es mayor que $mayorAfluencia, añade a la segunda el valor de la primera.
        $mayorAfluencia = $totalAfluencia;
        //La línea con la mayor afluencia es guardada en la variable.
        $lineaMayorAfluencia = $linea['linea'];
    }
    //Condicional que compara y recoge los datos de la linea con menor afluencia.
    if($totalAfluencia < $mayorAfluencia){
        $menorAfluencia = $totalAfluencia;
        $lineaMenorAfluencia = $linea['linea'];
    }
}
echo nl2br("Línea con mayor afluencia: $lineaMayorAfluencia - Afluencia total: $mayorAfluencia\n");
echo nl2br("Línea con menor afluencia: $lineaMenorAfluencia - Afluencia total: $menorAfluencia\n");

echo nl2br("\n");

//Actividad 9
echo nl2br("ACTIVIDAD 9: Calcular  cuántas paradas permiten transbordo en cada línea.\n");
echo nl2br("---------------------------------------------------------------------------------\n");

foreach ($lineasMetro as $linea) {//Primera iteración sobre $linea.
    $transbordos = 0;//Inicialización de variable.
    foreach ($linea['paradas'] as $parada) {//Segunda iteración sobre el array 'paradas'
        //Si parada devuelve true para el argumento transbordo, incrementa en 1 la variable.
        if ($parada['transbordo']) {
            $transbordos++;
        }
    }
    echo nl2br("Línea: " . $linea['linea'] . " - Paradas con transbordo: $transbordos\n");
}
echo nl2br("\n");

//Actividad 10
echo nl2br("ACTIVIDAD 10: Resumir toda la información en estadísticas globales.\n");
echo nl2br("---------------------------------------------------------------------------------\n");

//Inicialización de variables, uso del método count() para contar el número de elementos en un array.
$totalLineas = count($lineasMetro);
$totalParadas = 0;
$longitudes = [];
foreach ($lineasMetro as $linea) { //Primera iteración sobre $linea.
    //Mediante el uso de la variable count(), añadimos a $totalParadas la cantidad de paradas de cada linea.
    $totalParadas += count($linea['paradas']);
    $longitudes[] = $linea['longitud_km'];
}
//El uso de array_sum() devuelve la suma total del array pasado.
$promedioLongitud = array_sum($longitudes) / $totalLineas;
//Delaramos la línea más larga, el primero del array.
$lineaMasLarga = $lineasMetro[0]['linea'];
//Delaramos la línea más corta, la última clave del array.
$lineaMasCorta = $lineasMetro[array_key_last($lineasMetro)]['linea'];

echo nl2br("Total de líneas: $totalLineas\nTotal de paradas: $totalParadas\nPromedio de longitud: $promedioLongitud km\nLínea más larga: $lineaMasLarga\nLínea más corta: $lineaMasCorta\n");

?>