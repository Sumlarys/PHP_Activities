<?php 
//Genera valores aleatorios para el emoticono
    $emoticono = rand(128512, 128586);
    $azul = "blue";
?>

<html>
<!--Mostramos un titulo seguido del resultado de los valores aleatorios dichos -->
    <head>
        <h1>Tu mood del día de hoy!</h1>
        <style>
            body {
                background-color: <?php echo $azul; ?>;
            }
        </style>
        <body>
            <h3>El emoji que te ha tocado es: <?php echo "&#".$emoticono?></h3>
        </body>
    </head>
</html>