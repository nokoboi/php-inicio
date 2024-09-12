<?php
// Para que sean tipos estrictos en las funciones, tiene dos valores 0 o 1
declare (strict_types= 1); 
include("includes/header.php");
include 'calculadora.php';

echo '<h2>Funciones</h2>';

/**
 * Tipos de datos:
 * int: entero
 * bool: booleano
 * string: cadena de texto
 * float: decimal
 * array: listas
 */



$resultado =restar(2,7);
echo $resultado;


include("includes/footer.php");