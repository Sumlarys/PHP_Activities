<!--Calcular la población total de cada comunidad y mostrarla en una tabla HTML-->
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
    //Creamos una variable para almacenar la suma
    $total = 0;

    //Recorremos la matriz hasta dar con la población, que iremos añadiendo a nuestra variable.
    foreach($comunidades as $comunidad => $datoComunidad){
        foreach($datoComunidad['capital'] as $capital => $datoCapital){
            $total += $datoCapital['poblacion'];
        }
    }

    //Imprimimos el resultado
    echo "Número total de poblacion entre todas las comunidades: ".number_format($total,0,",",".");

?>