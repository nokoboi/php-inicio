<?php
include("includes/header.php");

echo '<h2>Isset empty</h2>';
$usuarios = [];
$usuarios2 = ['Pepe','Eva','Tomás'];

$usuario = [
    'nombre'=> 'Pepe',
    'nivel'=> 2,
    'permisos'=> [
        'admin'=> true,
        'cliente'=> false
    ]
];

// Empty comprueba si hay un array vacio
var_dump(empty($usuarios));

// isset comprueba si está definida la variable o array
var_dump(isset($usuarios4));
var_dump(isset($usuario['nivel']));

if(isset($usuario['nivel'])){
    echo'El usuario tiene el nivel: '.$usuario['nivel'];
}else{
    echo 'El usuario no tiene nivel definido';
}
include("includes/footer.php");