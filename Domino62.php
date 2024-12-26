<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php
$page = 'case';
$title = 'Домино 62кв.м';
$description = 'Наш проект Домино 62кв.м';
include 'includes/header.php'; ?>

<main>

    <!-- Главный блок -->

    <section class="main_section dark-grey-bg">
        <div class="container">
            <div class="main_container">
                <div class="main_container-features dark-grey-bg">
                    <h1 class="main_container-title">
                        Дизайнерский ремонт<br> однокомнатной квартиры
                    </h1>
                    <div class="main_features">
                        <p>Нашей командой был разработан<br>дизайн-проект и&nbsp;выполнен ремонт для молодого<br>IT-специалиста в&nbsp;однокомнатной квартире<br>в&nbsp;современном стиле.</p>
                    </div>
                </div>
                <div class="main_container-stats dark-grey-bg">
                    <div class="main_stat">
                        <div class="main_stat-container">
                            <p class="main_title-num">Площадь объекта</p>
                            <p class="main_title-h3">38 м²</p>
                        </div>
                        <img src="../images/square.png" alt="" class="main_stat-img">
                    </div>
                    <div class="main_stat">
                        <div class="main_stat-container">
                            <p class="main_title-num">Срок реализации</p>
                            <p class="main_title-h3">3 месяца</p>
                        </div>
                        <img src="../images/date.png" alt="" class="main_stat-img">
                    </div>
                    <div class="main_stat">
                        <div class="main_stat-container">
                            <p class="main_title-num">Локация</p>
                            <p class="main_title-h3">ЖК «Черная речка»</p>
                        </div>
                        <img src="../images/location.png" alt="" class="main_stat-img">
                    </div>
                </div>
                <div class="main_video-container">
                    <video src="videos/mainvid.mp4" class="main_video" autoplay muted loop aria-label="Видеопрезентация интерьера.">Ваш браузер не поддерживает видео.</video>
                </div>
            </div>
        </div>
    </section>

    <!-- ОПИСАНИЕ ПРОЕКТА -->

    <section class="casedesk_section">
        <div class="container">
            <div class="casedesk_container">
                <h2 class="title casedesk_title">Минимализм, функциональность и&nbsp;эстетика</h2>
                <p class="casedesk_desk">К&nbsp;нам обратился молодой IT-специалист, который ценит не&nbsp;только удобство, но&nbsp;и&nbsp;эстетику. Наша команда строителей воплотила его мечты в&nbsp;реальность, превратив небольшое пространство в&nbsp;идеальный микс технологий и&nbsp;стиля.</p>
                <div class="casedesk_container-img">
                    <img src="../images/casedesk_desk-1.jpg" alt="" class="casedesk_img casedesk_img1">
                    <img src="../images/casedesk_desk-2.jpg" alt="" class="casedesk_img casedesk_img2">
                </div>
            </div>
        </div>
    </section>

    <!-- ЭТАПЫ РАБОТ -->

    <section class="process_section">
        <div class="container">
            <div class="process_container">
                <h2 class="title process_title">Этапы работ</h2>
                <p class="process_desk">Процесс работы был разделён на&nbsp;чёткие этапы, чтобы ремонт шёл последовательно и&nbsp;с&nbsp;соблюдением сроков. Благодаря этому наш заказчик всегда знал, над чем работает наша команда, и&nbsp;какой этап будет следующим.</p>
                <ol class="process_container-stages">
                    <li class="process_stages-item">
                        <p class="process_item-num">1</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Разработка дизайн-проекта</h3>
                            <p class="process_content-desk">Мы&nbsp;начали создание дизайн-проекта квартиры площадью 38&nbsp;м&sup2; с&nbsp;детального обсуждения образа жизни и&nbsp;предпочтений заказчика. Затем разработали концепцию, учитывающую его привычки: в&nbsp;кухне-гостиной создано уютное и&nbsp;практичное пространство, идеально подходящее для отдыха и&nbsp;приёма гостей, спальня отделена раздвижной дверью, где есть функциональное рабочее место.</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">2</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Подготовка и&nbsp;планирование</h3>
                            <p class="process_content-desk">Мы&nbsp;начали проект с&nbsp;тщательной подготовки и&nbsp;планирования. Провели несколько встреч с&nbsp;нашим заказчиком, составили детальный план работ и&nbsp;бюджет, чтобы клиент мог быть уверен в&nbsp;прозрачности и&nbsp;эффективности нашего подхода.</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">3</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Демонтажные работы</h3>
                            <p class="process_content-desk">В&nbsp;рамках демонтажных работ мы&nbsp;сносили старые перегородки и&nbsp;формировали проём для установки раздвижной двери, учитывая технические требования и&nbsp;эстетический аспект.</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">4</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Подготовительные черновые работы</h3>
                            <p class="process_content-desk">На&nbsp;этапе черновых работ было выполнено оштукатуривание стен под маяк, произведены черновые электромонтажные и&nbsp;сантехнические работы, а&nbsp;также выравнивание пола под напольное покрытие.</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">5</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Отделочные работы</h3>
                            <p class="process_content-desk">После завершения черновых работ мы&nbsp;выполнили чистовые отделочные работы, а&nbsp;именно: монтировали натяжной потолок, окрасили стены в&nbsp;светлых тонах, уложили паркетную доску на&nbsp;пол в&nbsp;спальне, плитку&nbsp;&mdash; на&nbsp;кухне и&nbsp;в&nbsp;коридоре. В&nbsp;санузле залили подиум и&nbsp;уложили бело-серый широкоформатный керамогранит.</p>
                        </div>
                    </li>
                    <li class="process_stages-item">
                        <p class="process_item-num">6</p>
                        <div class="process_item-content">
                            <h3 class="process_content-heading">Финальная чистка и&nbsp;завершение</h3>
                            <p class="process_content-desk">После завершения всех отделочных работ на&nbsp;объекте, нашими специалистами была установлена кухня и&nbsp;мебель под заказ. Также мы&nbsp;организовали профессиональный клининг!</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- РЕЗУЛЬТАТ РАБОТ -->

    <section class="result_section">
        <div class="container">
            <div class="result_container">
                <h2 class="title result_title">Итоговый результат</h2>
                <div class="result_container-img">
                    <img src="../images/result_desk-1.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-2.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-3.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-4.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-5.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-6.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-7.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-8.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-9.jpg" alt="" class="result_img">
                    <img src="../images/result_desk-10.jpg" alt="" class="result_img">
                </div>
            </div>
        </div>
    </section>

    <!-- ВИДЕООБЗОР -->

    <section class="video_section">
        <div class="container">
            <h2 class="title video_title">Почувствуйте атмосферу реализованного проекта</h2>
            <div class="video_container">
                <video playsinline poster="">
                    <source src="videos/mainvid.mp4" type="video/mp4">
                    Ваш браузер не поддерживает видео.
                </video>
                <div class="video_overlay">
                    <button class="play_button"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- ФОРМА -->

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

    <!-- ДИЗАЙН ПРОЕКТ -->

    <section class="depro_section">
        <div class="container">
            <div class="depro_container">
                <h2 class="title depro_title">Дизайн-проект</h2>
                <p class="depro_desk">Задача дизайн-проекта заключалась в&nbsp;правильном распределении небольшого пространства квартиры на&nbsp;практичные зоны, необходимые для комфортного проживания и&nbsp;работы.<br><br>
                    Кухню-гостиную разделили на&nbsp;зону для приготовления пищи и&nbsp;зону для отдыха. За&nbsp;счет раздвижной двери отделили спальню от&nbsp;кухни-гостиной.<br><br>
                    В&nbsp;спальне было сделано зонирование на&nbsp;рабочую зону, зону для хранения и&nbsp;зону для отдыха. В&nbsp;данном дизайнерском решении нами была реализована стилистика под индивидуальные потребности нашего заказчика.
                </p>
                <div class="depro_container-img">
                    <img src="../images/depro.jpg" alt="" class="depro_img">
                </div>
            </div>
        </div>
    </section>

    <!-- СПАЛЬНЯ -->

    <section class="bed_section">
        <div class="container">
            <div class="bed_container">
                <h2 class="title bed_title">Спальня</h2>
                <div class="bed_img-container">
                    <img src="../images/bed1.jpg" alt="" class="bed_img bed_img1">
                    <img src="../images/bed2.jpg" alt="" class="bed_img bed_img2">
                    <img src="../images/bed3.jpg" alt="" class="bed_img bed_img3">
                    <img src="../images/bed4.jpg" alt="" class="bed_img bed_img4">
                    <img src="../images/bed5.jpg" alt="" class="bed_img bed_img5">
                </div>
            </div>
        </div>
    </section>

    <!-- КУХНЯ -->

    <section class="kit_section">
        <div class="container">
            <div class="kit_container">
                <h2 class="title kit_title">Кухня</h2>
                <div class="kit_container-img">
                    <img src="../images/kit1.jpg" alt="" class="kit_img">
                    <img src="../images/kit2.jpg" alt="" class="kit_img">
                    <img src="../images/kit3.jpg" alt="" class="kit_img">
                </div>
            </div>
        </div>
    </section>

    <!-- СМЕТА -->

    <section class="san_section">
        <div class="container">
            <div class="san_container">
                <h2 class="title san_title">Санузел</h2>
                <div class="san_img-container">
                    <img src="../images/san1.jpg" alt="" class="san_img san_img1">
                    <img src="../images/san2.jpg" alt="" class="san_img san_img2">
                    <img src="../images/san3.jpg" alt="" class="san_img san_img3">
                </div>
            </div>
        </div>
    </section>

    <!-- Процесс работы -->

    <section class="smet_section">
        <div class="container light-grey-bg">
            <h2 class="title smet_title">Сэкономили 109 743₽<br>на чистовых и черновых материалах</h2>
            <div class="smet_container">
                <div class="smet_comparison">
                    <h2 class="smet_comparison-title">Чистовые материалы</h2>
                    <p class="smet_finalprice">Итоговая стоимость:</p>
                    <p class="smet_price smet_price_mgb">1 091 056₽</p>
                    <p class="smet_finalprice red">Итоговая со скидкой:</p>
                    <p class="smet_price">1 018 190₽</p>
                    <button class="btn smet_btn">Ознакомиться со сметой</button>
                </div>
                <div class="smet_comparison">
                    <h2 class="smet_comparison-title">Черновые материалы</h2>
                    <p class="smet_finalprice">Итоговая стоимость:</p>
                    <p class="smet_price smet_price_mgb">526 813₽</p>
                    <p class="smet_finalprice red">Итоговая со скидкой:</p>
                    <p class="smet_price">489 936₽</p>
                    <button class="btn smet_btn">Ознакомиться со сметой</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ЭКСКУРСИЯ -->

    <section class="gui_section">
        <div class="container dark-grey-bg">
            <div class="gui_container">
                <p class="title gui_title">Запишитесь на&nbsp;экскурсию по&nbsp;текущим объктам</p>
                <p class="gui_desk">Заполните форму. Мы&nbsp;свяжемся с&nbsp;вами и&nbsp;согласуем экскурсию</p>
                <div class="gui_container-form">
                    <form action="#" class="gui_form">
                        <input type="text" class="gui_form-input" name="name" placeholder="Как вас зовут?" autocomplete="name" required pattern="[A-Za-zА-Яа-яЁё\s]+">
                        <input type="tel" class="gui_form-input" name="phone" placeholder="Номер телефона" autocomplete="tel" required pattern="[0-9]{10}">
                        <button type="submit" class="gui_form-button">Записаться на экскурсию!</button>
                    </form>
                    <p class="gui_disclaimer">Нажимая кнопку &laquo;Записаться на экскурсию&raquo; вы&nbsp;автоматически соглашаетесь с&nbsp;политикой обработки персональных данных</p>
                </div>
            </div>
        </div>
    </section>

    <!-- РАБОТЫ -->

    <section class="case_section">
        <div class="container">
            <div class="case_container">
                <h2 class="title case_title">Наши работы</h2>
                <div class="case_container-grid case_grid-first-row">
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="Видео ЖК 'Черная речка' 70 кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Black-River-70.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Черная речка» 70кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК 'Черная речка' 70 кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Черная речка» 38кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Black-River-38.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Черная речка» 38кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Черная речка» 38кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Панарама парк» 70кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Panorama-Park-70.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Панарама парк» 70кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Панарама парк» 70кв.м">Подробнее</a>
                    </div>
                </div>
                <div class="case_container-grid case_grid-second-row">
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Домино» 62кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Domino-62.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Домино» 62кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Домино» 62кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Галактика» 38кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Galaxy-38.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Галактика» 38кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Галактика» 38кв.м">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="case_section-mobile">
        <h2 class="title case_title">Наши работы</h2>

        <div class="swiper-container case_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="Видео ЖК 'Черная речка' 70 кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Black-River-70.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Черная речка» 70кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК 'Черная речка' 70 кв.м">Подробнее</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК 'Черная речка' 38 кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Black-River-38.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Черная речка» 38кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК 'Черная речка' 38 кв.м">Подробнее</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК 'Панорама парк' 70 кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Panorama-Park-70.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Панорама парк» 70кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК 'Панорама парк' 70 кв.м">Подробнее</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Домино» 62кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Domino-62.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Домино» 62кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Домино» 62кв.м">Подробнее</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Галактика» 38кв.м" muted loop playsinline poster="">
                                <source src="videos/Zk-Galaxy-38.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Галактика» 38кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Галактика» 38кв.м">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- Пагинация -->
            <div class="swiper-pagination"></div>
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