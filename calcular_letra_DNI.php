#!/usr/bin/php
<?php

$numero = 12345678;
$cadenaLetras = strtoupper("TRWAGMYFPDXBNJZSQVHLCKE");


if (strlen($numero) == 8 and ctype_digit($numero)) {
    $indice = $numero % 23;
    $letra = substr($cadenaLetras, $indice, 1);
    $dni = $numero ."". $letra;
    echo trim($dni);
}
else {
    echo "Entrada inválida: deben ser 8 dígitos.";
}