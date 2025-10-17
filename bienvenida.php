<?php
    $nombre = $_SESSION['usuario'];

    if($_SESSION == null) {
        header("Location: login.php");
    }
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <a href="configuracion_idioma.php">Configurar idioma</a>
</body>
</html>