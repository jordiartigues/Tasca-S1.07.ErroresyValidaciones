<?php


$number1 = 14;

$number2 = 2;
try {
    $result = $number1 / $number2;
    echo "Normal case: " . $result;
} catch (DivisionByZeroError $error) {
    echo "Error: Division by zero is not allowed";
}

$number2 = 0;
try {
    $resultado = $number1 / $number2;
    echo "Result: " . $resultado;
} catch (DivisionByZeroError $error) {
    echo "Error: Division by zero is not allowed";
}
