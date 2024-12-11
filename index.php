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
                <div class="main_container-features">
                    <h1 class="main_container-title">
                        Безупречный по&nbsp;стилю<br>дизайн интерьера и&nbsp;реализация проекта под ключ.
                    </h1>
                    <div class="main_features">
                        <p>Выгода до&nbsp;15% за&nbsp;счет связки: дизайн+строители+подрядчики</p>
                        <p>Твердые сроки сдачи, внесенные в&nbsp;договор</p>
                    </div>
                </div>
                <div class="main_container-stats">
                    <div class="main_stat main_stat1">
                        <h3 class="main_title-h3"><span class="main_title-num">5</span><br> Лет нашей компании</h3>
                    </div>
                    <div class="main_stat main_stat2">
                        <h3 class="main_title-h3"><span class="main_title-num">400+</span><br> Проектов реализовано</h3>
                    </div>
                    <div class="main_stat main_stat3">
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
                            <video class="case_video"></video>
                            <p class="case_item-desk">ЖК «Черная речка» 70кв.м</p>
                        </div>
                        <button class="case_item-btn">Подробнее</button>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video"></video>
                            <p class="case_item-desk">ЖК «Черная речка» 38кв.м</p>
                        </div>
                        <button class="case_item-btn">Подробнее</button>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video"></video>
                            <p class="case_item-desk">ЖК «Панарама парк» 70кв.м</p>
                        </div>
                        <button class="case_item-btn">Подробнее</button>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video"></video>
                            <p class="case_item-desk">ЖК «Домино» 62кв.м</p>
                        </div>
                        <button class="case_item-btn">Подробнее</button>
                    </div>
                    <div class="case_grid-item">
                        <div class="case_item-video">
                            <video class="case_video"></video>
                            <p class="case_item-desk">ЖК «Галактика» 38кв.м</p>
                        </div>
                        <button class="case_item-btn">Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'includes/footer.php'; ?>