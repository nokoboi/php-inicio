<?php
include("includes/header.php");

echo '<h2>Isset empty</h2>';
// in_array - busca elementos en un array, comprobar si existe
$frutas = ['Fresa','Piña','Pera'];
$existe = in_array('Pera', $frutas);

if ($existe) {
    echo'Tenemos peras';
}

if($existe){
    echo 'hola que tal';
}elseif(!$existe){
    echo 'no hay';
}

// Ordenar los elementos de menor a mayor
sort($frutas);
echo '<pre>';
var_dump($frutas);
echo '</pre>';

// Ordena de mayor a menor
rsort($frutas);
echo '<pre>';
var_dump($frutas);
echo '</pre>';

$usuario = [
    'nombre'=> 'pepe',
    'nivel'=> 'inicial',
    'permisos'=> 'algunos',
];

// asort es para arrays asociativos arsort 
asort($usuario);
echo '<pre>';
var_dump($usuario);
echo '</pre>';

// para ordenar por la clave ksort y krsort
ksort($usuario);
echo '<pre>';
var_dump($usuario);
echo '</pre>';



include("includes/footer.php");