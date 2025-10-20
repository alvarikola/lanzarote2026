<?php

$idioma  = $_POST['idioma'];


setcookie("idioma", $idioma, time() + 3600); // Crea una cookie
if (isset($_COOKIE['idioma'])) {
    header("Location: bienvenida.php");
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Configuracion de idioma</title>
</head>
<body>
    <div class="container">
        <form action="configuracion_idioma.php" method="POST" >
            <div class="mb-3">
                <label for="idIdioma" class="form-label">Idioma preferido</label> <br>
                <input type="radio" name="idioma" value="1" id="idIdioma">Español
                <input type="radio" name="idioma" value="2" id="idIdioma">Inglés
                <input type="radio" name="idioma" value="3" id="idIdioma">Francés
            </div>
            <input type="submit" class="btn btn-primary" />
        </form>
    </div>
</body>
</html>