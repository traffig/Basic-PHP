<?php
$mysqli = mysqli_connect('127.0.0.1:3307', 'root', '', 'geekbrains');
$url_id = $_GET['id'];
$query = mysqli_query($mysqli, "SELECT `url_max`, `name`, `rating` 
FROM `geekbrains`.`img_info` WHERE `id` = $url_id");
//var_dump($query);
$result = [];
while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
//    var_dump($result);
}
mysqli_close($mysqli);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img {
            max-height: 90vh;
        }
    </style>
</head>
<body>
<?php foreach ($result as $img): ?>
    <img src="<?= $img['url_max'] ?>" alt="<?= $img['name'] ?>" title="<?= $img['name'] ?>">
    <p>Количество просмотров: <?= $img['rating'] ?></p>
<?php endforeach; ?>
</body>
</html>
