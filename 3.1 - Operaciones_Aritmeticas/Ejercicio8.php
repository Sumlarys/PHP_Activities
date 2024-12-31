<!--Formatear un número con separador de miles y
decimales. Usa number_format() para mostrar un número con 
separador de miles y 3 decimales -->


<?php 
//Declaramos el numero.
$numero = 1000;

//Usamos la nomenclatura numérica acostumbrada
echo number_format($numero,3,",",".");
?>