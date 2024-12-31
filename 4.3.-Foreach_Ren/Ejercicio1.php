<!--Muestra las provincias-->
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
    foreach ($comunidades as $comunidad => $datos) { //Almacena en $comunidad el primer contenido de $comunidades como clave, es un string.
        echo nl2br("Comunidades Autónoma: $comunidad\n"); //Imprime el nombre de la comunidad autónoma.
        echo nl2br("Provincias:\n");
        foreach ($datos['provincias'] as $provincia) { //$datos contiene el valor asociado a la clave $comunidad (provincias,capita,etc).
          echo  nl2br("- $provincia\n");
        }
        echo nl2br("\n");
    }
?>