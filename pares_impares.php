<?php
$limite = 20;
$totalPares = 0;
$totalImpares = 0;
for ($i = 1; $i <= $limite; $i++) {
    if ($i % 2 == 0) {
        $totalPares++;
        //printf("El número {$i} es par <br>");
    }
    else {
        $totalImpares++;
        //printf("El número {$i} es impar <br>");
    }       
}
echo "El numero total de pares es: {$totalPares} y de impares es: {$totalImpares}";