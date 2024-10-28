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
        <form class="login__form" action="php/singin.php" method="post">
            <label>Почта</label>
            <input type="text" name="email" placeholder="Введите почту">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <button type="submit">Войти</button>
            <p>Нет аккаунта?<a href="register.php" class="login__form__a">Зарегистрироваться</a></p>
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