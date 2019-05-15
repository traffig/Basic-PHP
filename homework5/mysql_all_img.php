<?php
$mysqli = mysqli_connect('127.0.0.1:3307', 'root', '', 'geekbrains');
$query = mysqli_query($mysqli, 'SELECT * FROM `geekbrains`.`img_info` ORDER BY `rating` DESC');
//var_dump($query);
$result = [];
while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
//    var_dump($result);
}
mysqli_close($mysqli);
