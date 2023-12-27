<?php

/*
 * Делаем константы для хранения данных о базе данных
 * HOST - адрес для подключения к БД
 * USER - логин для доступа к БД
 * PASSWORD - пароль для доступа к БД
 * DATABASE - название базы данных, к которой мы подключаемся
 */

define('HOST', '92.246.214.15:3306');
define('USER', 'ais_sozykin7497_bd_for_autoserv');
define('PASSWORD', 'aPtvLAFnAoMMISjNx4BsO925');
define('DATABASE', 'ais_sozykin7497_bd_for_autoserv');

/*
 * Подключаемся к базе данных с помощью функции mysqli_connect()
 */

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

/*
 * Делаем проверку соединения
 * Если есть ошибки, останавливаем код и выводим сообщение с ошибкой
 */

if (!$connect) {
    die('Error connect to database!');
}
?>

<pre>
    <?php
        print_r($_POST);
    ?>
</pre>