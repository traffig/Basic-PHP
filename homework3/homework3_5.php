<?php
//5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
function replace_text($words)
{
    $arr_words = explode(' ', $words);
    echo implode('_', $arr_words);
}

replace_text(' Здравствуй мир !');