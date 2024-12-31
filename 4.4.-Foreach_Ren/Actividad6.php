<!--Crear un sistema de búsqueda avanzada para encontrar
intercambiadores por línea utilizando el siguiente formulario-->
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
    //Línea dada por el usuario
    $Linea10 = 'Línea 10';
    
    echo nl2br("En la línea ".$Linea10."\n están disponibles los siguientes intercambiadores: \n");
    //Recorremos la Matriz
    foreach ($estacionesMetroMadrid as $estacion => $estaciones) {
        if(array_key_exists($Linea10, $estacionesMetroMadrid)){ //Si la key con el dato dado por el usuario existe dentro del array pasado, se mete.
            foreach($estaciones as $estacion){
                if($estacion['intercambiador'] == true){//Imprime solo las estaciones con intercambiadores true.
                    echo nl2br("- ".$estacion['estacion']."\n");
                }
            }
            
        }
    }

?>