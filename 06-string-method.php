<?php
include("includes/header.php");

echo "<h2>Métodos de string</h2>";

$texto = "El batracio amarillo";
$longitud = strlen($texto);
echo"El texto: $texto tiene una longitud de: $longitud";

// eliminar espacios al principio y al final de un string
$texto = trim($texto);

// Convertir a mayúsculas y a minúsculas
echo"<br>";
echo"Mayúsculas y minusculas";
echo"<br>";
echo strtolower($texto);
echo"<br>";
echo strtoupper($texto);

echo"<br>";
echo str_replace("amarillo","rojo", $texto);

echo"<br>";
// Comprobar si un string está dentro de otro, da la posicion
echo strpos($texto, 'amarillo');

include("includes/footer.php");