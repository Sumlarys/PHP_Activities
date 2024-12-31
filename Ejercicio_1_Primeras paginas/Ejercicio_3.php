<?php
// Generar valores aleatorios para rojo, verde y azul
$rojo = rand(0, 255);
$verde = rand(0, 255);
$azul = rand(0, 255);

// Crear el código de color RGB
$codigoColor = "rgb($rojo, $verde, $azul)";
?>

<html>
    <head>
        <style>
            body {
                background-color: <?php echo $codigoColor; ?>;
            }
        </style>
    </head>
    <body>
        <h1>El código de color RGB es: <?php echo $codigoColor; ?></h1>
    </body>
</html>
