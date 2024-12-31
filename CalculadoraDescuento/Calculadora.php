<?php 
    //Definimos las constantes.
    define('LIMITE_CANTIDAD_ADICIONAL', 40);
    define('DESCUENTO_CANTIDAD_ADICIONAL', 0.05);
    define('IVA', 0.15);
    define('LIMITE_TOTAL_DESCUENTO_EXTRA', 80);
    define('DESCUENTO_TOTAL_EXTRA', 0.10);

    //Definimos un array con productos.
    $productos = [
        ['nombre' => 'Bolígrafo', 'precio' => 2, 'cantidad' => 20],
        ['nombre' => 'Rotulador', 'precio' => 3, 'cantidad' => 30],
        ['nombre' => 'Lápiz', 'precio' => 1.5, 'cantidad' => 10],
    ];

    //Cálculo inicial
    $totalBruto = 0;
    $cantidadTotal = 0;
    //Por cada objeto producto del array $productos. Realizamos los calculos pertientes.
    foreach ($productos as $producto) {
        $totalProducto = $producto['precio'] * $producto['cantidad'];
        $totalBruto += $totalProducto;
        $cantidadTotal += $producto['cantidad'];
    }

    // Calcular precio promedio
    $precioPromedio = $totalBruto / $cantidadTotal;

    //Descuentos
    if ($cantidadTotal > LIMITE_TOTAL_DESCUENTO_EXTRA) {
    // Aplica ambos descuentos
    $descuento = $totalBruto * DESCUENTO_CANTIDAD_ADICIONAL * DESCUENTO_TOTAL_EXTRA;
    } elseif ($cantidadTotal > LIMITE_CANTIDAD_ADICIONAL) {
    // Aplica solo el descuento adicional por cantidad
    $descuento = $totalBruto * DESCUENTO_CANTIDAD_ADICIONAL;
    } else {
    // No se aplica ningún descuento
    $descuento = 0;
    }

    $totalConDescuento = $totalBruto - $descuento;
    
    //Calcular IVA
    $iva = $totalConDescuento * IVA;
    $totalConIva = $totalConDescuento + $iva;

    //Determinar si la cantidad total es par o impar.
    $esPar = ($cantidadTotal % 2 == 0)? 'Par' : 'Impar';

    //Determinar promoción especial
    $promocionEspecial = ($totalConIva > 700 || $cantidadTotal > 50) ? "Recibes un producto gratuito" : "No aplicable";
    
    //Resumen
    echo nl2br("<h3>Resumen de la compra:\n</h3>");
    foreach ($productos as $producto) {
        echo nl2br("Producto: {$producto['nombre']}
        - Precio: ".number_format($producto['precio'],2, ',', '.') ."€\n". 
        " - Cantidad: {$producto['cantidad']} \n");
    }

    echo nl2br("\n <h3>Totales y descuentos aplicado</h3> ");
    echo nl2br("Total sin descuento: " . number_format($totalBruto, 2, ',', '.') . "€\n");
    echo nl2br("Descuento: " . number_format($descuento,2,',','.') . "€\n");
    echo nl2br("Total con descuento: " . number_format($totalConDescuento,2,',','.') . "€\n");
    echo nl2br("IVA: " . number_format($iva,2,',','.') . "€\n");
    echo nl2br("Total con IVA: " . number_format($totalConIva,2,',','.') . "€\n");
    echo nl2br("Cantidad total de productos: $cantidadTotal ($esPar)\n");
    echo nl2br("Precio promedio por producto: " . number_format($precioPromedio,2,',','.') . "€\n");
    echo nl2br("Promoción Especial: $promocionEspecial")
?>