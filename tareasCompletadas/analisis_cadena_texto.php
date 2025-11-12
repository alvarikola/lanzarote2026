#!/usr/bin/php
<?php

$cadena = "Programar en PHP es divertido";

$caracteresTotales = strlen(trim($cadena));
$numeroPalabras = str_word_count($cadena);
$primeraLetra = strtoupper(substr($cadena, 0, 1));
$ultimaLetra = strtoupper(substr($cadena, -1));
$cadenaInvertida = strrev($cadena);

echo "Número de caracteres: {$caracteresTotales}\n Número de palabras: {$numeroPalabras}\n Primera letras: {$primeraLetra}\n Última letras: {$ultimaLetra}\n Cadena invertida: {$cadenaInvertida}\n";
