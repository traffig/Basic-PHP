<?php
/*7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/

$today = getdate();
$hours = $today['hours'];
$minutes = $today['minutes'];

function get_time($hours, $minutes)
{
    if ($hours === 1 || $hours === 21) {
        $hours = "$hours час ";
    } elseif ($hours === 2 || $hours === 3 || $hours == 4 || $hours === 22 || $hours === 23 || $hours == 24) {
        $hours = "$hours часа ";
    } else {
        $hours = "$hours часов ";
    }

    if ($minutes % 10 === 1 && $minutes !== 11) {
        $minutes = "$minutes минута";
    } elseif ($minutes % 10 === 2 && $minutes !== 12 || $minutes % 10 === 3 && $minutes !== 13 || $minutes % 10 === 4
        && $minutes !== 14) {
        $minutes = "$minutes минуты";
    } else {
        $minutes = "$minutes минут";
    }

    return $hours . $minutes;
}

echo 'Время: ' . get_time($hours, $minutes);