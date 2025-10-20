<?php

    session_start();

    $nombre = $_SESSION['usuario'];
    if($_SESSION == null) {
        header("Location: login.php");
    }

    $idioma = $_COOKIE['idioma'];

    $saludo = "";

    if($idioma == 3){
        $saludo = "Bienvenue";
    }
    else if($idioma == 2) {
        $saludo = "Welcome";
    }
    else {
        $saludo = "Bienvenido";
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
    <?php
        echo "$saludo $nombre";
    ?>
    <br>
    <a href="configuracion_idioma.php">Configurar idioma</a> <br>
    <button>Cerrar sesión</button>
</body>
</html>