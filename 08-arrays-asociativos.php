<?php
include("includes/header.php");

echo '<h2>Arrays asociativos</h2>';
// Los arrays asociativos son muy similares a los objetos en JS

$usuario = [
    'nombre'=> 'Pepe',
    'nivel'=> 2,
    'permisos'=> [
        'admin'=> true,
        'cliente'=> false
    ]
];

$usuario['id'] = 23;
//$usuario.array_unshift($usuario,['id'=>2]);

echo'<pre>';
var_dump($usuario);
echo'</pre>';

echo $usuario['permisos']['admin'];

include("includes/footer.php");