<?php

// Tabla de multiplicar del 4
echo "Tabla de multiplicar del 4:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * 4;
    echo "4 x $i = $resultado\n";
}

// Tabla de multiplicar del 6
echo "\nTabla de multiplicar del 6:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * 6;
    echo "6 x $i = $resultado\n";
}

//-----------------------------------------------------------------------------

//Calcular el factorial
$variable1 = 13; // Numero seteado

// Función para calcular el factorial
function calcularFactorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * calcularFactorial($n - 1);
    }
}

// Calcular el factorial del número
$factorial = calcularFactorial($variable1);

// Mostrar el resultado por pantalla
echo "\nEl factorial de $variable1 es: $factorial \n";

//-----------------------------------------------------------------------------

// Número para verificar si es primo
$variable2 = 23; // Numero seteado

// Función para verificar si un número es primo
function esPrimo($n) {
    if ($n <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

// Verificar si el número es primo
$esPrimo = esPrimo($variable2);

// Mostrar el resultado por pantalla
if ($esPrimo) {
    echo "\n$variable2 es un número primo. \n";
} else {
    echo "\n$variable2 no es un número primo. \n";
}

//-----------------------------------------------------------------------------

// Número para verificar si es par
$variable3 = 9; // Numero seteado

// Verificar si el número es par
if ($variable3 % 2 == 0) {
    echo "\n$variable3 es un número par.\n";
} else {
    echo "\n$variable3 no es un número par.\n";
}

//-----------------------------------------------------------------------------

// Número para la tabla de multiplicar
$variable4 = 7; // Numero seteado

// Mostrar la tabla de multiplicar
echo "\nTabla de multiplicar del $variable4:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * $variable4;
    echo "$variable4 x $i = $resultado\n";
}

//-----------------------------------------------------------------------------
//https://onlinephp.io/c/18bed
//-----------------------------------------------------------------------------
?>