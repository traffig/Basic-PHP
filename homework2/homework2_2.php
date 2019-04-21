<?php
/*2. Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15.*/

$a = mt_rand(0, 15);
echo nl2br("Рандомное число равно $a, вывожу числа от $a до 15:" . ' ' . PHP_EOL);
switch ($a) {
    case 0:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 1:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 2:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 3:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 4:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 5:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 6:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 7:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 8:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 9:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 10:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 11:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 12:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 13:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 14:
        echo nl2br($a++ . ' ' . PHP_EOL);
    case 15:
        echo $a;
        break;
    default:
        echo 'Что-то пошло не так!';
}