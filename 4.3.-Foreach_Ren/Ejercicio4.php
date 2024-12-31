<!-- Dado el siguiente formulario, se debe mostrar por pantalla el resultado los datos solicitados por el usuario. -->
<?php
$comunidades = [
    'Andalucía' => [
        'provincias' => ['Sevilla', 'Cádiz', 'Córdoba', 'Granada', 'Málaga', 'Jaén', 'Huelva'],
        'capital' => ['Sevilla' => ['poblacion' => 742940, 'informacion_adicional' => 'Capital histórica de al-Andalus.']],
    ],
    'Cataluña' => [
        'provincias' => ['Barcelona', 'Girona', 'Lleida', 'Tarragona'],
        'capital' => ['Barcelona' => ['poblacion' => 1620343, 'informacion_adicional' => 'Ciudad cosmopolita y centro económico.']],
    ],
    'Castilla y León' => [
        'provincias' => ['Ávila', 'Burgos', 'León', 'Salamanca', 'Segovia', 'Soria', 'Valladolid', 'Zamora'],
        'capital' => ['Valladolid' => ['poblacion' => 304875, 'informacion_adicional' => 'Ciudad universitaria y cuna del castellano.']],
    ],
    'Galicia' => [
        'provincias' => ['A Coruña', 'Lugo', 'Ourense', 'Pontevedra'],
        'capital' => ['Santiago de Compostela' => ['poblacion' => 97185, 'informacion_adicional' => 'Ciudad histórica y sede del Camino de Santiago.']],
    ],
    'País Vasco' => [
        'provincias' => ['Álava', 'Guipúzcoa', 'Vizcaya'],
        'capital' => ['Vitoria-Gasteiz' => ['poblacion' => 252727, 'informacion_adicional' => 'Capital del País Vasco y ciudad verde.']],
    ],
];

// Provincia a buscar introducida por el usuario
$provinciaEscogida = "Lugo";

// Búsqueda de la comunidad
    foreach ($comunidades as $comunidad => $datosComunidad){
        foreach ($datosComunidad['provincias'] as $provincia){
            if ($provincia === $provinciaEscogida){ //Condicional que si la provincia escogida existe en una comunidad, entra al bloque.
                //Mostramos los datos relacionados con la provincia escogida.
                echo nl2br("Su provincia escogida está en: $comunidad\n");

                foreach($datosComunidad['capital'] as $capital => $datosCapital){
                    echo nl2br("Su capital es: $capital\n");
                    echo nl2br("Su poblacion es de: ".number_format($datosCapital['poblacion'],0,",",".")."\n");
                    echo nl2br("Información adicional: ".$datosCapital['informacion_adicional']);
                }
            } 
        }
    }
?>
