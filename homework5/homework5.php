<?php
/*1. Создать галерею изображений, состоящую из двух страниц:
просмотр всех фотографий (уменьшенных копий);
просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
2. В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на сервере, размер, имя).
3. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности.
Популярность = число кликов по фотографии.*/
require('mysql_all_img.php');
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
    <?php foreach ($result as $img): ?>
        <a href="mysql_rating.php?id=<?= $img['id'] ?>" target="_blank">
            <img src="<?= $img['url_min'] ?>" id="<?= $img['id'] ?>" alt="<?= $img['name'] ?>"
                 title="<?= $img['name'] ?>">
        </a>
    <?php endforeach; ?>
</div>
</body>
</html>
