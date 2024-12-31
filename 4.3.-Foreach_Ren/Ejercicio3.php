<!--Añadir una nueva comunidad y muestralos por pantalla-->
<?php 
$comunidades = [
    'Andalucía' => [
    'provincias' => ['Sevilla', 'Cádiz', 'Córdoba', 'Granada',
    'Málaga', 'Jaén', 'Huelva'],
    'capital' => ['Sevilla' => ['poblacion' => 742940,
    'informacion_adicional' => 'Capital histórica de al-Andalus.']],
    ],
    'Cataluña' => [
    'provincias' => ['Barcelona', 'Girona', 'Lleida', 'Tarragona'],
    'capital' => ['Barcelona' => ['poblacion' => 1620343,
    'informacion_adicional' => 'Ciudad cosmopolita y centro económico.']],
    ],
    'Castilla y León' => [
    'provincias' => ['Ávila', 'Burgos', 'León', 'Salamanca',
    'Segovia', 'Soria', 'Valladolid', 'Zamora'],
    'capital' => ['Valladolid' => ['poblacion' => 304875,
    'informacion_adicional' => 'Ciudad universitaria y cuna del
    castellano.']],
    ],
    'Galicia' => [
    'provincias' => ['A Coruña', 'Lugo', 'Ourense', 'Pontevedra'],
    'capital' => ['Santiago de Compostela' => ['poblacion' =>
    97185, 'informacion_adicional' => 'Ciudad histórica y sede del Camino
    de Santiago.']],
    ],
    'País Vasco' => [
    'provincias' => ['Álava', 'Guipúzcoa', 'Vizcaya'],
    'capital' => ['Vitoria-Gasteiz' => ['poblacion' => 252727,
    'informacion_adicional' => 'Capital del País Vasco y ciudad verde.']],
    ],
    ];

    //Añadimos dos comunidades.
    $comunidades['Madrid'] = [
        'provincias' => ['Madrid'],
        'capital' => ['Madrid' => ['poblacion' => number_format(3266126,0,",","."), 'informacion_adicional' => 'Capital de España y centro político.']],
    ];

    $comunidades['Murcia'] = [
        'provincias' => ['Murcia'],
        'capital' => ['Murcia' => ['poblacion' => number_format(459778,0,",","."), 'informacion_adional' => 'Achoooo pijo.']],
    ];
    
    // Mostrar todas las comunidades autónomas con sus provincias y capitales
    foreach ($comunidades as $nombre_comunidad => $datos) {
        echo nl2br("Comunidad Autónoma: $nombre_comunidad\n");
        echo nl2br("Provincias:\n");
        foreach ($datos['provincias'] as $provincia) {
            echo nl2br("- $provincia\n");
        }
        foreach ($datos['capital'] as $capital => $info) {
            echo nl2br("Capital: $capital (Población: {$info['poblacion']})\n");
            echo nl2br("Informacion adicional: ".$info['informacion_adicional']."\n");
        }
        echo nl2br("\n");
    }

?>