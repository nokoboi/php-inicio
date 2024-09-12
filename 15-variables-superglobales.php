<?php
// Para que sean tipos estrictos en las funciones, tiene dos valores 0 o 1
declare(strict_types=1);
include("includes/header.php");

/**
 * Son arrays asociativos predefinidos disponibles en todo el script de php
 */

/**
 * $_GET - contiene variables pasadas al script a traves de parametros en la url
 */

/**
 * $_POST - contiene valores pasadas a través de http post
 */

/**
 * $_REQUEST - contiene los valores del get, post y cookie
 */
/**
 * $_COOKIE - valores pasados a traves de http cookie
 */

/**
 * $_SESSION - valores disponibles para el script actual
 */

/**
 * $_SERVER - contiene informacion sobre el entorno del servidor y el script
 */

/**
 * $_ENV - contiene las variables de entorno disponibles en el script actual
 * la disponibilidad depenede de la configuracion del servidor
 */

//$path = $_ENV['PATH'];
if (isset($_ENV['PATH'])) {
    echo 'Path: ' . $_ENV['PATH'] . '<br>';
} else {
    echo 'no hay path<br>';
}

//Mostrar IP del usuario
$userIP = $_SERVER['REMOTE_ADDR'];
echo 'Tu IP es: ' . $userIP . '<br>';

// Nombre del servidor
$nombre_server = $_SERVER['SERVER_NAME'];
echo 'El nombre del servidor es: ' . $nombre_server . '';

echo '<ul>';
foreach ($_SERVER as $key => $value) {
    echo '<li>Clave: ' . $key . '</li>';
}
echo '</ul>';

include("includes/footer.php");