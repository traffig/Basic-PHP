<?php
/*3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)*/

$city_arr = [
    'Московская' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская' => ['Рязань', 'Шилово', 'Скопин']
];

foreach ($city_arr as $key => $value) {
    $cities_list = null;
    foreach ($value as $city) {
        if (is_null($cities_list)) {
            $cities_list .= "$city";
        } else {
            $cities_list .= ", $city";
        }
    }
    if (isset($cities_list)) {
        echo nl2br(PHP_EOL . "$key область: " . PHP_EOL . "$cities_list. " . PHP_EOL);
    }
}