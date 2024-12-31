<!--Buscar estaciones por nombre y mostrar si es un intercambiador o no
-->
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
    //Estación pasada como dato.
    $nombre = 'Nuevo Ministerios';

    //Recorremos la matriz
    foreach ($estacionesMetroMadrid as $lineas => $estaciones) {
        foreach($estaciones as $estacion){
            if($estacion['estacion'] === $nombre){ //Si contienen el mismo dato, entra en la condicional.
                echo nl2br("<h2>$lineas</h2>");
                $estadoIntercambiador = $estacion['intercambiador'] ? 'Sí' : 'No'; //Si el intercambiador es true, devuelve 'Sí'. Y 'No' en su viceversa.
                echo nl2br($estacion['estacion'] ."- Intercambiador: $estadoIntercambiador\n");
            }
        }
    }
?>