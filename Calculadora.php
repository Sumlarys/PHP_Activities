<?php 
    //Declaración de variables.

    //Convierte en mayúsculas el String recibido
    $recibo = strtoupper("recibo");//String
    $nombreRosa = "Rosas";
    $nombreOrquidea = "Orquidea";
    $precioRosa = 3.55; //float
    $precioOrquidea = 4.1;
    $cantidadRosa = 20; //int
    $cantidadOrquidea = 13;
    $descuentoJoven = 0.1;
    $precioTotal = ($precioOrquidea * $cantidadOrquidea) + ($precioRosa * $cantidadRosa);
    $propina = 0.90; //Boolean

    //Mostrar los datos de precio, cantidades y total de cada producto por pantalla.
  
    echo "$recibo: \n".
        $nombreRosa. " $precioRosa". "€" ." * ". $cantidadRosa." unidades = " . number_format($precioRosa*$cantidadRosa,2)."€\n".
        $nombreOrquidea. " $precioOrquidea". "€" ." * ". $cantidadOrquidea." unidades = " . number_format($precioOrquidea*$cantidadOrquidea,2)."€\n" ;

        //Mostrar el precio total  bruto y con descuento por pantalla.

    echo "Precio en bruto = $precioTotal \n".   //Number_format controla el formato del numero, siendo FLOAT el primer parámetro y entero 
                                                //el siguiente parámetro que indica la cantidad de decimales permitidas.
        "Precio con descuento = ". $precioTotal - number_format($precioTotal*$descuentoJoven, 2);  
        
        //Condición ternaria
    echo "¿Desea añadir una propina?\n".($propina?
    "Pues su precio final es de : ". $propina + $precioTotal - number_format($precioTotal*$descuentoJoven, 2)
    :"Su precio final es de: ".$precioTotal - number_format($precioTotal*$descuentoJoven, 2));
?>

