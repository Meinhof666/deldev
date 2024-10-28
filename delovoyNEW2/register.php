<?php

    session_start();

    if (!empty($_SESSION['user'])) {
        header('Location: profile.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JS -->
    <script src="assets/js/script.js" defer></script>
</head>
<body>

    <section class="login__section">
        <a href="index.php" class="login__btn__close">
            <button class="header__btn__close">
                <span></span>
                <span></span>
            </button>
        </a>
        <form class="login__form" action="php/singup.php" method="post" enctype="multipart/form-data">
            <label>ФИО</label>
            <input type="text" name="full_name" placeholder="Введите ФИО">
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите почту">
            <label>Изображение</label>
            <input type="file" name="avatar" class="avatar">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Подтверждение пароля">
            <button type="submit">Войти</button>
            <p>Уже есть аккаунт?<a href="login.php" class="login__form__a">Войти</a></p>
            <?php
                if (!empty($_SESSION['message'])) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </section>
    
</body>
</html>