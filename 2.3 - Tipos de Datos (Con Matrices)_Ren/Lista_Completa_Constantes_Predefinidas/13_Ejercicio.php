<?php 
/**Crea un script que use get_defined_constants() para mostrar todas
las constantes predefinidas disponibles en tu entorno PHP.
Objetivo: Explorar todas las constantes predefinidas en PHP */

$listaConstantes = get_defined_constants();

//Imprimimos la lista de constantes del sistema.
echo "<pre>";
print_r($listaConstantes);
echo "</pre>";
?>