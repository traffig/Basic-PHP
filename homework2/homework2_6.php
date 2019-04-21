<?php
/*6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат:
function power($val, $pow), где $val – заданное число, $pow – степень.*/

//Первый спооб решения

/*function power($val, $pow)
{
    if ($pow === 0) {
        return 1;
    }
    return $val * power($val, $pow - 1);
}
*/

//Второй способ решения

function power($val, $pow)
{
    return ($pow === 0) ? 1 : $val * power($val, $pow - 1);
}

$a = mt_rand(1, 10);
$b = mt_rand(1, 3);
echo "Число: $a в степени: $b равно: " . power($a, $b);