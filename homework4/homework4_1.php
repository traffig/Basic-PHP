<?php
//1. Создать галерею фотографий. Она должна состоять из одной страницы, на которой
//пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна
//открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью
//свойства ​ width​ .
$arr_img = [
    'image 1' => ['url_min' => 'img/min/1.jpg', 'url_max' => 'img/max/1.jpg', 'alt' => 'image 1'],
    'image 2' => ['url_min' => 'img/min/2.jpg', 'url_max' => 'img/max/2.jpg', 'alt' => 'image 2'],
    'image 3' => ['url_min' => 'img/min/3.jpg', 'url_max' => 'img/max/3.jpg', 'alt' => 'image 3'],
    'image 4' => ['url_min' => 'img/min/4.jpg', 'url_max' => 'img/max/4.jpg', 'alt' => 'image 4'],
];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Галерея</title>
</head>
<body>
<div class="gallery">
    <?php foreach ($arr_img as $key => $img): ?>
        <a href="<?= $img['url_max'] ?>" target="_blank">
            <img src="<?= $img['url_min'] ?>" alt="<?= $img['alt'] ?>" title="<?= $key ?>">
        </a>
    <?php endforeach; ?>
</div>
</body>
</html>
