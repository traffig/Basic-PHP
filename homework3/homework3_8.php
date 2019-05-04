<?php

$city_arr = [
    'Московская' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт',],
    'Рязанская' => ['Рязань', 'Шилово', 'Скопин']
];

foreach ($city_arr as $key => $value) {
    $cities_list = null;
    foreach ($value as $city) {
        $split_city = preg_split('//u', $city);
        if ($split_city[1] === 'К') {
            if (is_null($cities_list)) {
                $cities_list .= "$city";
            } else {
                $cities_list .= ", $city";
            }
        }
    }
    if (isset($cities_list)) {
        echo nl2br(PHP_EOL . "$key область: " . PHP_EOL . "$cities_list. " . PHP_EOL);
    }
}