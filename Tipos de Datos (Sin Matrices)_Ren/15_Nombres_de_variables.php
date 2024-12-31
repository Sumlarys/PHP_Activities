<?php
/**
 * Declara variables con nombres significativos y 
 * utiliza buenas prácticas para nombrarlas.
 */

// Declaración de variables con nombres significativos
$usuarioNombre = "Ren";                  
$usuarioEdad = 28;                         
$usuarioAlturaEnMetros = 1.75;            
$esUsuarioActivo = true;                    

// Mostrar las variables
echo "Nombre del usuario: " . $usuarioNombre . "\n";
echo "Edad del usuario: " . $usuarioEdad . "\n";
echo "Altura del usuario: " . $usuarioAlturaEnMetros . " m\n";
echo "El usuario está activo: " . ($esUsuarioActivo ? 'true' : 'false') . "\n";
?>
