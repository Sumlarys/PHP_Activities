<?php
$estacionesMetroMadrid = [
    'Línea 1' => [
        ['estacion' => 'Sol', 'intercambiador' => true],
        ['estacion' => 'Gran Vía', 'intercambiador' => false],
        ['estacion' => 'Tribunal', 'intercambiador' => false],
    ],
    'Línea 2' => [
        ['estacion' => 'Cuatro Caminos', 'intercambiador' => true],
        ['estacion' => 'La Elipa', 'intercambiador' => false],
        ['estacion' => 'Ventas', 'intercambiador' => false],
    ],
    'Línea 3' => [
        ['estacion' => 'Villaverde Alto', 'intercambiador' => false],
        ['estacion' => 'Sierra de Guadalupe', 'intercambiador' => true],
        ['estacion' => 'Emilia Pardo Bazán', 'intercambiador' => false],
    ],
    'Línea 10' => [
        ['estacion' => 'Nuevo Ministerios', 'intercambiador' => true],
        ['estacion' => 'Chamartín', 'intercambiador' => true],
        ['estacion' => 'Berruguete', 'intercambiador' => false],
    ]
];
//Recorremos la matriz.
foreach ($estacionesMetroMadrid as $linea => $estaciones) {
    echo nl2br("<h2>$linea</h2>");
    foreach ($estaciones as $estacion) {
        $estadoIntercambiador = $estacion['intercambiador'] ? 'Sí' : 'No'; //Si el intercambiador es true, devuelve 'Sí'. Y 'No' en su viceversa.
        echo nl2br($estacion['estacion'] ."- Intercambiador: $estadoIntercambiador\n");
    }
}
?>
