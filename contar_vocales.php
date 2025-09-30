<?php
$cadena = strtolower("Programar en PHP es divertido");
$vocales = ["a", "e", "i", "o", "u"];
$contadorVocales = 0;
for ($i=0; $i < strlen($cadena); $i++) {
    if (in_array($cadena[$i], $vocales)) {
        $contadorVocales++;
    } 
}
echo "Vocales encontradas {$contadorVocales}";