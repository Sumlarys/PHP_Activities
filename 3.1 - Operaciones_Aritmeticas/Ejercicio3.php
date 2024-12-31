<!--Pre-incremento y post-incremento
Crea un script que muestre la diferencia 
entre el pre-incremento y el post-incremento-->ç
<?php 
//Declaramos los numeros
$primerNumero = 1;
$segundoNumero = 1;
//Imprimimos por pantalla los ejemplos
echo"Pre-Incremento: ".++$primerNumero.", Devuelve el valor y después, añade uno más a su valor".nl2br("\n");
echo"Post-Incremento: ".$segundoNumero++.", Añade primero el valor y después lo devuelve"
?>