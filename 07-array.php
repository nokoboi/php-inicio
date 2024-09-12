<?php
include("includes/header.php");

// Declaración de Arrays
$array = [1,2,3,4,5,6,7];
$productos = ['Coca-Cola','Fanta','Agua'];

// Ver los elementos de un array
echo'<pre>';
var_dump($productos);
echo'</pre>';

// Acceder a un elemento del array
echo $productos[1];
echo '<br>';

// Agregar elementos
$productos[3] = 'Casera';
echo'<pre>';
var_dump($productos);
echo'</pre>';   

// Agregar elementos al array al final
array_push($productos,'Zumo');

// Agregar elementos al principio
array_unshift($productos,'Cerveza');
echo'<pre>';
var_dump($productos);
echo'</pre>';

include("includes/footer.php");