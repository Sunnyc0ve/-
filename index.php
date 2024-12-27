<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php

$page = 'main';
$title = 'Периметр ремонта';
$description = 'Главная страница периметр ремонта';
include 'includes/header.php'; ?>

<main>

    <!-- Главный блок -->

    <section class="main_section dark-grey-bg">
        <div class="container">
            <div class="main_container">
                <div class="main_container-features dark-grey-bg">
                    <h1 class="main_container-title">
                        <span class="span_pc">Безупречный по&nbsp;стилю<br>дизайн интерьера и&nbsp;реализация проекта под ключ.</span>
                        <span class="span_mob">Безупречный по<br>стилю дизайн интерьера и&nbsp;реализация проекта под&nbsp;ключ</span>
                    </h1>
                    <div class="main_features">
                        <p>Выгода до&nbsp;15% за&nbsp;счет связки: дизайн+строители+подрядчики</p>
                        <p>Твердые сроки сдачи, внесенные в&nbsp;договор</p>
                    </div>
                </div>
                <div class="main_container-stats">
                    <div class="main_stat main_stat1 dark-grey-bg">
                        <h3 class="main_title-h3"><span class="main_title-num">5</span><br> Лет нашей компании</h3>
                    </div>
                    <div class="main_stat main_stat2 dark-grey-bg">
                        <h3 class="main_title-h3"><span class="main_title-num">400+</span><br> Проектов реализовано</h3>
                    </div>
                    <div class="main_stat main_stat3 dark-grey-bg">
                        <h3 class="main_title-h3"><span class="main_title-num">200+</span><br> Отзывов на&nbsp;Яндекс картах и&nbsp;2ГИС</h3>
                    </div>
                </div>
                <button class="btn main_btn" type="button">Посмотреть отзывы</button>
                <div class="main_video-container">
                    <video src="videos/mainvid.mp4" class="main_video" autoplay muted loop aria-label="Видеопрезентация интерьера.">Ваш браузер не поддерживает видео.</video>
                </div>
            </div>
        </div>
    </section>

    <!-- Акция -->

    <section class="sale_section">
        <div class="container light-grey-bg">
            <div class="sale_container">
                <div class="sale_container-title">
                    <h2 class="title sale_title">Акция</h2>
                </div>
                <div class="sale_container-content">
                    <div class="sale_container-desk">
                        <h3 class="sale_subtitle">Технический дизайн-проект <span class="span-bold">в&nbsp;подарок</span></h3>
                        <p class="sale_desk">Планировочное решение, электрика и&nbsp;сантехника для старта работ</p>
                    </div>
                    <form class="sale_form" action="#" method="post">
                        <input type="text" class="sale_form-input" name="name" placeholder="Как вас зовут?" autocomplete="name" required pattern="[A-Za-zА-Яа-яЁё\s]+">
                        <input type="tel" class="sale_form-input" name="phone" placeholder="Номер телефона" autocomplete="tel" required pattern="[0-9]{10}">
                        <button type="submit" class="sale_form-button">Получить подарок</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="features_section">
        <div class="container">
            <div class="features_container">
                <div class="features_container-desk">
                    <h2 class="title title features_title">Комплексный подход</h2>
                    <p class="features_desk">
                        Мы&nbsp;берем на&nbsp;себя все этапы, начиная с&nbsp;тщательного дизайн-проекта
                        и&nbsp;заканчивая полной сдачей готового объекта. Высокое качество и&nbsp;полное сопровождение
                        на&nbsp;каждом этапе&nbsp;&mdash; для вашего комфорта и&nbsp;спокойствия.
                    </p>
                </div>
                <div class="features_container-main">
                    <div class="features_container-accordion">
                        <div class="features_accordion-item" data-target="description1">
                            <p class="features_accordion-header">
                                <span class="features_header">Дизайн интерьера</span>
                                <span class="features_accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                                        <path d="M2.375 2.30664L9.68698 8.15622L16.999 2.30664" stroke="#232323" stroke-width="2.99269" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </p>
                            <div class="features_description" id="description1">
                                Дизайн-проект является важной частью процесса ремонта, которая помогает
                                правильно распланировать пространство, точно рассчитать расположение коммуникаций
                                и&nbsp;электрических выводов, а&nbsp;также помогает сэкономить деньги в&nbsp;процессе его реализации.<br>
                                Проект с&nbsp;3D-визуализацией включает в&nbsp;себя разработку концепции и&nbsp;стиля,
                                создание планов и&nbsp;чертежей, выбор материалов и&nbsp;мебели.
                            </div>
                        </div>
                        <div class="features_accordion-item" data-target="description2">
                            <p class="features_accordion-header">
                                <span class="features_header">Ремонт высокого качества</span>
                                <span class="features_accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                                        <path d="M2.375 2.30664L9.68698 8.15622L16.999 2.30664" stroke="#232323" stroke-width="2.99269" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </p>
                            <div class="features_description" id="description2" hidden>
                                Ремонт высокого качества является залогом счастливой жизни в&nbsp;будущем.
                                Главной задачей нашей команды является сделать процесс ремонта комфортным для наших Заказчиков.<br>
                                У&nbsp;нас честный Договор, чёткое соблюдение сроков и&nbsp;технические надзор на&nbsp;всех этапах работ.
                            </div>
                        </div>
                        <div class="features_accordion-item" data-target="description3">
                            <p class="features_accordion-header">
                                <span class="features_header">Комплектация объекта</span>
                                <span class="features_accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                                        <path d="M2.375 2.30664L9.68698 8.15622L16.999 2.30664" stroke="#232323" stroke-width="2.99269" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </p>
                            <div class="features_description" id="description3" hidden>
                                Подбор чистовых отделочных материалов&nbsp;&mdash; это очень трудоёмкий процесс. Наши специалисты помогут определиться с&nbsp;выбором любых чистовых материалов, подобрать каждому индивидуально дизайнерское световое решение, подробно сделать просчёт выбранных позиции у&nbsp;различных поставщиков, а&nbsp;также организовать доставку на&nbsp;объект и&nbsp;проверят качество товара. Именно услуга Комплектации объекта позволяет сэкономить Вам деньги и&nbsp;Ваше время.
                            </div>
                        </div>
                        <div class="features_accordion-item" data-target="description4">
                            <p class="features_accordion-header">
                                <span class="features_header">Меблирование объекта</span>
                                <span class="features_accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                                        <path d="M2.375 2.30664L9.68698 8.15622L16.999 2.30664" stroke="#232323" stroke-width="2.99269" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </p>
                            <div class="features_description" id="description4" hidden>
                                На&nbsp;этапе разработки дизайн-проекта дизайнеры тщательно продумывают наличие мебели под особенности, потребности и&nbsp;требования каждого Заказчика.
                                Уже много лет мы&nbsp;реализовываем различные решения по&nbsp;изготовлению мебели на&nbsp;заказ, что позволяет правильно использовать пространство и&nbsp;сделать необходимое наполнение для каждого Заказчика индивидуально.<br>
                                Это неотъемлемая часть сдачи объекта, которая обеспечивает окончательное визуальное восприятие реализованного дизайн-проекта.
                            </div>
                        </div>
                    </div>
                    <div class="features_container-description">
                        <div class="features_description" id="description1">
                            Дизайн-проект является важной частью процесса ремонта, которая помогает
                            правильно распланировать пространство, точно рассчитать расположение коммуникаций
                            и&nbsp;электрических выводов, а&nbsp;также помогает сэкономить деньги в&nbsp;процессе его реализации.<br>
                            Проект с&nbsp;3D-визуализацией включает в&nbsp;себя разработку концепции и&nbsp;стиля,
                            создание планов и&nbsp;чертежей, выбор материалов и&nbsp;мебели.
                        </div>
                        <div class="features_description" id="description2" hidden>
                            Ремонт высокого качества является залогом счастливой жизни в&nbsp;будущем.
                            Главной задачей нашей команды является сделать процесс ремонта комфортным для наших Заказчиков.<br>
                            У&nbsp;нас честный Договор, чёткое соблюдение сроков и&nbsp;технические надзор на&nbsp;всех этапах работ.
                        </div>
                        <div class="features_description" id="description3" hidden>
                            Подбор чистовых отделочных материалов&nbsp;&mdash; это очень трудоёмкий процесс. Наши специалисты помогут определиться с&nbsp;выбором любых чистовых материалов, подобрать каждому индивидуально дизайнерское световое решение, подробно сделать просчёт выбранных позиции у&nbsp;различных поставщиков, а&nbsp;также организовать доставку на&nbsp;объект и&nbsp;проверят качество товара. Именно услуга Комплектации объекта позволяет сэкономить Вам деньги и&nbsp;Ваше время.
                        </div>
                        <div class="features_description" id="description4" hidden>
                            На&nbsp;этапе разработки дизайн-проекта дизайнеры тщательно продумывают наличие мебели под особенности, потребности и&nbsp;требования каждого Заказчика.
                            Уже много лет мы&nbsp;реализовываем различные решения по&nbsp;изготовлению мебели на&nbsp;заказ, что позволяет правильно использовать пространство и&nbsp;сделать необходимое наполнение для каждого Заказчика индивидуально.<br>
                            Это неотъемлемая часть сдачи объекта, которая обеспечивает окончательное визуальное восприятие реализованного дизайн-проекта.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Акция попап мобилка -->

    <section class="mobsale_section">
        <div class="container dark-grey-bg">
            <div class="mobsale_container">
                <div class="mobsale_container-title">
                    <p class="mobsale_title">Акция</p>
                </div>
                <p class="mobsale_subtitle">Технический дизайн-<br>проект в&nbsp;подарок</p>
                <p class="mobsale_desk">Планировочное решение, электрика и&nbsp;сантехника для старта работ</p>
                <div class="mobsale_container-form">
                    <form action="#" class="mobsale_form">
                        <input type="text" class="mobsale_form-input" name="name" placeholder="Как вас зовут?" autocomplete="name" required pattern="[A-Za-zА-Яа-яЁё\s]+">
                        <input type="tel" class="mobsale_form-input" name="phone" placeholder="Номер телефона" autocomplete="tel" required pattern="[0-9]{10}">
                        <button type="submit" class="mobsale_form-button">Получить подарок</button>
                    </form>
                    <p class="mobsale_disclaimer">Нажимая кнопку &laquo;Получить подарок&raquo; вы&nbsp;автоматически соглашаетесь с&nbsp;политикой обработки персональных данных</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Работы -->

    <section class="case_section">
        <div class="container">
            <div class="case_container">
                <h2 class="title case_title">Наши работы</h2>
                <div class="case_container-grid case_grid-first-row">
                    <div class="case_grid-item">
                        <a href="/ChernayaRechka70.php" class="case_link">
                            <div class="case_item-video">
                                <video class="case_video" aria-label="Видео ЖК 'Черная речка' 70 кв.м" muted loop playsinline poster="">
                                    <source src="videos/Zk-Black-River-70.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <p class="case_item-desk">ЖК «Черная речка» 70кв.м</p>
                            </div>
                        </a>
                        <a href="/ChernayaRechka70.php" class="btn case_item-btn" aria-label="Подробнее о ЖК 'Черная речка' 70 кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <a href="/ChernayaRechka38.php" class="case_link">
                            <div class="case_item-video">
                                <video class="case_video" aria-label="ЖК «Черная речка» 38кв.м" muted loop playsinline poster="">
                                    <source src="videos/Zk-Black-River-38.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <p class="case_item-desk">ЖК «Черная речка» 38кв.м</p>
                            </div>
                        </a>
                        <a href="/ChernayaRechka38.php" class="btn case_item-btn" aria-label="Подробнее о ЖК «Черная речка» 38кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <a href="/panoramapark70.php" class="case_link">
                            <div class="case_item-video">
                                <video class="case_video" aria-label="ЖК «Панарама парк» 70кв.м" muted loop playsinline poster="">
                                    <source src="videos/Zk-Panorama-Park-70.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <p class="case_item-desk">ЖК «Панарама парк» 70кв.м</p>
                            </div>
                        </a>
                        <a href="/panoramapark70.php" class="btn case_item-btn" aria-label="Подробнее о ЖК «Панарама парк» 70кв.м">Подробнее</a>
                    </div>
                </div>
                <div class="case_container-grid case_grid-second-row">
                    <div class="case_grid-item">
                        <a href="/Domino62.php" class="case_link">
                            <div class="case_item-video">
                                <video class="case_video" aria-label="ЖК «Домино» 62кв.м" muted loop playsinline poster="">
                                    <source src="videos/Zk-Domino-62.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <p class="case_item-desk">ЖК «Домино» 62кв.м</p>
                            </div>
                        </a>
                        <a href="/Domino62.php" class="btn case_item-btn" aria-label="Подробнее о ЖК «Домино» 62кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <a href="/Galaxy38.php" class="case_link">
                            <div class="case_item-video">
                                <video class="case_video" aria-label="ЖК «Галактика» 38кв.м" muted loop playsinline poster="">
                                    <source src="videos/Zk-Galaxy-38.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <p class="case_item-desk">ЖК «Галактика» 38кв.м</p>
                            </div>
                        </a>
                        <a href="/Galaxy38.php" class="btn case_item-btn" aria-label="Подробнее о ЖК «Галактика» 38кв.м">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Процесс работы -->

    <section class="process_section">
        <div class="container light-grey-bg">
            <div class="process_container">
                <h2 class="title process_title">Процесс работы</h2>
                <ol class="process_container-stages">
                    <li class="process_stages-item">
                        <p class="process_item-num">01</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Заявка</h3>
                            <p class="process_content-desk">Заполните простую форму и&nbsp;получите индивидуальное предложение от&nbsp;нашей команды</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">02</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Консультация </h3>
                            <p class="process_content-desk">Обсудите свои пожелания с&nbsp;нашими специалистами и&nbsp;получите профессиональные советы</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">03</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Показ реальных объектов</h3>
                            <p class="process_content-desk">Посмотрите завершенные проекты и&nbsp;убедитесь в&nbsp;высоком качестве нашей работы</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">04</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Заключение договора</h3>
                            <p class="process_content-desk">Обсудите все условия и&nbsp;подпишите договор, чтобы начать ваш проект без лишних забот</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">05</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Разработка дизайн-проекта</h3>
                            <p class="process_content-desk">Наша команда разработает индивидуальный дизайн-проект, соответствующий вашим предпочтениям</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">06</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Реализация</h3>
                            <p class="process_content-desk">Наша команда приступает к&nbsp;ремонту, уважая сроки и&nbsp;обеспечивая высокое качество</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">07</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Сдача объекта “под тапочки”</h3>
                            <p class="process_content-desk">После завершения всех работ мы&nbsp;передаем квартиру в&nbsp;идеальном состоянии, готовую к&nbsp;вашему проживанию</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Форма -->

    <section class="form_section">
        <div class="container dark-grey-bg">
            <div class="form_container">
                <p class="title form_title">Готовы обсудить проект?</p>
                <p class="form_desk">Оставьте заявку, и&nbsp;мы&nbsp;обсудим Ваш бюджет и&nbsp;пожелания, сориентируем по&nbsp;срокам и&nbsp;стоимости дизайн проекта и&nbsp;ремонта Вашей квартиры.</p>
                <div class="form_container-form">
                    <form action="#" class="form_form">
                        <input type="text" class="form_form-input" name="name" placeholder="Как вас зовут?" autocomplete="name" required pattern="[A-Za-zА-Яа-яЁё\s]+">
                        <input type="tel" class="form_form-input" name="phone" placeholder="Номер телефона" autocomplete="tel" required pattern="[0-9]{10}">
                        <button type="submit" class="form_form-button">Обсудить проект</button>
                    </form>
                    <p class="form_disclaimer">Нажимая кнопку &laquo;Обсудить проект&raquo; вы&nbsp;автоматически соглашаетесь с&nbsp;политикой обработки персональных данных</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Социальные сети -->

    <section class="social_section">
        <div class="container">
            <div class="social_container">
                <h2 class="title social_title">Следите за&nbsp;нами в&nbsp;соцсетях</h2>
                <div class="social_container-content">
                    <div class="social_content-img">
                        <img src="images/social_img-1.png" alt="" class="social_img social_img1">
                        <img src="images/social_img-2.png" alt="" class="social_img social_img2">
                        <img src="images/social_img-3.png" alt="" class="social_img social_img3">
                    </div>
                    <div class="social_content-content">
                        <div class="social_container-desk">
                            <p class="social_desk">Подписывайтесь на&nbsp;наш Instagram*, чтобы следить за&nbsp;нашими работами, вдохновляться новыми трендами и&nbsp;получать полезные советы по&nbsp;оформлению интерьера!</p>
                            <p class="social_desk">Подписывайтесь на&nbsp;наш канал, чтобы увидеть видеоролики с&nbsp;процессами ремонта, советы от&nbsp;профессионалов и&nbsp;полезные гайды, которые помогут вам в&nbsp;подготовке к&nbsp;ремонту.</p>
                            <p class="social_desk">Присоединяйтесь к&nbsp;нашему сообществу, где мы&nbsp;делимся интересными статьями, новостями компании и&nbsp;акциями. Здесь вы&nbsp;можете задать вопросы и&nbsp;получить консультации от&nbsp;наших специалистов.</p>
                        </div>
                        <div class="social_content-buttons">
                            <button class="social_button" aria-label="Выбрать Instagram">Instagram*</button>
                            <button class="social_button" aria-label="Выбрать YouTube">YouTube</button>
                            <button class="social_button" aria-label="Выбрать Vk">Vk</button>
                        </div>
                        <a href="#" class="btn social_content-button" aria-label="Перейти на страницу социальных сетей">Перейти</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- До/после -->

    <section class="comparison_section">
        <div class="container">
            <h2 class="title comparison_title">
                <span class="title comparison_title-main">Визуализация проектов до/после<br></span>
                <span class="comparison_title-sub">
                    как наши проекты воплощаются в&nbsp;жизнь
                </span>
            </h2>

            <div class="comparison_container">
                <!-- Первый слайдер -->
                <div class="comparison_slider">
                    <div class="comparison_images">
                        <div class="comparison_image comparison_image--before">
                            <img src="images/comparison_image1.jpg" alt="3D визуализация 1">
                        </div>
                        <div class="comparison_image comparison_image--after">
                            <img src="images/comparison_image2.jpg" alt="Реализация 1">
                        </div>
                    </div>
                    <div class="comparison_handle">
                        <div class="comparison_control">
                            <span>(⠀)</span>
                        </div>
                    </div>
                    <div class="comparison_labels">
                        <span class="comparison_label comparison_label--before">3D визуализация</span>
                        <span class="comparison_label comparison_label--after">Реализация</span>
                    </div>
                </div>

                <!-- Второй слайдер -->
                <div class="comparison_slider">
                    <div class="comparison_images">
                        <div class="comparison_image comparison_image--before">
                            <img src="images/comparison_image3.jpg" alt="3D визуализация 2">
                        </div>
                        <div class="comparison_image comparison_image--after">
                            <img src="images/comparison_image4.jpg" alt="Реализация 2">
                        </div>
                    </div>
                    <div class="comparison_handle">
                        <div class="comparison_control">
                            <span>(⠀)</span>
                        </div>
                    </div>
                    <div class="comparison_labels">
                        <span class="comparison_label comparison_label--before">3D визуализация</span>
                        <span class="comparison_label comparison_label--after">Реализация</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Видеоотзывы -->

    <section class="vidr_section">
        <div class="container">
            <div class="vidr_container">
                <h2 class="title vidr_title">
                    <span class="title vidr_title-main">Наша команда</span>
                    <span class="vidr_title-sub">
                        выполнила более 400-х дизайнерских ремонтов квартир за&nbsp;5&nbsp;лет работы с&nbsp;отзывами на&nbsp;5&nbsp;баллов:
                    </span>
                </h2>
                <div class="vidr_slider">
                    <div class="vidr_track">
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_1.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_2.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_3.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_4.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_5.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_6.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_7.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_8.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_9.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_10.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_11.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_12.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_13.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_14.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_15.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_16.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_17.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_18.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                        <div class="vidr_slide">
                            <div class="vidr_video_wrapper">
                                <video class="vidr_video" playsinline poster="">
                                    <source src="videos/vidr_19.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                <div class="vidr_overlay">
                                    <button class="play_button"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Боли -->

    <section class="pain_section">
        <div class="container">
            <div class="pain_container-content light-grey-bg">
                <h2 class="title-sm pain_content-title"><span class="span-bold">8&nbsp;проблем ремонта</span> без дизайн-проекта</h2>
                <p class="pain_content-desk">о&nbsp;которых рассказали больше 100 наших клиентов</p>
                <ol class="pain_content-list">
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">01</p>
                            <p class="pain_item-desk">Постоянная <span class="span-bold">потеря времени</span> на&nbsp;согласования и&nbsp;форс-мажоры</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">02</p>
                            <p class="pain_item-desk"><span class="span-bold">Непредвиденные траты</span> на&nbsp;то, чего не&nbsp;хватило или по&nbsp;другой стоимости</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">03</p>
                            <p class="pain_item-desk"><span class="span-bold">Ошибки монтажа:</span> то&nbsp;душ короткий, то&nbsp;двери шкафов не&nbsp;открываются</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">04</p>
                            <p class="pain_item-desk"><span class="span-bold">Внезапный рост стоимости</span> работ из-за того, что никто не&nbsp;уточнил деталей</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">05</p>
                            <p class="pain_item-desk">Понравились обои в&nbsp;магазине, а&nbsp;дома на&nbsp;стене пестрят. <span class="span-bold">Нет единого стиля</span></p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">06</p>
                            <p class="pain_item-desk">Большая площадь, а&nbsp;<span class="span-bold">места совсем нет</span> из-за наставленной повсюду мебели</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">07</p>
                            <p class="pain_item-desk">Куча лампочек, а&nbsp;в&nbsp;помещении <span class="span-bold">темно. Выбивает счётчик</span> от&nbsp;чайника или СВЧ</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">08</p>
                            <p class="pain_item-desk">Купили материалы <span class="span-bold">сильно дороже</span>, чем увидели позже в&nbsp;другом магазине</p>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="pain_container-form dark-grey-bg">
                <h2 class="title-sm pain_form-title">Узнайте как дизайн-проект решает эти 8&nbsp;проблем</h2>
                <p class="pain_form-desk">И&nbsp;сохраняет до&nbsp;15% вашего бюджета</p>
                <img src="images/pain_form-img.png" alt="" class="pain_form-img">
                <div class="pain_form-content">
                    <form action="" class="pain_form">
                        <input type="text" class="pain_form-input" name="name" placeholder="Как вас зовут?" autocomplete="name" required pattern="[A-Za-zА-Яа-яЁё\s]+">
                        <input type="tel" class="pain_form-input" name="phone" placeholder="Номер телефона" autocomplete="tel" required pattern="[0-9]{10}">
                        <button type="submit" class="pain_form-btn">Получить материал</button>
                    </form>
                </div>
                </img>
            </div>
        </div>
    </section>

    <!-- Тарифы с формой -->

    <section class="tarif_section">
        <div class="container dark-grey-bg">
            <div class="tarif_container">
                <h2 class="title tarif_title_mob">Стоимость и&nbsp;состав<br> дизайн-проекта</h2>
                <div class="tarif_container-item">
                    <div class="tarif_item dark-grey-bg">
                        <h2 class="tarif_title">Полный проект<br>+&nbsp;бюджетирование</h2>
                        <ol class="tarif_list">
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Планировочное решение</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Визуализация</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk has-dropdown">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">
                                        <span class="tarif_desk-text">Рабочие чертежи</span>
                                        <span class="tarif_list-arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                                                <path d="M2.375 2.30664L9.68698 8.15622L16.999 2.30664" stroke="#232323" stroke-width="2.99269" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                                <ul class="tarif_dropdown-list">
                                    <li>Обмерный план</li>
                                    <li>Планировочное решение</li>
                                    <li>План расстановки мебели</li>
                                    <li>План демонтажа и&nbsp;монтажа</li>
                                    <li>План дверных проёмов</li>
                                    <li>План электрики (освещение, розетки, выключатели)</li>
                                    <li>План сантехнических приборов</li>
                                    <li>План потолков</li>
                                    <li>План тёплых полов</li>
                                    <li>План пола с&nbsp;указанием типа покрытия и&nbsp;направлением раскладки</li>
                                    <li>Развёртки санузлов с&nbsp;раскладкой плитки</li>
                                </ul>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Подбор мебели<br> и&nbsp;материалов</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Таблица бюджетирования<br> +&nbsp;подбор аналогов</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Оформление заказов,<br> контроль и&nbsp;координация доставки</p>
                                    <img src="images/tarif_minus.svg" alt="Минус" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">3D Тур</p>
                                    <img src="images/tarif_minus.svg" alt="Минус" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <p class="tarif_item-price">3 900₽ / М2</p>
                            <a href="" class="btn tarif_item-case">Пример дизайн-проекта</a>
                            <button class="btn tarif_list-btn">Выбрать тариф</button>
                        </ol>
                    </div>
                    <div class="tarif_item grey-bg">
                        <h2 class="tarif_title">Полный проект<br>+&nbsp;комплектация</h2>
                        <ol class="tarif_list">
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Планировочное решение</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Визуализация</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk has-dropdown">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">
                                        <span class="tarif_desk-text">Рабочие чертежи</span>
                                        <span class="tarif_list-arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                                                <path d="M2.375 2.30664L9.68698 8.15622L16.999 2.30664" stroke="#232323" stroke-width="2.99269" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                                <ul class="tarif_dropdown-list">
                                    <li>Обмерный план</li>
                                    <li>Планировочное решение</li>
                                    <li>План расстановки мебели</li>
                                    <li>План демонтажа и&nbsp;монтажа</li>
                                    <li>План дверных проёмов</li>
                                    <li>План электрики (освещение, розетки, выключатели)</li>
                                    <li>План сантехнических приборов</li>
                                    <li>План потолков</li>
                                    <li>План тёплых полов</li>
                                    <li>План пола с&nbsp;указанием типа покрытия и&nbsp;направлением раскладки</li>
                                    <li>Развёртки санузлов с&nbsp;раскладкой плитки</li>
                                </ul>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Подбор мебели<br> и&nbsp;материалов</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Таблица бюджетирования<br> +&nbsp;подбор аналогов</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Оформление заказов,<br> контроль и&nbsp;координация доставки</p>
                                    <img src="images/tarif_plus.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">3D Тур</p>
                                    <img src="images/tarif_minus.svg" alt="Минус" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <p class="tarif_item-price">4 900₽ / М2</p>
                            <a href="" class="btn tarif_item-case">Пример дизайн-проекта</a>
                            <button class="btn tarif_list-btn">Выбрать тариф</button>
                        </ol>
                    </div>
                    <div class="tarif_item light-grey-bg">
                        <h2 class="tarif_title">Полный проект<br>+&nbsp;комплектация +&nbsp;3D тур</h2>
                        <ol class="tarif_list">
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Планировочное решение</p>
                                    <img src="images/tarif_plus-black.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Визуализация</p>
                                    <img src="images/tarif_plus-black.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk has-dropdown">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">
                                        <span class="tarif_desk-text">Рабочие чертежи</span>
                                        <span class="tarif_list-arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                                                <path d="M2.375 2.30664L9.68698 8.15622L16.999 2.30664" stroke="#232323" stroke-width="2.99269" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </p>
                                    <img src="images/tarif_plus-black.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                                <ul class="tarif_dropdown-list">
                                    <li>Обмерный план</li>
                                    <li>Планировочное решение</li>
                                    <li>План расстановки мебели</li>
                                    <li>План демонтажа и&nbsp;монтажа</li>
                                    <li>План дверных проёмов</li>
                                    <li>План электрики (освещение, розетки, выключатели)</li>
                                    <li>План сантехнических приборов</li>
                                    <li>План потолков</li>
                                    <li>План тёплых полов</li>
                                    <li>План пола с&nbsp;указанием типа покрытия и&nbsp;направлением раскладки</li>
                                    <li>Развёртки санузлов с&nbsp;раскладкой плитки</li>
                                </ul>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Подбор мебели<br> и&nbsp;материалов</p>
                                    <img src="images/tarif_plus-black.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Таблица бюджетирования<br> +&nbsp;подбор аналогов</p>
                                    <img src="images/tarif_plus-black.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Оформление заказов,<br> контроль и&nbsp;координация доставки</p>
                                    <img src="images/tarif_plus-black.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">3D Тур</p>
                                    <img src="images/tarif_plus-black.svg" alt="Плюс" class="tarif_list-icon"></img>
                                </div>
                            </li>
                            <p class="tarif_item-price">5 900₽ / М2</p>
                            <a href="" class="btn tarif_item-case">Пример дизайн-проекта</a>
                            <button class="btn tarif_list-btn">Выбрать тариф</button>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="tarif_form-content">
                <p class="title-sm tarif_form-title">Запишитесь на&nbsp;экскурсию по&nbsp;текущим объктам</p>
                <p class="tarif_form-desk">Заполните форму. Мы&nbsp;свяжемся с&nbsp;вами и&nbsp;согласуем экскурсию</p>
                <div class="tarif_container-form">
                    <form action="#" class="tarif_form">
                        <input type="text" class="tarif_form-input" name="name" placeholder="Как вас зовут?" autocomplete="name" required pattern="[A-Za-zА-Яа-яЁё\s]+">
                        <input type="tel" class="tarif_form-input" name="phone" placeholder="Номер телефона" autocomplete="tel" required pattern="[0-9]{10}">
                        <button type="submit" class="tarif_form-button">Записаться на&nbsp;экскурсию!</button>
                    </form>
                    <p class="tarif_disclaimer">Нажимая кнопку &laquo;Записаться на&nbsp;экскурсию!&raquo; вы&nbsp;автоматически соглашаетесь с&nbsp;политикой обработки персональных данных</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Карта -->

    <section class="map_section">
        <div class="container">
            <div class="map_container">
                <img src="images/map.jpg" alt="" class="map">
                <!-- <iframe src="" frameborder="0"> -->
                </iframe>
            </div>
        </div>
    </section>

    <!-- Контакты -->

    <section class="cont_section">
        <div class="container">
            <div class="cont_container">
                <div class="cont_container-item grey-bg">
                    <p class="cont_title">Контакты</p>
                    <div class="cont_content">
                        <p class="cont_desk">+7 (911) 929-77-13</p>
                        <button class="btn cont_btn">Получить консультацию</button>
                    </div>
                </div>
                <div class="cont_container-item ">
                    <p class="cont_title">Социальные сети</p>
                    <div class="cont_content">
                        <div class="cont_container-icon">
                            <img src="images/vk.svg" alt="VK" class="cont_icon">
                            <img src="images/youtube.svg" alt="YouTube" class="cont_icon">
                            <img src="images/instagram.svg" alt="Instagram" class="cont_icon">
                            <img src="images/telegram.svg" alt="Telegram" class="cont_icon">
                        </div>
                    </div>
                </div>
                <div class="cont_container-item">
                    <p class="cont_title">Наш адрес</p>
                    <div class="cont_content">
                        <p class="cont_desk"><span class="span-bold"> Санкт-Петербург</span>, Проспект Большевиков&nbsp;2, 10&nbsp;парадная</p>
                        <p class="cont_desk">Будем рады видеть вас в&nbsp;нашем офисе или встретиться на&nbsp;вашем объекте.</p>
                    </div>
                </div>
            </div>
    </section>


</main>
<?php include 'includes/footer.php'; ?>