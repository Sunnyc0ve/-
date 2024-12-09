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
                        <span class="header__menu-link">Услуги</span>
                        <div class="header__dropdown">
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
                    <p class="header_phone">+7 (911) 929-77-13</p>
                    <button class="btn header__btn" aria-label="Оставить заявку">Оставить заявку</button>

                </div>
            </nav>
        </div>
        </div>
    </header>