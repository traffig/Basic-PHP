<?php
/*4. Реализовать функцию с тремя параметрами:
function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
$operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических
операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'сложить':
        case 'сумма':
            return "$arg1 + $arg2 = " . ($arg1 + $arg2);
        case 'разность':
        case 'вычесть':
            return "$arg1 - $arg2 = " . $arg1 - $arg2;
        case 'умножить':
        case 'произведение':
            return "$arg1 * $arg2 = " . $arg1 * $arg2;
        case 'разделить':
        case 'делить':
            if ($arg2 === 0) {
                return 'Делить на 0 нельзя.';
            }
            return "$arg1 / $arg2 = " . $arg1 / $arg2;
        default:
            return "Операции: \"$operation\" нет внутри функции.";
    }
}

$a = mt_rand(0, 10);
$b = mt_rand(0, 10);

echo mathOperation($a, $b, 'делить');