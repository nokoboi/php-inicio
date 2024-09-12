<?php
include("includes/header.php");

echo "<h2>Ejercicios</h2>";
/**
 * Crear un array con 8 numeros enteros
 * rcorrer el array y mostrarlo
 * ordenar el array y mostrarlo
 * mostrar su longitud
 * buscar algun elemtno
 * añadir valores al array mientras que sea el tamaño menor a 120
 * mostrar el array
 */

//  $numeros = [5,39,22,212,40,88,63,1];

//  // Recorrer el array y mostrarlo
//  for ($i = 0; $i < count($numeros); $i++) {
//     echo $numeros[$i].'<br>';
//  }

//  // Ordenar el array
//  echo '<p>Ordenar el array</p><br>';
//  sort($numeros);
//  for ($i = 0; $i < count($numeros); $i++) {
//     echo $numeros[$i].'<br>';
//  }

//  echo '<br>';
//  // Mostrar la longitud del array
//  echo 'La longitud del array es: '.count($numeros).'<br>';

//  // Buscar un elemento del array
//  $existe = in_array(1, $numeros);
//  if ($existe) {
//     echo 'El numero existe';
//  }else{
//     echo 'No está ese numero';
//  }

//  // añadir valores hasta que la longitud sea 120
//  $salir = false;
//  while (!$salir) {
//     if(count($numeros) <=120) {
//         array_push($numeros,44);
//     }else{
//         $salir = true;
//     }
//  }


//  for ($i = 0; $i < count($numeros); $i++) {
//     echo $numeros[$i].'<br>';
//  }


/**
 * Comprobar si una variable esta vacia
 * si está vacia rellenarla con texto en minuscula
 * mostrar por pantalla su contenido en mayuscula y en negrita
 */

// $palabra = '';
// echo $palabra;

// if (empty($palabra)) {
//     $palabra = 'yanoestoyvacia';
//     echo '<h4>Palabra vacía, rellenando a: </h4>' . $palabra;
// } else {
//     echo 'La palabra no está vacía';
// }
// echo '<h4>Palabra en mayúscula y negrita</h4>';
// $palabraN = strtoupper($palabra);
// echo '<b>' . $palabraN . '</b>';
// echo '<h4>Palabra en minúscula</h4>';
// echo strtolower($palabra);

/**
 * crear 4 variables: una de tipo string, int, array, booleano
 * mostrar por pantalla el tipo y valor de cada una
 */

// $vString = 'hola';
// $vInt = 4;
// $vBool = true;
// $vArray = [1, 2, 3, 4, 5];

// $variables = [$vString, $vInt, $vBool, $vArray];

// for ($i = 0; $i < count($variables); $i++) {
//     echo gettype($variables[$i]) . ' ' . $variables[$i];
//     echo '<br>';
// }

/**
 * crea un array con el contenido de la siguiente tabla
 * Accion      Aventura        Deportes
 * gta         assasins        fifa19
 * cod         crash           pes19
 * pubg        pop             motogp
 * Mostrar el contenido en una tabla de html
 */

$juegos = [
    'accion' => [
        'gta',
        'cod',
        'pubg'
    ],
    'aventura' => [
        'Assassins',
        'Crash',
        'Princ of persia',
    ],
    'deportes' => [
        'fifa19',
        'pes19',
        'motogp',
        'need for speed'
    ]
];

echo '<table class="tablita">';
echo '<thead>';
foreach ($juegos as $key => $value) {
    echo '<th>'.$key.'</th>';
};
echo '</thead>';
echo '<tbody>';

$max_length = max(array_map('count', $juegos));

for ($i = 0; $i < $max_length; $i++) {
    echo '<tr>';
    foreach ($juegos as $key => $value) {
        if (isset($value[$i])) {
            echo '<td>' . $value[$i] . '</td>';
        } else {
            echo '<td></td>'; 
        }
    }
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

include("includes/footer.php");