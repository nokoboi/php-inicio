<?php
// Para que sean tipos estrictos en las funciones, tiene dos valores 0 o 1
declare (strict_types= 1); 
include("includes/header.php");

// JSON
/**
 * Formato ligero de intercambio de datos
 * se utiliza para transmitir datos entre un servidor y un cliente
 * es una colección de datos que van a pares clave:valor
 * se muestra en una lista
 * JavaScript, React, Angular, Vue, Android, C, Kotlin... entienden JSON y lo manejan
 */

 // Array asociativo
 $productos = [
    [
        'nombre' => 'libro entrañable',
        'precio'=> 23,
        'disponible'=> true,
        'oferta'=> true,
    ],
    [
        'nombre' => 'revista álbum',
        'precio'=> 12,
        'disponible'=> true,
        'oferta'=> false,
    ],
    [
        'nombre' => 'periodico',
        'precio'=> 2,
        'disponible'=> true,
        'oferta'=> false,
    ]
];

echo '<pre>';
var_dump($productos);
echo '</pre>';

// cuando hacemos una consulta a una base de datos podemos obtener los datos en un array asociativo
// ese array lo transformamos a json para mandarlo al cliente
$productos_json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($productos_json);

// convertir de json a array asociativo
$productos_array = json_decode($productos_json,true);
echo '<pre>';
var_dump($productos_array);
echo '</pre>';

include("includes/footer.php");