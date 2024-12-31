<!--Usando el siguiente formulario, se pide crear un sistema de búsqueda avanzado que permita 
buscar por nombre de comunidad, provincia o capital, y mostrar resultados relevantes-->
<?php 
$comunidades = [
    'Andalucía' => [
        'provincias' => ['Sevilla', 'Cádiz', 'Córdoba', 'Granada', 'Málaga', 'Jaén', 'Huelva'],
        'capital' => ['Sevilla' => [
            'poblacion' => 742940,
            'informacion_adicional' => 'Capital histórica de al-Andalus.'
        ]],
    ],
    'Cataluña' => [
        'provincias' => ['Barcelona', 'Girona', 'Lleida', 'Tarragona'],
        'capital' => ['Barcelona' => [
            'poblacion' => 1620343,
            'informacion_adicional' => 'Ciudad cosmopolita y centro económico.'
        ]],
    ],
    'Castilla y León' => [
        'provincias' => ['Ávila', 'Burgos', 'León', 'Salamanca', 'Segovia', 'Soria', 'Valladolid', 'Zamora'],
        'capital' => ['Valladolid' => [
            'poblacion' => 304875,
            'informacion_adicional' => 'Ciudad universitaria y cuna del castellano.'
        ]],
    ],
    'Galicia' => [
        'provincias' => ['A Coruña', 'Lugo', 'Ourense', 'Pontevedra'],
        'capital' => ['Santiago de Compostela' => [
            'poblacion' => 97185,
            'informacion_adicional' => 'Ciudad histórica y sede del Camino de Santiago.'
        ]],
    ],
    'País Vasco' => [
        'provincias' => ['Álava', 'Guipúzcoa', 'Vizcaya'],
        'capital' => ['Vitoria-Gasteiz' => [
            'poblacion' => 252727,
            'informacion_adicional' => 'Capital del País Vasco y ciudad verde.'
        ]],
    ],
];

// Comunidad a buscar introducida por el usuario
$comunidadEscogida = "País Vasco";

// Búsqueda por comunidad dada
if (array_key_exists($comunidadEscogida, $comunidades)) {
    echo nl2br("Su comunidad escogida es: $comunidadEscogida\n\n");

    $datosComunidad = $comunidades[$comunidadEscogida];

    // Mostrar provincias
    echo nl2br("Provincias:\n");
    foreach ($datosComunidad['provincias'] as $provincia) {
        echo nl2br("- $provincia\n");
    }

    // Obtener y mostrar capital usando foreach
    foreach ($datosComunidad['capital'] as $nombreCapital => $infoCapital) {
        echo nl2br("\nSu capital es: $nombreCapital\n");
        echo nl2br("Su población es de: " . number_format($infoCapital['poblacion'], 0, ",", ".") . "\n");
        echo nl2br("Información adicional: " . $infoCapital['informacion_adicional'] . "\n");
    }
} else {
    echo nl2br("La comunidad \"$comunidadEscogida\" no se encuentra en la base de datos.\n");
}

    echo nl2br("---------------------------------------------------\n");

    // Provincia a buscar introducida por el usuario
    $provinciaEscogida = "Lugo";
    //Búsqueda por provincia dada. 
    foreach ($comunidades as $comunidad => $datosComunidad){
        if (in_array($provinciaEscogida, $datosComunidad['provincias'])){ //Condicional que si la provincia escogida existe en una comunidad, entra al bloque.
            //Mostramos los datos relacionados con la provincia escogida.
            echo nl2br("Su provincia escogida está en: $comunidad\n");

            foreach($datosComunidad['capital'] as $capital => $datosCapital){
                echo nl2br("Su capital es: $capital\n");
                echo nl2br("Su poblacion es de: ".number_format($datosCapital['poblacion'],0,",",".")."\n");
                echo nl2br("Información adicional: ".$datosCapital['informacion_adicional']."\n");
            }
        } 
    }
    echo nl2br("---------------------------------------------------\n");

   // Capital a buscar
    $capitalEscogida = "Barcelona";
    $encontrada = false;
    foreach ($comunidades as $comunidad => $datosComunidad) {
        if (array_key_exists($capitalEscogida, $datosComunidad['capital'])) {
            $encontrada = true;
            echo nl2br("La capital \"$capitalEscogida\" pertenece a la comunidad: $comunidad\n");
            $infoCapital = $datosComunidad['capital'][$capitalEscogida]; //Busca la clave pasada en el array y devuelve su valor.
            echo nl2br("Población: " . number_format($infoCapital['poblacion'], 0, ",", ".") . "\n");
            echo nl2br("Información adicional: " . $infoCapital['informacion_adicional'] . "\n");
        }
    }
    if (!$encontrada) {
        echo nl2br("La capital \"$capitalEscogida\" no se encuentra en la base de datos.\n");
    }
?>