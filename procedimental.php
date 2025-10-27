<?php

// conectar a la base de datos
$servidor = "localhost";
$usuario = "lanzarote";
$contraseña = "lanza.pass";
$base_datos = "gestion_usuarios";
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_datos);
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa <br>";

//recoger datos del formulario
//$nombre  = $POST['nombre'];
//$email  = $POST['email'];
//$edad  = $POST['edad'];



//mostrar datos
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] .
    "<br>";
}
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

//insertar usuarios
function insertarUsuario($conexion, $nombre, $email, $edad) {
    $sql = "INSERT INTO usuarios (nombre, email, edad) VALUES ('$nombre', '$email', '$edad')";
    if (mysqli_query($conexion, $sql)) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
}

// Cuando se pulse el botón
// if (isset($_POST['insertar'])) {
//     $nombre = $_POST['nombre'];
//     $email = $_POST['email'];
//     $edad = $_POST['edad'];

//     insertarUsuario($conexion, $nombre, $email, $edad);
// }
mysqli_close($conexion);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <form action="procedimental.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad">
        </div>
        <button type="submit" class="btn btn-primary" name="insertar">Insertar usuario</button>
    </form>
</body>
</html>
