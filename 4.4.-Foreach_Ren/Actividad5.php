<!-- Calcular cuántos intercambiadores hay en total-->
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
    //Declaramos contadores.
    $ContadorTrue =0;
    $ContadorFalse =0;
    $ContadorTotal = 0;

    //Recorremos la matriz
    foreach ($estacionesMetroMadrid as $lineas => $estaciones) {
      foreach($estaciones as $estacion){
        //Si el intercambiador es true, se aplica los contadores pertinentes.
          if($estacion['intercambiador'] == true){
              $ContadorTrue++;
              $ContadorTotal++;
          }
        //Si el intercambiador es false, se aplica los contadores pertinentes.

          if($estacion['intercambiador'] == false){
            $ContadorFalse++;
            $ContadorTotal++;

          }
      }  
  }
  //Imprimimos los contadores por pantalla.
  echo nl2br("Hay $ContadorTotal intercambiadores totales\n $ContadorTrue en funcionamiento y $ContadorFalse inhabilitados\n");

 ?>