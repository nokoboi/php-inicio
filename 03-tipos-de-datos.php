<?php
include("includes/header.php");

echo '<h2>Tipos de datos</h2>';

// Boolean
$isAthorized = false;
echo '<p>'.$isAthorized.'</p>';
var_dump( $isAthorized );

// Enteros
$numero = 200;
echo '<p>El numero es: '.$numero.' y es un entero</p>';

// Float
$decimal = 3.4;
var_dump( $decimal );
echo '<br>';

// Arrays
$array = [1,2,3,4,5,6,7];
$array2 = array('Fresa','Piña','Melocotón');

var_dump( $array );
echo '<br>';
var_dump( $array2 );

include("includes/footer.php");