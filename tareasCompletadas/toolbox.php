<?php

function saludar($nombre = "invitado") {
    return "Hola, {$nombre}";
}

function sumar(int $a, int $b) {
    return $a + $b;
}

function sumarTodos(...$numeros): int{
    $suma = 0;
    foreach ($numeros as $n) {
        $suma += $n;
    }
    return $suma;
}

function esPrimo(int $n): bool{
    if ($n < 2) {
        return false;
    }
    // Itera desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($num); $i++) {
        // Si encuentra un divisor, no es primo
        if ($num % $i == 0) {
            return false;
        }
    }
    // Si no se encontraron divisores, es primo
    return true;
}

function palabraMasLarga(string $texto): string{

    $textoLimpio = str_replace(",", " ", $texto);
    //$textoLimpio = preg_replace('/[^\p{L}\p{N}\s]/u', ' ', $texto);


    $palabras = explode(' ', $textoLimpio);

    $palabraMasLarga = '';

    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) {
            $palabraMasLarga = $palabra;
        }
    }

    return $palabraMasLarga;
}

function estadisticas(float ...$nums): array{
    $min = min($nums);
    $max = max($nums);
    $media = array_sum($nums) / count($nums);

    return [
        'min' => $min,
        'max' => $max,
        'media' => $media
    ];
}