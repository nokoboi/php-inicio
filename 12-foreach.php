<?php
include("includes/header.php");

echo '<h2>Foreach</h2>';

$vehiculos = ['Coche', 'Avión', 'Barco', 'Moto'];

// para saber la longitud de elementos del array
echo count($vehiculos) . '<br>';
echo sizeof($vehiculos) .'<br>';

for ($i = 0; $i < count($vehiculos); $i++) {
    echo $vehiculos[$i] .'<br>';
}

foreach ($vehiculos as $vehiculo) {
    echo $vehiculo .'<br>';
}

$usuario = [
    'nombre'=> 'pepa',
    'nivel'=> '2',
    'permisos'=> 'algunos',
];

foreach ($usuario as $valor ) {
    echo $valor .'<br>';
}

foreach($usuario as $clave => $valor ) {
    echo $clave .'<br>';
}

$productos = [
    [
        'nombre' => 'libro',
        'precio'=> 23,
        'disponible'=> true,
        'oferta'=> true,
    ],
    [
        'nombre' => 'revista',
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

echo '<div class="articulos">';

foreach ($productos as $producto) {
    ?>
    <div class="producto">
        <p>Producto: <?php echo $producto['nombre'];?></p>
        <p>Precio: <?php echo $producto['precio'];?></p>
        <p>Disponible: <?php echo $producto['disponible'] ? 'En stock':'Fuera de stock' ?></p>
        <p>Oferta: <?php echo $producto['oferta'] ? 'Si':'No' ?></p>
    </div>    
    <?php
};
echo'</div>';



include("includes/footer.php");