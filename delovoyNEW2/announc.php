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

        <div class="announc__items_body">
            <div class="announc__title">
                <label class="announc__label">Выберите цель</label>
            </div>
            <ul class="announc__items">
                <button class="announc__item_btn" id="pay__btn">
                    <li class="announc__item">
                        <img src="assets/img/prodat.png">
                        <p>Продать</p>
                    </li>
                </button>
                <button class="announc__item_btn" id="sdat__btn">
                    <li class="announc__item">
                        <img src="assets/img/sdat.png">
                        <p>Сдать</p>
                    </li>
                </button>
            </ul>
            <div class="announc__title">
                <label class="announc__label">Выберите тип недвижемости</label>
            </div>
            <ul class="announc__items">
                <button class="announc__item_btn">
                    <li class="announc__item">
                        <img src="assets/img/prodat.png">
                        <p>Дом, дача</p>
                    </li>
                </button>
                <button class="announc__item_btn">
                    <li class="announc__item">
                        <img src="assets/img/sdat.png">
                        <p>Квартира</p>
                    </li>
                </button>
                <button class="announc__item_btn">
                    <li class="announc__item">
                        <img src="assets/img/sdat.png">
                        <p>Участок</p>
                    </li>
                </button>
            </ul>
            <div class="announc__float">
                <form class="announc__form" action="php/add.php" method="post" enctype="multipart/form-data">
                <label>Тип недвижемости</label>
                <p>Квартира</p>
                <label>Адрес</label>
                <input type="text" name="address" placeholder="Город, улица">
                <label>Площадь, м2</label>
                <input type="text" name="m_float" placeholder="Введите площадь">
                <label>Количество комнат</label>
                <input type="text" name="quantity_float" placeholder="1, 2, 3...">
                <label>Изображение</label>
                <input type="file" name="image" class="image">
                <label>Контакты</label>
                <input type="text" name="contact" placeholder="Контакты">
                <label>Дополнительно</label>
                <input type="text" name="description" placeholder="Описание">
                <button type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>