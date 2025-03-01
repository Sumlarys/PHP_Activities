<!-- Mostrar todas las capitales y sus poblaciones -->
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

    //Recorremos el array.
    echo nl2br("Listado de capitales y sus poblaciones:\n");
    foreach ($comunidades as $comunidad => $datos) { //Guardamos los subarrays en $datos.
        foreach ($datos['capital'] as $capital => $info) {//Ponemos como clave $capital y sus valores en $info
            echo nl2br("- Capital: $capital (Población: {$info['poblacion']})\n");
        }
    }
?>