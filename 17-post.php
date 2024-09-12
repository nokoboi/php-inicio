<?php
// Para que sean tipos estrictos en las funciones, tiene dos valores 0 o 1
declare(strict_types=1);
include("includes/header.php");
?>
<h2>Formulario con POST</h2>

<form action="recibir-post.php" method="POST">
    <div class="campoForm">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Tu nombre aquí...">
    </div>
    <div class="campoForm">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" placeholder="Tus apellidos...">
    </div>
    <div class="campoForm">
        <input type="submit" value="Enviar datos">
    </div>
</form>

<?php
include("includes/footer.php");