<?php

// require "includes/peliculas.php";


$tipos_categoria = [
    'F' => 'Fantasía',
    'CF' => 'Ciencia Ficción',
    'C' => 'Comedia',
    'A' => 'Acción',
    'S' => 'Slasher'
];

$genero  = $GET['generos'];

$peliculas = [
    [
        "titulo" => "El Señor de los Anillos: La Comunidad del Anillo",
        "director" => "Peter Jackson",
        "anio" => 2001,
        "genero" => "F",
        "poster" => "imagenes/señorAnillosposter.jpg"
    ],
    [
        "titulo" => "Inception",
        "director" => "Christopher Nolan",
        "anio" => 2010,
        "genero" => "CF",
        "poster" => "imagenes/inceptionposter.jpg"
    ],
    [
        "titulo" => "Cars",
        "director" => "John Lasseter",
        "anio" => 2006,
        "genero" => "C",
        "poster" => "imagenes/carsposter.webp"
    ],
    [
        "titulo" => "The Amazing Spider-Man",
        "director" => "Marc Webb",
        "anio" => 2012,
        "genero" => "A",
        "poster" => "imagenes/spidermanposter.jpg"
    ],
    [
        "titulo" => "Scream",
        "director" => "Wes Craven",
        "anio" => 1996,
        "genero" => "S",
        "poster" => "imagenes/screamposter.webp"    
    ],
    [
        "titulo" => "Jurassic Park",
        "director" => "Steven Spielberg",
        "anio" => 1993,
        "genero" => "CF",
        "poster" => "imagenes/jurassicposter.jpg"
    ],
];
$listado_tarjetas_peliculas = '';
foreach($peliculas as $pelicula) {
    if ($genero == '' || $genero == $pelicula['genero']) {
        $listado_tarjetas_peliculas .= "
            <div class='cartelera'><h2>$pelicula[titulo]</h2>
            <div class='contenedor'><img src='$pelicula[poster]' height=300px>
            <ul> <li>Director: $pelicula[director]</li><li>Año: $pelicula[anio]</li><li>Género: $pelicula[genero]</li></ul> </div>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catalogo_style.css">
    <title>Catalogo</title>
</head>
<body>
    <form action="catalogo.php" method="GET" >

        <?php
            $opciones_categoria = "";
            foreach($tipos_categoria as $tipo => $nombre_categoria) {
                $opciones_categorias .= "<option value=\"{$tipo}\">{$nombre_categoria}</option>";
            }
        ?>
        <select name="generos">
            <option selected>Categoría</option>
            <?php echo $opciones_categorias; ?>
        </select>
        <button type="submit">Buscar</button>
    </form>
    <div class='catalogo'>
        <?php echo $listado_tarjetas_peliculas; ?>
    </div>
</body>
</html>