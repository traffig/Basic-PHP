<?php
//2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в
//функцию построения адрес папки с изображениями. Функция сама должна считать список
//файлов и построить фотогалерею со ссылками в ней.
function get_img_src($dir)
{
    $arr_img = scandir($dir);
    array_unshift($arr_img, "$dir/");
    array_splice($arr_img, 1, 2);
//    var_dump($arr_img);
    return $arr_img;
}

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
    <?php $arr_img_max = get_img_src('img/max');
    $arr_img_min = get_img_src('img/min'); ?>
    <?php for ($i = 1;
    $i < count($arr_img_max);
    $i++): ?>
    <?php if ($arr_img_max[$i] !== 'Thumbs.db' && $arr_img_min[$i] !== 'Thumbs.db'): ?>
    <a href="<?= $arr_img_max[0] . $arr_img_max[$i] ?>" target="_blank">
        <img src="<?= $arr_img_min[0] . $arr_img_min[$i] ?>" alt="image">
        <?php endif; ?>
        <?php endfor; ?>
    </a>
</div>
</body>
</html>
