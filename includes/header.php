<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Периметр ремонта</title>
    <link rel="stylesheet" href="<?php echo 'css/style.css'; ?>">


</head>

<body>
    <header class="header">
        <div class="container header__container">
            <div class="header__logo-container">
                <a href="/" class="header__logo-link">
                    <img src="images/logo.svg" alt="Логотип компании Периметр Ремонта" class="header__logo-img">
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
                    <li class="header__menu-item"><a href="#sale" class="header__menu-link" role="button" aria-haspopup="dialog" aria-controls="popup-sale">Акция</a></li>
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
        </div>
        </nav>
        </div>
        </div>
    </header>