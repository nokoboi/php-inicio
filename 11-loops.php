<?php
include("includes/header.php");

echo '<h2>Loops</h2>';
// For
for ($i=0; $i <= 10; $i++) { 
    echo $i;
    echo '<br>';
}

// While
$i = 0;
while( $i <= 10) {
    echo $i;
    $i++;
}

// do-while
$i = 0;
do{
    echo $i;
    $i++;
}while( $i <= 10);


echo '<br>';
// Imprimir n numeros si n es multiplo de 3 n- Fizz
// n es multiplo de 5 - n buzz
// si n es multiplo de 3 y de 5 imprimir fizz buzz
// for ($i = $start; $i <= $end; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo "FizzBuzz ";
//     } elseif ($i % 3 == 0) {
//         echo "Fizz ";
//     } elseif ($i % 5 == 0) {
//         echo "Buzz ";
//     } else {
//         echo $i . " ";
//     }
// }

function fizzBuzz($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        $salida = '';
        if($i % 3 === 0) $salida .= 'FIZZ';
        if($i % 5 === 0) $salida .= 'BUZZ';

        echo $salida === '' ? $i : "$i $salida";
        echo '<br>';
    }
}

fizzBuzz(1,50);



include("includes/footer.php");