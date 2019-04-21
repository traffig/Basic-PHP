<?php
/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.*/

$a = mt_rand(0, 10);
$b = mt_rand(0, 10);

function amount($a, $b)
{
    return $a + $b;
}

function difference($a, $b)
{
    return $a - $b;
}

function multiplication($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    if ($b === 0) {
        return 'Делить на 0 нельзя.';
    }
    return $a / $b;
}

echo nl2br("Числа: a = $a, b = $b" . ' ' . PHP_EOL);
echo nl2br("$a + $b = " . amount($a, $b) . ' ' . PHP_EOL);
echo nl2br("$a - $b = " . difference($a, $b) . ' ' . PHP_EOL);
echo nl2br("$a * $b = " . multiplication($a, $b) . ' ' . PHP_EOL);
echo "$a / $b = " . divide($a, $b);