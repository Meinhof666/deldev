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

    <section class="header">
        <div class="header__list">
            <div class="header__items header__left">
                <button class="header__btn" id="menu__btn">
                    <span></span>
                    <span></span>
                </button>
                <div class="actives menu__content">
                    <button class="header__btn__close" id="menu__btn__close">
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="header__item header__logo">
                    <a href="index.php">
                        <span>Д</span><p>еловой</p>
                        <span>Д</span><p>агестан</p>
                    </a>
                </div>
            </div>
            <div class="header__items header__right">
                <button class="header__btn" id="search__btn">
                    <div class="header__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none">
                            <path fill="currentColor" d="m12.678 2.661-.673-1.49a.432.432 0 0 0-.783 0L10.55 2.67l-1.49.672a.426.426 0 0 0 0 .775l1.498.673.673 1.49a.426.426 0 0 0 .774 0l.673-1.499 1.49-.672a.426.426 0 0 0 0-.775l-1.49-.673ZM7.999 4.904l-.456-1.009a.293.293 0 0 0-.53 0L6.557 4.91l-1.01.456a.288.288 0 0 0 0 .524l1.016.456.455 1.01a.288.288 0 0 0 .525 0L8 6.34l1.009-.455a.288.288 0 0 0 0-.525l-1.01-.456Z"></path>
                            <path fill="currentColor" fill-rule="evenodd" d="M13.66 15.005a.972.972 0 0 0 1.053-1.588l-3.585-3.585c.347-.5.614-1.058.783-1.659l.065-.23-.239.015a1.858 1.858 0 0 1-1.36-.466l-.209-.188-.07.271a3.655 3.655 0 0 1-7.192-.913 3.654 3.654 0 0 1 4.43-3.57l.137.03.055-.13c.168-.395.477-.74.932-.95l.005-.001h.001l.688-.312-.348-.153a5.56 5.56 0 1 0 .934 9.647l3.604 3.573c.09.09.198.16.316.209Z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </button>
                <div class="actives search__content">
                    <div class="search__content__body">
                        <button class="header__btn__close" id="search__btn__close">
                            <span></span>
                            <span></span>
                        </button>
                        <div class="search__body__title">
                            <h3>Поиск по сайту</h3>
                        </div>
                        <div class="search__body__input">
                            <input type="text" placeholder="Поиск">
                        </div>
                    </div>
                </div>
                <button class="header__btn" id="like__btn">
                    <div class="header__item">
                        <svg fill="currentColor" viewBox="0 0 16 16" width="16" height="16">
                            <path d="M1 7C.5 3.5 2.7 2 4.8 2 6.82 2 8 4 8 4s1.17-2 3.2-2c2.1 0 4.3 1.5 3.8 5s-5.83 7-7 7-6.5-3.5-7-7z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </button>
                <div class="actives like__content">
                    <div class="like__header">
                        <button class="header__btn__close" id="like__btn__close">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
                <button class="header__btn" id="announcement__btn">
                    <div class="header__item">
                        <svg fill="currentColor" viewBox="0 0 16 16" width="16" height="16">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zM8 4a1 1 0 0 0-1 1v2H5a1 1 0 0 0 0 2h2v2a1 1 0 1 0 2 0V9h2a1 1 0 1 0 0-2H9V5a1 1 0 0 0-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <p>Разместить объявление</p>
                    </div>
                </button>
                <div class="actives announcement__content">
                    <button class="header__btn__close" id="announcement__btn__close">
                        <span></span>
                        <span></span>
                    </button>
                    <p>Размещение объявления</p>
                    <p>Тип объявления</p>
                    <input type="text" placeholder="Тип объявления">
                    <button>Разместить</button>
                </div>
                <a href="login.php" class="header__btn" id="login__btn">
                    <div class="header__item">
                        <svg fill="currentColor" viewBox="0 0 16 16" width="16" height="16">
                            <path fill-rule="evenodd" d="M4.5 2.5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1h-8a1 1 0 1 1 0-2H12a.5.5 0 0 0 .5-.5V4a.5.5 0 0 0-.5-.5H5.5a1 1 0 0 1-1-1zM6.12 5a1 1 0 0 1 1.42-.07l2.63 2.33a1 1 0 0 1 0 1.48l-2.63 2.33a1 1 0 0 1-1.35-1.48l.5-.41A.1.1 0 0 0 6.63 9H2.5a1 1 0 0 1 0-2h4.13a.1.1 0 0 0 .06-.18l-.5-.4A1 1 0 0 1 6.12 5z"></path>
                        </svg>
                        <p>Войти или зарегистрироваться</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <div class="section__info__title">
        <h1>Туризм</h1>
    </div>
    <section class="section__info">
        <div class="section__info__content">
            <h1>Здесь пока ничего нет</h1>
        </div>
    </section>

    <section class="footer">
        <div class="footer__box">
            <div class="footer__item first__foot">
                <span>Д</span>
                <p>еловой</p>
                <span>Д</span>
                <p>агестан</p>
            </div>
            <div class="footer__item second__foot">
                <p>© 2016–2024, ООО «Деловой Дагестан» Дагестан, 333333, Кутузовский проспект, д. 1, к. 1, ОГРН: 11111111111 ИНН: 7777777777</p>
                <span></span>
                <p>Сервис применяет рекомендательные технологии: предоставляет информацию на основе сбора, систематизации и анализа сведений, относящихся к предпочтениям пользователей интернета, находящихся в России</p>
                <span></span>
                <p>Использование сайта означает согласие с Пользовательским соглашением и Политикой обработки персональных данных</p>
            </div>
            <div class="footer__item last__foot">
                <div class="tg">
                    <div class="tg__qr"></div>
                    <p>Телеграм</p>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>