<?php

require_once 'bdconnect.php'

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Phone nubmer</th>
        </tr>

        <?php

/*
 * Делаем выборку всех строк из таблицы "products"
 */

$requests = mysqli_query($connect, "SELECT * FROM `Requests`");

/*
 * Преобразовываем полученные данные в нормальный массив
 */

$requests = mysqli_fetch_all($requests);

/*
 * Перебираем массив и рендерим HTML с данными из массива
 * Ключ 0 - id
 * Ключ 1 - title
 * Ключ 2 - price
 * Ключ 3 - description
 */

foreach ($requests as $request) {
    ?>
        <tr>
            <td><?= $request[0] ?></td>
            <td><?= $request[1] ?></td>
            <td><?= $request[2] ?></td>
        </tr>
    <?php
}
?>
