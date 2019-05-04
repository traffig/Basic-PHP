<?php
/*9. * Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит
 транслитерацию и замену пробелов на подчеркивания(аналогичная задача решается при конструировании url - адресов
 на основе названия статьи в блогах).*/
$letters_for_translate = [
    'А' => 'A', 'К' => 'K', 'Х' => 'KH',
    'а' => 'a', 'к' => 'k', 'х' => 'kh',
    'Б' => 'B', 'Л' => 'L', 'Ц' => 'TS',
    'б' => 'b', 'л' => 'l', 'ц' => 'ts',
    'В' => 'V', 'М' => 'M', 'Ч' => 'CH',
    'в' => 'v', 'м' => 'm', 'ч' => 'ch',
    'Г' => 'G', 'Н' => 'N', 'Ш' => 'SH',
    'г' => 'g', 'н' => 'n', 'ш' => 'sh',
    'Д' => 'D', 'О' => 'O', 'Щ' => 'SHCH',
    'д' => 'd', 'о' => 'o', 'щ' => 'shch',
    'Е' => 'YE', 'П' => 'P', 'Ъ' => '',
    'е' => 'ye', 'п' => 'p', 'ъ' => '',
    'Ё' => 'YE', 'Р' => 'R', 'Ы' => 'Y',
    'ё' => 'ye', 'р' => 'r', 'ы' => 'y',
    'Ж' => 'ZH', 'С' => 'S', 'Ь' => '',
    'ж' => 'zh', 'с' => 's', 'ь' => '',
    'З' => 'Z', 'Т' => 'T', 'Э' => 'E',
    'з' => 'z', 'т' => 't', 'э' => 'e',
    'И' => 'I', 'У' => 'U', 'Ю' => 'YU',
    'и' => 'i', 'у' => 'u', 'ю' => 'yu',
    'Й' => 'Y', 'Ф' => 'F', 'Я' => 'YA',
    'й' => 'y', 'ф' => 'f', 'я' => 'ya',
];

function translate($word)
{
    global $letters_for_translate;
    $split_word = preg_split('//u', $word);
    $translate_word = null;
    foreach ($split_word as $letter) {
        if ($letter === ' ') {
            $translate_word .= '_';
        } elseif (!array_key_exists($letter, $letters_for_translate)) {
            $translate_word .= $letter;
        } else {
            foreach ($letters_for_translate as $key => $letter_translate) {
                if ($key === $letter) {
                    $translate_word .= $letter_translate;
                    break;
                }
            }
        }
    }
    return $translate_word;
}

echo translate(' Задание выполнено !');