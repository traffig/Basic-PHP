<?php

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт,
который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.*/

$a = 0;
$b = 5;
$result = null;
$message = "a = $a и b = $b разных знаков, вывожу их сумму: ";
if ($a >= 0 && $b >= 0) {
    $message = "a = $a и b = $b положительные, вывожу их разность: ";
    $result = abs($a - $b);
} elseif ($a < 0 && $b < 0) {
    $message = "a = $a и b = $b отрицательные, вывожу их произведение: ";
    $result = $a * $b;
} else {
    $result = $a + $b;
}

echo $message . $result;