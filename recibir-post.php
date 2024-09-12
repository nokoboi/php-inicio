<?php
include("includes/header.php");
echo"<h2>Aquí recibo los datos del formulario con POST</h2>";
if(isset($_POST['nombre'])){
    $nombre = trim($_POST['nombre']);
    echo''.$nombre.'';
}

if(isset($_POST['apellidos'])){
    echo''.$_POST['apellidos'].'';
}

include("includes/footer.php");