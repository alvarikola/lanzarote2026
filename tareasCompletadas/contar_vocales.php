#!/usr/bin/php
<?php
/*
$cadena = strtolower("Programar en PHP es divertido");
$vocales = ["a", "e", "i", "o", "u"];
$contadorVocales = 0;
for ($i=0; $i < strlen($cadena); $i++) {
    if (in_array($cadena[$i], $vocales)) {
        $contadorVocales++;
    } 
}
echo "Vocales encontradas {$contadorVocales}";
*/

$cadena = "Programar en PHP es divertido";
$vocales = "aeiou";

$cadena_aux = strtolower($cadena);

echo $cadena_aux;

echo '<br />';

$contador_vocales = 0;

/*
if (strpos($vocales, "a") !== false )

    echo "ha entrado en la condicion";


echo '<br />';
*/

for ($i= 0; $i < strlen($cadena_aux);$i++)
{
    $vocal = substr($cadena_aux,$i,1);


    if (strpos($vocales, $vocal) !== false )
        $contador_vocales++;
}

echo "El número de vocales localizadas en \"{$cadena}\" es igual a {$contador_vocales}";