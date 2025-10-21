<?php
$peliculas = [
    [
        "titulo" => "El Señor de los Anillos: La Comunidad del Anillo",
        "director" => "Peter Jackson",
        "anio" => 2001,
        "genero" => "Fantasía",
        "poster" => "imagenes/señorAnillosposter.jpg"
    ],
    [
        "titulo" => "Inception",
        "director" => "Christopher Nolan",
        "anio" => 2010,
        "genero" => "Ciencia Ficción",
        "poster" => "imagenes/inceptionposter.jpg"
    ],
    [
        "titulo" => "Cars",
        "director" => "John Lasseter",
        "anio" => 2006,
        "genero" => "Comedia",
        "poster" => "imagenes/carsposter.webp"
    ],
    [
        "titulo" => "The Amazing Spider-Man",
        "director" => "Marc Webb",
        "anio" => 2012,
        "genero" => "Acción",
        "poster" => "imagenes/spidermanposter.jpg"
    ],
    [
        "titulo" => "Scream",
        "director" => "Wes Craven",
        "anio" => 1996,
        "genero" => "Slasher",
        "poster" => "imagenes/screamposter.webp"    
    ],
    [
        "titulo" => "Jurassic Park",
        "director" => "Steven Spielberg",
        "anio" => 1993,
        "genero" => "Ciencia Ficción",
        "poster" => "imagenes/jurassicposter.jpg"
    ],
];
echo "<div class='catalogo'>";
foreach($peliculas as $pelicula) {
    echo "<div class='cartelera'><h2>$pelicula[titulo]</h2>";
    echo "<div class='contenedor'><img src='$pelicula[poster]' height=300px>";
    echo "<ul> <li>Director: $pelicula[director]</li><li>Año: $pelicula[anio]</li><li>Género: $pelicula[genero]</li></ul> </div> </div>";  
}
echo "</div>";

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
        <label for="idGenero">Género</label>
        <select name="select">
            <option value="todos">Todos</option>
            <option value="fantasia">Fantasía</option>
            <option value="cienciaFiccion" selected>Ciencia Ficción</option>
            <option value="comedia">Comedia</option>
            <option value="accion">Acción</option>
            <option value="slasher">Slasher</option>
        </select>
    </form>
</body>
</html>