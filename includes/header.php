<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="page" copntent="<?php echo $page; ?>">
    <title><?php echo isset($title) ? $title : 'Периметр ремонта'; ?></title>
    <meta name="description" content="<?php echo isset($description) ? $description : 'Периметр ремонта — ваш надёжный партнёр в ремонте квартир и коммерческой недвижимости.'; ?>">
    <link rel="icon" href="../images/favicon.svg" type="image/svg+xml">
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    $css_file = ($current_page === 'case.php') ? 'case.css' : 'main.css';
    ?>
    <link rel="stylesheet" href="css/<?php echo $css_file; ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>




</head>

<body>
    <header class="header">
        <div class="container header__container">
            <div class="header__logo-container">
                <a href="tel:+7 (911) 929-77-13" class="header_call-container">
                    <img src="images/call.svg" alt="Звонок" class="header__rating-img">
                </a>
                <a href="/" class="header__logo-link">
                    <img src="images/logo.svg" alt="Логотип компании Периметр Ремонта" class="header__logo-img">
                </a>
                <a href="#" class="header_burger-container">
                    <img src="images/burger.svg" alt="Бургер меню" class="header__rating-img">
                </a>
                <a href="/rating" class="header__rating-link">
                    <img src="images/rating.svg" alt="Рейтинг компании: 5 из 5" class="header__rating-img">
                </a>
            </div>
            <nav class="header__nav" aria-label="Основная навигация">
                <ul class="header__menu">
                    <li class="header__menu-item"><a href="/index.php" class="header__menu-link" <?php if ($_SERVER['REQUEST_URI'] == '/index.php') echo 'aria-current="page"'; ?>>Главная</a></li>
                    <li class="header__menu-item"><a href="/projects" class="header__menu-link" <?php if ($_SERVER['REQUEST_URI'] == '/projects') echo 'aria-current="page"'; ?>>Проекты</a></li>
                    <li class="header__menu-item"><a href="/team" class="header__menu-link" <?php if ($_SERVER['REQUEST_URI'] == '/team') echo 'aria-current="page"'; ?>>Команда</a></li>
                    <li class="header__menu-item"><a href="#sale" class="header__menu-link open-popup-link" role="button" aria-haspopup="dialog" aria-controls="popup-sale">Акция</a></li>
                    <li class="header__menu-item header__menu-item--dropdown">
                        <span class="header__menu-link">Услуги<span class="header__menu-arrow"></span></span>
                        <div class="header__dropdown header__dropdown--services">
                            <div class="header__dropdown-column">
                                <ul class="header__dropdown-list">
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Ремонт квартир под ключ</a></li>
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Ремонт по дизайн проекту</a></li>
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Ремонт новостройки</a></li>
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Ремонт вторичного жилья</a></li>
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Ремонт с перепланировкой</a></li>
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Ремонт коммерческого помещения</a></li>
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Ремонт дома под ключ</a></li>
                                </ul>
                            </div>
                            <div class="header__dropdown-column">
                                <ul class="header__dropdown-list">
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Косметический ремонт</a></li>
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Капитальный ремонт</a></li>
                                    <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Евроремонт квартиры</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="header__contacts">
                    <div class="header__menu-item header__menu-item--dropdown">
                        <span class="header_phone header__menu-link ">+7 (911) 929-77-13<span class="header__menu-arrow"></span></span>
                        <div class="header__dropdown header__dropdown--contacts">
                            <ul class="header__dropdown-list">
                                <li class="header__dropdown-item"><a href="tel:+79119297713" class="header__dropdown-link">+7 (911) 929-77-13</a></li>
                                <li class="header__dropdown-item"><a href="#" class="header__dropdown-link"><b>Санкт-Петербург</b>, Проспект Большевиков 2, 10 парадная</a></li>
                                <li class="header__dropdown-item"><span><b>Без выходных</b> с 10:00 до 20:00</span></li>
                            </ul>
                            <div class="header__dropdown-social">
                                <a href="#" class="header__dropdown-icon"><img src="images/vk.svg" alt="VK"></a>
                                <a href="#" class="header__dropdown-icon"><img src="images/youtube.svg" alt="YouTube"></a>
                                <a href="#" class="header__dropdown-icon"><img src="images/instagram.svg" alt="Instagram"></a>
                                <a href="#" class="header__dropdown-icon"><img src="images/telegram.svg" alt="Telegram"></a>
                            </div>
                        </div>
                    </div>
                    <button class="btn header__btn" aria-label="Оставить заявку">Оставить заявку</button>
                </div>
            </nav>

            <div class="burger-menu">
                <div class="burger-menu__overlay"></div>
                <div class="burger-menu__content">
                    <!-- Верхняя часть меню -->
                    <div class="burger-menu__top">
                        <a href="tel:+79119297713" class="burger-menu__call">
                            <img src="images/call.svg" alt="Звонок">
                        </a>
                        <div class="burger-menu__logo">
                            <img src="images/logo.svg" alt="Периметр Ремонта">
                        </div>
                        <button class="burger-menu__close" aria-label="Закрыть меню">
                            <img src="images/close.svg" alt="Закрыть">
                        </button>
                    </div>

                    <!-- Список меню -->
                    <ul class="burger-menu__list">
                        <li class="burger-menu__item"><a href="/index.php">Ремонт квартир под ключ</a></li>
                        <li class="burger-menu__item"><a href="#">Ремонт по дизайн проекту</a></li>
                        <li class="burger-menu__item"><a href="#">Ремонт новостройки</a></li>
                        <li class="burger-menu__item"><a href="#">Ремонт вторичного жилья</a></li>
                        <li class="burger-menu__item"><a href="#">Ремонт с перепланировкой</a></li>
                        <li class="burger-menu__item"><a href="#">Ремонт коммерческого помещения</a></li>
                        <li class="burger-menu__item"><a href="#">Ремонт дома под ключ</a></li>
                    </ul>

                    <!-- Контакты -->
                    <div class="burger-menu__contacts">
                        <p class="burger-menu__contacts-title">Контакты</p>
                        <a href="tel:+79119297713">+7 (911) 929-77-13</a>
                        <p><span class="span-bold"> Санкт-Петербург</span>, Проспект<br> Большевиков 2, 10 парадная</p>
                        <div class="burger-menu__social">
                            <a href="#"><img src="images/vk.svg" alt="VK"></a>
                            <a href="#"><img src="images/youtube.svg" alt="YouTube"></a>
                            <a href="#"><img src="images/instagram.svg" alt="Instagram"></a>
                            <a href="#"><img src="images/telegram.svg" alt="Telegram"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </header>

    <div class="callback_container">
        <img src="../images/callback.png" alt="Форма обратного звонка" class="callback_img">
    </div>

    <div class="callback-popup">
        <div class="callback-popup__overlay"></div>
        <div class="callback-popup__content">
            <h2 class="callback-popup__title">Заказать звонок</h2>
            <p class="callback-popup__description">Закажите обратный звонок и мы перезвоним вам для консультации</p>
            <form class="callback-popup__form">
                <input type="text" class="callback-popup__input" placeholder="Как Вас зовут?" required>
                <input type="tel" class="callback-popup__input" placeholder="Номер телефона" required>
                <button type="submit" class="callback-popup__button">Заказать звонок</button>
            </form>
            <button class="callback-popup__close" aria-label="Закрыть попап">
                <img src="../images/callback-close.png" alt="Закрыть">
            </button>
            <p class="callback-popup__disclaimer">Нажимая кнопку “Получить подарок” вы автоматически соглашаетесь с политикой обработки персональных данных</p>

        </div>
    </div>