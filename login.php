<?php

session_start();

$usuario  = $_POST['nombre'];

$_SESSION['usuario'] = $usuario;

if ($_SESSION != null) {
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
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST" >
            <div class="mb-3">
                <label for="idNombre" class="form-label">Nombre de usuario</label>
                <input type="text" name="nombre" class="form-control" id="idNombre" placeholder="Nombre">
            </div>
            <input type="submit" class="btn btn-primary" />
        </form>
    </div>
</body>
</html>