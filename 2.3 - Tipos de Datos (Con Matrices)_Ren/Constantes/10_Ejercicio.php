<?php 
/**Define una constante con el valor de la velocidad de la luz en metros por
segundo y úsala para mostrarla en pantalla.
 Objetivo: Definir y usar una constante. */

 //Definimos la constante. Tmb podemos usar la misma sintaxis que JavaScript.
 //const VELOCIDAD_LUZ = 299792458;
 define("VELOCIDAD_LUZ",299792458);

 //Mostramos por pantalla
 echo"La velocidad de la luz es " . VELOCIDAD_LUZ . " metros por segundo.";
?>