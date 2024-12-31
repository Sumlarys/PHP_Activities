<!--Evaluar expresiones con operadores lógicos
Usa operadores lógicos para determinar si un número 
está entre 10 y 20.-->

<?php 
//Declaramos las variables
$numeroMinimo = 10;
$numeroMaximo = 20;
$numero = 14;

//Mediante una condicion, comprobamos si $numero está entre los dos numeros
if ($numero >= $numeroMinimo && $numero <= $numeroMaximo) {
    echo"El número está entre el 10 y 20";
}else{
    echo "El numero no esta entre dichos margenes";
}
?>