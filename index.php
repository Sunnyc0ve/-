<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php include 'includes/header.php'; ?>

<main>

    <!-- Главный блок -->

    <section class="main_section full-width-bg">
        <div class="container">
            <div class="main_container">
                <div class="main_container-features black-bg">
                    <h1 class="main_container-title">
                        Безупречный по&nbsp;стилю<br>дизайн интерьера и&nbsp;реализация проекта под ключ.
                    </h1>
                    <div class="main_features">
                        <p>Выгода до&nbsp;15% за&nbsp;счет связки: дизайн+строители+подрядчики</p>
                        <p>Твердые сроки сдачи, внесенные в&nbsp;договор</p>
                    </div>
                </div>
                <div class="main_container-stats">
                    <div class="main_stat main_stat1 black-bg">
                        <h3 class="main_title-h3"><span class="main_title-num">5</span><br> Лет нашей компании</h3>
                    </div>
                    <div class="main_stat main_stat2 black-bg">
                        <h3 class="main_title-h3"><span class="main_title-num">400+</span><br> Проектов реализовано</h3>
                    </div>
                    <div class="main_stat main_stat3 black-bg">
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
        <div class="container">
            <div class="sale_container">
                <div class="sale_container-title">
                    <h2 class="sale_title">Акция</h2>
                </div>
                <div class="sale_container-content">
                    <div class="sale_container-desk">
                        <h3 class="sale_subtitle">Технический дизайн-проект в&nbsp;подарок</h3>
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
                    <h3 class="features_title">Комплексный подход</h3>
                    <p class="features_desk">Мы&nbsp;берем на&nbsp;себя все этапы, начиная с&nbsp;тщательного дизайн-проекта
                        и&nbsp;заканчивая полной сдачей готового объекта. Высокое качество и&nbsp;полное сопровождение на&nbsp;каждом этапе&nbsp;&mdash; для вашего комфорта и&nbsp;спокойствия.</p>
                </div>
                <div class="features_container-accordion">
                    <details class="features_accordion-item">
                        <summary class="features_accordion-header" aria-expanded="false" aria-controls="accordion-1">Дизайн интерьера</summary>
                        <div id="accordion-1" class="features_accordion-content">
                            <p class="features_accordion-desk">
                                Дизайн-проект является важной частью процесса ремонта, которая помогает
                                правильно распланировать пространство, точно рассчитать расположение коммуникаций
                                и&nbsp;электрических выводов, а&nbsp;также помогает сэкономить деньги в&nbsp;процессе его реализации.<br>
                                Проект с&nbsp;3D-визуализацией включает в&nbsp;себя разработку концепции и&nbsp;стиля,
                                создание планов и&nbsp;чертежей, выбор материалов и&nbsp;мебели.
                            </p>
                        </div>
                    </details>
                    <details id="accordion-2" class="features_accordion-item">
                        <summary class="features_accordion-header" aria-expanded="false" aria-controls="accordion-2">Ремонт высокого качества</summary>
                        <div class="features_accordion-content">
                            <p class="features_accordion-desk">Ремонт высокого качества является залогом счастливой жизни в&nbsp;будущем.<br>
                                Главной задачей нашей команды является сделать процесс ремонта комфортным для наших Заказчиков.<br>
                                У&nbsp;нас честный Договор, чёткое соблюдение сроков и&nbsp;технические надзор на&nbsp;всех этапах работ.</p>
                        </div>
                    </details>
                    <details id="accordion-3" class="features_accordion-item">
                        <summary class="features_accordion-header" aria-expanded="false" aria-controls="accordion-3">Комплектация объекта</summary>
                        <div class="features_accordion-content">
                            <p class="features_accordion-desk">Подбор чистовых отделочных материалов&nbsp;&mdash; это очень трудоёмкий процесс. Наши специалисты помогут определиться с&nbsp;выбором любых чистовых материалов, подобрать каждому индивидуально дизайнерское световое решение, подробно сделать просчёт выбранных позиции у&nbsp;различных поставщиков, а&nbsp;также организовать доставку на&nbsp;объект и&nbsp;проверят качество товара. Именно услуга Комплектации объекта позволяет сэкономить Вам деньги и&nbsp;Ваше время.</p>
                        </div>
                    </details>
                    <details id="accordion-4" class="features_accordion-item">
                        <summary class="features_accordion-header" aria-expanded="false" aria-controls="accordion-4">Меблирование объекта</summary>
                        <div class="features_accordion-content">
                            <p class="features_accordion-desk">На&nbsp;этапе разработки дизайн-проекта дизайнеры тщательно продумывают наличие мебели под особенности, потребности и&nbsp;требования каждого Заказчика. Уже много лет мы&nbsp;реализовываем различные решения по&nbsp;изготовлению мебели на&nbsp;заказ, что позволяет правильно использовать пространство и&nbsp;сделать необходимое наполнение для каждого Заказчика индивидуально.<br>
                                Это неотъемлемая часть сдачи объекта, которая обеспечивает окончательное визуальное восприятие реализованного дизайн-проекта.</p>
                        </div>
                    </details>

                </div>
            </div>
        </div>
    </section>

    <!-- Работы -->

    <section class="case_section">
        <div class="container">
            <div class="case_container">
                <h2 class="case_title">Наши работы</h2>
                <div class="case_container-grid">
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="Видео ЖК 'Черная речка' 70 кв.м" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Черная речка» 70кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК 'Черная речка' 70 кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Черная речка» 38кв.м" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Черная речка» 38кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Черная речка» 38кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Панарама парк» 70кв.м" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Панарама парк» 70кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Панарама парк» 70кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Домино» 62кв.м" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                            <p class="case_item-desk">ЖК «Домино» 62кв.м</p>
                        </div>
                        <a href="#" class="btn case_item-btn" aria-label="Подробнее о ЖК «Домино» 62кв.м">Подробнее</a>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video" aria-label="ЖК «Галактика» 38кв.м" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
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

    <!-- Процесс работы -->

    <section class="process_section">
        <div class="container">
            <div class="process_container">
                <h2 class="process_title">Процесс работы</h2>
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

    <section class="tarif_section">
        <div class="container">
            <div class="tarif_container">
                <p class="tarif_title">Готовы обсудить проект?</p>
                <p class="tarif_desk">Оставьте заявку, и&nbsp;мы&nbsp;обсудим Ваш бюджет и&nbsp;пожелания, сориентируем по&nbsp;срокам и&nbsp;стоимости дизайн проекта и&nbsp;ремонта Вашей квартиры.</p>
                <div class="tarif_container-form">
                    <form action="#" class="tarif_form">
                        <input type="text" class="tarif_form-input" name="name" placeholder="Как вас зовут?" autocomplete="name" required pattern="[A-Za-zА-Яа-яЁё\s]+">
                        <input type="tel" class="tarif_form-input" name="phone" placeholder="Номер телефона" autocomplete="tel" required pattern="[0-9]{10}">
                        <button type="submit" class="tarif_form-button">Обсудить проект</button>
                    </form>
                    <p class="tarif_disclaimer">Нажимая кнопку &laquo;Обсудить проект&raquo; вы&nbsp;автоматически соглашаетесь с&nbsp;политикой обработки персональных данных</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Социальные сети -->

    <section class="social_section">
        <div class="container">
            <div class="social_container">
                <h2 class="social_title">Следите за&nbsp;нами в&nbsp;соцсетях</h2>
                <div class="social_container-content">
                    <div class="social_content-img">
                        <img src="images/social_img-1.png" alt="" class="social_img">
                        <img src="images/social_img-2.png" alt="" class="social_img">
                        <img src="images/social_img-3.png" alt="" class="social_img">
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
                        <a href="#" class="social_content-button" aria-label="Перейти на страницу социальных сетей">Перейти</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- До/после -->

    <section class="comparison_section">
        <div class="container">
            <h2 class="comparison_title">Визуализация проектов до/после<br>как наши проекты воплощаются в&nbsp;жизнь</h2>
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
                    <div class="comparison_handle"></div>
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
                    <div class="comparison_handle"></div>
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
                <h2 class="vidr_title">Наша команда выполнила более 400-х дизайнерских ремонтов квартир за&nbsp;5&nbsp;лет работы с&nbsp;отзывами на&nbsp;5&nbsp;баллов:</h2>
                <div class="vidr_slider">
                    <div class="vidr_track">
                        <div class="vidr_slide">
                            <video src="videos/vidr1.mp4" class="vidr_video" aria-label="Описание видео" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                        </div>
                        <div class="vidr_slide">
                            <video src="videos/vidr2.mp4" class="vidr_video" aria-label="Описание видео" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                        </div>
                        <div class="vidr_slide">
                            <video src="videos/vidr3.mp4" class="vidr_video" aria-label="Описание видео" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                        </div>
                        <div class="vidr_slide">
                            <video src="videos/vidr4.mp4" class="vidr_video" aria-label="Описание видео" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                        </div>
                        <div class="vidr_slide">
                            <video src="videos/vidr5.mp4" class="vidr_video" aria-label="Описание видео" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                        </div>
                        <div class="vidr_slide">
                            <video src="videos/vidr6.mp4" class="vidr_video" aria-label="Описание видео" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                        </div>
                        <div class="vidr_slide">
                            <video src="videos/vidr7.mp4" class="vidr_video" aria-label="Описание видео" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                        </div>
                        <div class="vidr_slide">
                            <video src="videos/vidr8.mp4" class="vidr_video" aria-label="Описание видео" muted loop playsinline poster="path/to/poster.jpg">
                                <source src="path/to/video.mp4" type="video/mp4">
                                Ваш браузер не поддерживает видео.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Боли -->

    <section class="pain_section">
        <div class="container">
            <div class="pain_container-content">
                <h2 class="pain_content-title">8&nbsp;проблем ремонта без дизайн-проекта</h2>
                <p class="pain_content-desk">о&nbsp;которых рассказали больше 100 наших клиентов</p>
                <ol class="pain_content-list">
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">01</p>
                            <p class="pain__item-desk">Постоянная потеря времени на&nbsp;согласования и&nbsp;форс-мажоры</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">02</p>
                            <p class="pain__item-desk">Непредвиденные траты на&nbsp;то, чего не&nbsp;хватило или по&nbsp;другой стоимости</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">03</p>
                            <p class="pain__item-desk">Ошибки монтажа: то&nbsp;душ короткий, то&nbsp;двери шкафов не&nbsp;открываются</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">04</p>
                            <p class="pain__item-desk">Внезапный рост стоимости работ из-за того, что никто не&nbsp;уточнил деталей</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">05</p>
                            <p class="pain__item-desk">Понравились обои в&nbsp;магазине, а&nbsp;дома на&nbsp;стене пестрят. Нет единого стиля</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">06</p>
                            <p class="pain__item-desk">Большая площадь, а&nbsp;места совсем нет из-за наставленной повсюду мебели</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">07</p>
                            <p class="pain__item-desk">Куча лампочек, а&nbsp;в&nbsp;помещении темно. Выбивает счётчик от&nbsp;чайника или СВЧ</p>
                        </div>
                    </li>
                    <li class="pain_list-item">
                        <div class="pain_container-item">
                            <p class="pain_item-num">08</p>
                            <p class="pain__item-desk">Купили материалы сильно дороже, чем увидели позже в&nbsp;другом магазине</p>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="pain_container-form">
                <h2 class="pain_form-title">Узнайте как дизайн-проект решает эти 8&nbsp;проблем</h2>
                <p class="pain_form-desk">И&nbsp;сохраняет до&nbsp;15% вашего бюджета</p>
                <img src="" alt="" class="pain_form-img">
                <div class="pain_form-content">
                    <form action="" class="pain_form">
                        <input type="text" class="pain_input" name="name" placeholder="Как вас зовут?" autocomplete="name" required pattern="[A-Za-zА-Яа-яЁё\s]+">
                        <input type="tel" class="pain_input" name="phone" placeholder="Номер телефона" autocomplete="tel" required pattern="[0-9]{10}">
                        <button type="submit" class="pain_form-btn">Получить материал</button>
                    </form>
                </div>
                </img>
            </div>
        </div>
    </section>

    <!-- Тарифы с формой -->

    <section class="tarif_section">
        <div class="container">
            <div class="tarif_container">
                <div class="tarif_container-item">
                    <div class="tarif_item">
                        <h2 class="tarif_title">Полный проект<br>+&nbsp;бюджетирование</h2>
                        <ol class="tarif_list">
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Планировочное решение</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Визуализация</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Рабочие чертежи</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Подбор мебели и&nbsp;материалов</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Таблица бюджетирования +&nbsp;подбор аналогов</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Оформление заказов, контроль и&nbsp;координация доставки</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">3D Тур</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <p class="tarif_item-price">3 900₽ / М2/p>
                                <a href="" class="tarif_item-case">Пример дизайн-проекта</a><button class="btn tarif_list-btn">Выбрать тариф</button>
                        </ol>
                    </div>
                    <div class="tarif_item">
                        <h2 class="tarif_title">Полный проект<br>+&nbsp;комплектация</h2>
                        <ol class="tarif_list">
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Планировочное решение</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Визуализация</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Рабочие чертежи</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Подбор мебели и&nbsp;материалов</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Таблица бюджетирования +&nbsp;подбор аналогов</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Оформление заказов, контроль и&nbsp;координация доставки</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">3D Тур</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <p class="tarif_item-price">4 900₽ / М2</p>
                            <a href="" class="tarif_item-case">Пример дизайн-проекта</a><button class="btn tarif_list-btn">Выбрать тариф</button>
                        </ol>
                    </div>
                    <div class="tarif_item">
                        <h2 class="tarif_title">Полный проект<br>+&nbsp;комплектация +&nbsp;3D тур</h2>
                        <ol class="tarif_list">
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Планировочное решение</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Визуализация</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Рабочие чертежи</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Подбор мебели и&nbsp;материалов</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Таблица бюджетирования +&nbsp;подбор аналогов</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">Оформление заказов, контроль и&nbsp;координация доставки</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <li class="tarif_list-desk">
                                <div class="tarif_container-desk">
                                    <p class="tarif_desk">3D Тур</p>
                                    <icon class="tarif_list-icon"></icon>
                                </div>
                            </li>
                            <p class="tarif_item-price">5 900₽ / М2</p>
                            <a href="" class="tarif_item-case">Пример дизайн-проекта</a><button class="btn tarif_list-btn">Выбрать тариф</button>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="tarif_form-content">
                <p class="tarif_form-title">Запишитесь на&nbsp;экскурсию по&nbsp;текущим объктам</p>
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
                <iframe src="" frameborder="0">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Контакты -->

    <section class="cont_section">
        <div class="container">
            <div class="cont_container">
                <div class="cont_container-item">
                    <p class="cont_title">Контакты</p>
                    <div class="cont_content">
                        <p class="cont_desk">+7 (911) 929-77-13</p>
                        <button class="btn cont_btn">Получить консультацию</button>
                    </div>
                </div>
                <div class="cont_container-item">
                    <p class="cont_title">Социальные сети</p>
                    <div class="cont_content">
                        <div class="cont_container-icon">
                            <img src="" alt="" class="cont_icon">
                            <img src="" alt="" class="cont_icon">
                            <img src="" alt="" class="cont_icon">
                            <img src="" alt="" class="cont_icon">
                        </div>
                    </div>
                </div>
                <div class="cont_container-item">
                    <p class="cont_title">Наш адрес</p>
                    <div class="cont_content">
                        <p class="cont_desk">Санкт-Петербург, Проспект Большевиков&nbsp;2, 10&nbsp;парадная</p>
                        <p class="cont_desk">Будем рады видеть вас в&nbsp;нашем офисе или встретиться на&nbsp;вашем объекте.</p>
                    </div>
                </div>
            </div>
    </section>


</main>
<?php include 'includes/footer.php'; ?>