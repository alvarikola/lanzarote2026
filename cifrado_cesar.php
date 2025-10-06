#!/usr/bin/php
<?php
$texto = "¡Me gusta la clase de 1 de desarrollo. Ñu. café CAFÉ.";
$k = 7;

define('ALFABETO', 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
$alfabeto = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
$longitudAlfabeto = strlen($alfabeto);


function normalizar($texto) {

    $texto = str_replace('Á','A',$texto);
    $texto = str_replace('É','E',$texto);
    $texto = str_replace('Í','I',$texto);
    $texto = str_replace('Ó','O',$texto);
    $texto = str_replace('Ú','U',$texto);
    $texto = str_replace('Ü','U',$texto);

    $texto = str_replace('á','a',$texto);
    $texto = str_replace('é','e',$texto);
    $texto = str_replace('í','i',$texto);
    $texto = str_replace('ó','o',$texto);
    $texto = str_replace('ú','u',$texto);
    $texto = str_replace('ü','u',$texto);

    return $texto;
}


function esLetraEspanola($c) {
    $c = strtoupper($c);

    return strpos('ABCDEFGHIJKLMNÑOPQRSTUVWXYZ', $c) !== false;
}


function cifrarCesar($texto, $k) {
    $resultado = '';

    $alfabeto = ALFABETO;

    $longitud = strlen($alfabeto);

    $k = $k % $longitud;

    if ($k < 0) {
        $k += $longitud;
    }

    for ($i = 0; $i < strlen($texto); $i++) {
        $c = substr($texto,$i,1);

        if (esLetraEspanola($c)) {
            $mayus = strtoupper($c);
            $pos = strpos($alfabeto,$mayus);
            $nuevaPos = ($pos + $k) % $longitud;

            $nuevaLetra = substr($alfabeto,$nuevaPos,1);

            if (ctype_upper($c)) {
                $resultado .= $nuevaLetra;
            } else {
                $resultado .= strtolower($nuevaLetra);
            }

        } else {
            $resultado = $resultado . $c;
        }
    }
    return $resultado;
}

$textoNormalizado = normalizar($texto);
$textoCifrado = cifrarCesar($textoNormalizado,$k);
$textoDescifrado = cifrarCesar($textoCifrado, -$k);
$verificacion = $textoDescifrado == $textoNormalizado ? 'OK' : 'ERROR';

echo "
    Original: {$texto}\n
    Normalizado: {$textoNormalizado}\n
    Cifrado: {$textoCifrado}\n
    Descifrado: {$textoDescifrado}\n
    Verificación: {$verificacion}\n
";