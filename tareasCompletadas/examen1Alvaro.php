<?php

// Solo dígitos, con una longitud mínima de 9 y máxima de 15 caracteres.
$correo  = $_POST['correo'];
$telefono   = $_POST['telefono'];
$nombre = $_POST['nombre'];

$patronCorreo = "/^[\w\-\.]+@([\w\-]+\.)+[a-zA-Z]{2,7}$/";
$patronTelefono = "/^[0-9]{9,15}$/";
$patronNombre = "/^[a-zA-Z]+[\w\-\.]{5,20}/";

// Comprobar email
if (preg_match($patronCorreo, $correo)) {
    $mensajeCorreo = "
        <div class=\"alert alert-primary\" role=\"alert\">
            Correo válido
        </div>
    ";
} else {
    $mensajeCorreo = "
            <div class=\"alert alert-danger\" role=\"alert\">
                Dirreción de correo (${correo}) inválida.
            </div>
        ";
}

//Comprobar telefono
if (preg_match($patronTelefono, $telefono)) {
    $mensajeTelefono = "
        <div class=\"alert alert-primary\" role=\"alert\">
            Teléfono válido
        </div>
    ";
} else {
    $mensajeTelefono = "
            <div class=\"alert alert-danger\" role=\"alert\">
                Número de teléfono (${telefono}) incorrecto.
            </div>
        ";
}

//Comprobar nombre
if (preg_match($patronNombre, $nombre)) {
    $mensajeNombre = "
        <div class=\"alert alert-primary\" role=\"alert\">
            Nombre válido
        </div>
    ";
} else {
    $mensajeNombre = "
            <div class=\"alert alert-danger\" role=\"alert\">
                Nombre de usuario (${nombre}) incorrecto.
            </div>
        ";
}

if (preg_match($patronCorreo, $correo) and preg_match($patronTelefono, $telefono) and preg_match($patronNombre, $nombre)) {
    $mensajeFinal = "
            <div class=\"alert alert-primary\" role=\"alert\">
                Confirmado el usuario.
                Hola ${usuario}
            </div>
        ";
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Álvaro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php echo $mensajeFinal; ?>
        <form action="examen1Alvaro.php" method="POST" >
            <div class="mb-3">
                <?php echo $mensajeCorreo; ?>
                <label for="idCorreo" class="form-label">Correo electrónico</label>
                <input type="text" name="correo" class="form-control" id="idCorreo" placeholder="Correo..">
            </div>
            <div class="mb-3">
                <?php echo $mensajeTelefono; ?>
                <label for="idTelefono" class="form-label">Número de teléfono</label>
                <input type="text" name="telefono" class="form-control" id="idTelefono" placeholder="Teléfono..">
            </div>
            <div class="mb-3">
                <?php echo $mensajeNombre; ?>
                <label for="idNombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="idNombre" placeholder="Nombre..">
            </div>
            <input type="submit" class="btn btn-primary" />
        </form>
            
    </div>
</body>
</html>