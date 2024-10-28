<?php

    session_start();

    if (!$_SESSION['user']) {
        header('Location: login.php');
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
        <a href="index.php">
            <button class="header__btn__close" id="profile__btn__close">
                <span></span>
                <span></span>
            </button>
        </a>
        <form class="login__form profile__form">
            <div class="login__img__body">
                <img src="<?= $_SESSION['user']['avatar'] ?>" alt="">
            </div>
            <div class="login__title__body">
                <h1><?= $_SESSION['user']['full_name'] ?></h1>
                <p><?= $_SESSION['user']['email'] ?></p>
                <a href="php/logout.php" class="logout">Выйти из аккаунта</a>
            </div>
        </form>
    </section>

    <section class="my__content">
        <h2>Вы еще не размещали объявления</h2>
    </section>
    
</body>
</html>