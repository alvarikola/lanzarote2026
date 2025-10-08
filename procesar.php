<?php

$nombre = $_POST['nombre'];
$edad = $_GET['edad'];
$email = $_GET['email'];


if ($_POST['nombre'] != '')
{

    $mensaje = "
        <div class=\"alert alert-primary\" role=\"alert\">
            ¡Hola, {$_POST['nombre']}!
        </div>
    ";

    if (strlen($_POST['nombre']) < 5)
    {
        $mensaje = "
            <div class=\"alert alert-danger\" role=\"alert\">
                El número de caracteres \"{$_POST['nombre']}\" debe ser superior o igual a 5.
            </div>
        ";
    }

}