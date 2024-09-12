<?php
include("includes/header.php");

echo"<h2>Aquí recibo los datos del formulario</h2>";
if(isset($_GET['nombre'])){
    $nombre = trim($_GET['nombre']);
    echo''.$nombre.'';
}

if(isset($_GET['apellidos'])){
    echo''.$_GET['apellidos'].'';
}


include("includes/footer.php");