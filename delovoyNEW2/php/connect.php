<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'delovoy__bd');

    if (!$connect) {
        die('Error connect your DataBase!');
    }

?>