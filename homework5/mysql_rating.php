<?php
$mysqli = mysqli_connect('127.0.0.1:3307', 'root', '', 'geekbrains');
$url_id = $_GET['id'];
$query = mysqli_query($mysqli,
    "UPDATE `geekbrains`.`img_info` SET `rating` = `rating` + 1 WHERE `id` = $url_id");
mysqli_close($mysqli);
header("location: view_img.php?id=$url_id");
exit;
