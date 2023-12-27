<?php
    session_start();
    require_once 'dbconnect.php';

    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];

    mysqli_query($connect, "INSERT INTO `Requests` (`id`, `full_name`, `phone_number`) VALUES (NULL, 'full_name', 'phone_number')")

    $_SESSION['message'] = 'Заявка отправленна';


?>