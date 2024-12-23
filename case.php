<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php
$page = 'case';
$title = 'Черная речка 38кв.м';
$description = 'Наш проект Черная речка 38кв.м';
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


</main>
<?php include 'includes/footer.php'; ?>