<?php

$texto = "28/12/2025";
$patron = "/[1-31]{2}\/[1-12]{2}\/[\d]{4}/";
if (preg_match($patron, $texto)) {
    echo "Patrón válido";
    $separados = preg_split("/\//", $texto);
    for ($i = 0; $i <= $separados; $i++){
        echo $i;
    }
} else {
    echo "Patrón inválido";
}

?>