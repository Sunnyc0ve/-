// Преимущества
document.addEventListener('DOMContentLoaded', () => {
    const accordionItems = document.querySelectorAll(
        '.features_accordion-item',
    );
    const descriptions = document.querySelectorAll('.features_description');

    // Установим начальное состояние для первого элемента
    if (accordionItems.length > 0) {
        const firstItem = accordionItems[0];
        const firstDescription = document.getElementById(
            firstItem.getAttribute('data-target'),
        );
        const firstIcon = firstItem.querySelector(
            '.features_accordion-icon > svg',
        );

        firstItem.setAttribute('aria-expanded', true);
        firstDescription.hidden = false;
        firstIcon.style.transform = 'rotate(270deg)';
        firstIcon.style.stroke = 'vars.$secondary-color';
    }

    accordionItems.forEach((item) => {
        const targetId = item.getAttribute('data-target');
        const targetDescription = document.getElementById(targetId);
        const icon = item.querySelector('.features_accordion-icon > svg');

        item.addEventListener('click', () => {
            // Сброс всех активных состояний
            descriptions.forEach((desc) => (desc.hidden = true));
            accordionItems.forEach((accItem) => {
                const accIcon = accItem.querySelector(
                    '.features_accordion-icon > svg',
                );
                accItem.setAttribute('aria-expanded', false);
                accIcon.style.transform = 'rotate(0deg)';
                accIcon.style.stroke = 'vars.$third-color';
            });

            // Открытие выбранного элемента
            targetDescription.hidden = false;
            item.setAttribute('aria-expanded', true);
            icon.style.transform = 'rotate(270deg)';
            icon.style.stroke = 'vars.$secondary-color';
        });
    });
});

// Социальные сети

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.social_button');
    const descriptions = document.querySelectorAll('.social_desk');
    const images = document.querySelectorAll('.social_img');
    const actionButton = document.querySelector('.social_content-button'); // Кнопка для перехода

    // Ссылки для социальных сетей
    const socialLinks = {
        instagram: 'https://www.instagram.com/yourpage', // Замените на ваши ссылки
        youtube: 'https://www.youtube.com/yourchannel',
        vk: 'https://vk.com/yourgroup',
    };

    // Переменные для управления текущим состоянием
    let currentActive = 0;

    // Функция для обновления классов активных элементов
    const updateCarousel = () => {
        // Удаляем текущие классы
        images.forEach((img) => {
            img.classList.remove('active1', 'active2', 'active3');
        });

        // Добавляем новые активные классы в зависимости от текущей позиции
        images[(currentActive + 0) % images.length].classList.add('active1');
        images[(currentActive + 1) % images.length].classList.add('active2');
        images[(currentActive + 2) % images.length].classList.add('active3');
    };

    // Обновление ссылки в кнопке в зависимости от текущего активного элемента
    const updateActionButton = () => {
        if (currentActive === 0) {
            actionButton.href = socialLinks.instagram;
        } else if (currentActive === 1) {
            actionButton.href = socialLinks.youtube;
        } else if (currentActive === 2) {
            actionButton.href = socialLinks.vk;
        }
    };

    // Обработчик кликов для кнопок
    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            // Убираем активное состояние у всех кнопок
            buttons.forEach((btn) => btn.classList.remove('active'));

            // Убираем активное состояние у всех описаний
            descriptions.forEach((desc) => desc.classList.remove('active'));

            // Устанавливаем активную кнопку и описание
            button.classList.add('active');
            descriptions[index].classList.add('active');

            // Обновляем текущее активное изображение
            currentActive = index;

            // Обновляем карусель
            updateCarousel();

            // Обновляем ссылку в кнопке
            updateActionButton();
        });
    });

    // Устанавливаем первый элемент активным по умолчанию
    buttons[0].click();
});

// COMPARISON SLIDER

document.querySelectorAll('.comparison_slider').forEach((slider) => {
    const handle = slider.querySelector('.comparison_handle');
    const beforeImage = slider.querySelector('.comparison_image--before');
    const afterImage = slider.querySelector('.comparison_image--after');
    const labelBefore = slider.querySelector('.comparison_label--before');
    const labelAfter = slider.querySelector('.comparison_label--after');

    let isDragging = false;

    const moveHandle = (e) => {
        if (!isDragging) return;

        const rect = slider.getBoundingClientRect();
        const offsetX = (e.pageX || e.touches[0].pageX) - rect.left;
        const percentage = Math.min(Math.max(offsetX / rect.width, 0), 1) * 100;

        beforeImage.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
        afterImage.style.clipPath = `inset(0 0 0 ${percentage}%)`;

        handle.style.left = `${percentage}%`;

        // Управление видимостью лейблов
        labelBefore.style.opacity = percentage < 10 ? 0 : 1;
        labelAfter.style.opacity = percentage > 90 ? 0 : 1;
    };

    const startDragging = () => {
        isDragging = true;
        document.addEventListener('mousemove', moveHandle);
        document.addEventListener('mouseup', stopDragging);
        document.addEventListener('touchmove', moveHandle);
        document.addEventListener('touchend', stopDragging);
    };

    const stopDragging = () => {
        isDragging = false;
        document.removeEventListener('mousemove', moveHandle);
        document.removeEventListener('mouseup', stopDragging);
        document.removeEventListener('touchmove', moveHandle);
        document.removeEventListener('touchend', stopDragging);
    };

    handle.addEventListener('mousedown', startDragging);
    handle.addEventListener('touchstart', startDragging);
});

// Видеоотзывы

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.vidr_slider');
    const track = slider.querySelector('.vidr_track');
    const slides = Array.from(track.children);

    let isDragging = false;
    let startX = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let animationID = 0;

    const sliderBounds = slider.getBoundingClientRect();
    const trackWidth = slides.reduce(
        (acc, slide) => acc + slide.offsetWidth + 20,
        0,
    );

    function setTrackPosition(position) {
        track.style.transform = `translateX(${position}px)`;
    }

    function animation() {
        setTrackPosition(currentTranslate);
        if (isDragging) requestAnimationFrame(animation);
    }

    function limitTranslate(translate) {
        const minTranslate = sliderBounds.width - trackWidth;
        const maxTranslate = 0;
        return Math.min(Math.max(translate, minTranslate), maxTranslate);
    }

    slider.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.pageX;
        prevTranslate = currentTranslate;
        slider.classList.add('dragging');
        animationID = requestAnimationFrame(animation);
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const diffX = e.pageX - startX;
        currentTranslate = limitTranslate(prevTranslate + diffX);
    });

    slider.addEventListener('mouseup', () => {
        isDragging = false;
        slider.classList.remove('dragging');
        cancelAnimationFrame(animationID);
    });

    slider.addEventListener('mouseleave', () => {
        if (isDragging) {
            isDragging = false;
            slider.classList.remove('dragging');
            cancelAnimationFrame(animationID);
        }
    });

    // Touch support
    slider.addEventListener('touchstart', (e) => {
        isDragging = true;
        startX = e.touches[0].pageX;
        prevTranslate = currentTranslate;
        slider.classList.add('dragging');
        animationID = requestAnimationFrame(animation);
    });

    slider.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        const diffX = e.touches[0].pageX - startX;
        currentTranslate = limitTranslate(prevTranslate + diffX);
    });

    slider.addEventListener('touchend', () => {
        isDragging = false;
        slider.classList.remove('dragging');
        cancelAnimationFrame(animationID);
    });

    slider.addEventListener('touchcancel', () => {
        isDragging = false;
        slider.classList.remove('dragging');
        cancelAnimationFrame(animationID);
    });

    // Видеоотзывы
    slides.forEach((slide) => {
        const video = slide.querySelector('.vidr_video');
        const overlay = slide.querySelector('.vidr_overlay');
        const playButton = slide.querySelector('.play_button');

        playButton.addEventListener('click', () => {
            // Остановить все видео и сбросить активные классы
            slides.forEach((s) => {
                const v = s.querySelector('.vidr_video');
                v.pause();
                v.controls = false;
                s.classList.remove('active');
            });

            // Активировать текущее видео
            slide.classList.add('active');
            video.play();
            video.controls = true; // Показать элементы управления
        });

        video.addEventListener('ended', () => {
            // Убрать активный класс и скрыть элементы управления после окончания видео
            slide.classList.remove('active');
            video.controls = false;
        });
    });
});
