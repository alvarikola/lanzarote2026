<?php
    require "includes/general.php";

    $usuario = new Usuario();


    $datos = [];

    $datos['nick']   = 'jme';
    $datos['nombre'] = 'Jaime';

    $usuario->insertar($datos);


    echo Template::header('Biblioteca');
    echo Template::nav();

    /*Sección de usuarios -> http://lanzarote.lan/index.php?seccion=usuarios*/
    echo Template::seccion(Campo::val('seccion'));

    echo Template::footer(); 
?>