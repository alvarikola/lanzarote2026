<?php
    require "includes/general.php";

    echo Template::header('Biblioteca');
    echo Template::nav();

    /*Sección de usuarios -> http://lanzarote.lan/index.php?seccion=usuarios*/
    echo Template::seccion(Campo::val('seccion'));

    echo Template::footer(); 
?>