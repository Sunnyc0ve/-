// Хедер

const header = document.querySelector('.header');
const header_border = document.querySelector('.header__container');

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        header.style.backgroundColor = '#282828';
        header_border.style.border = 'none';
    } else {
        header.style.backgroundColor = 'transparent';
        header_border.style.borderBottom = '1px solid #ffffff50';
    }
});

// Бургер

document.addEventListener('DOMContentLoaded', () => {
    const burgerButton = document.querySelector('.header_burger-container');
    const burgerMenu = document.querySelector('.burger-menu');
    const burgerClose = document.querySelector('.burger-menu__close');

    // Открыть меню
    burgerButton.addEventListener('click', () => {
        burgerMenu.style.display = 'flex';
    });

    // Закрыть меню
    burgerClose.addEventListener('click', () => {
        burgerMenu.style.display = 'none';
    });

    // Закрыть меню при клике на overlay
    burgerMenu.addEventListener('click', (e) => {
        if (e.target.classList.contains('burger-menu__overlay')) {
            burgerMenu.style.display = 'none';
        }
    });
});

// Колбек

document.addEventListener('DOMContentLoaded', () => {
    // Найти элементы на странице
    const callbackPopup = document.querySelector('.callback-popup'); // Попап
    const openPopupBtn = document.querySelector('.callback_img'); // Кнопка открытия
    const closePopupBtn = document.querySelector('.callback-popup__close'); // Кнопка закрытия
    const overlay = document.querySelector('.callback-popup__overlay'); // Оверлей

    // Проверить, что элементы существуют
    if (openPopupBtn) {
        openPopupBtn.addEventListener('click', () => {
            // Показать попап
            callbackPopup.style.display = 'flex';
        });
    }

    if (closePopupBtn) {
        closePopupBtn.addEventListener('click', () => {
            // Скрыть попап
            callbackPopup.style.display = 'none';
        });
    }

    if (overlay) {
        overlay.addEventListener('click', () => {
            // Скрыть попап при клике на оверлей
            callbackPopup.style.display = 'none';
        });
    }
});

// Акция мобилка попап
document.addEventListener('DOMContentLoaded', () => {
    const popup = document.querySelector('.minisale_section');
    const popupLink = document.querySelector('.open-popup-link');
    const popupContainer = document.querySelector('.minisale_container');
    popupLink.addEventListener('click', (e) => {
        e.preventDefault();
        popup.classList.add('is-visible');
    });
    popup.addEventListener('click', (e) => {
        if (!popupContainer.contains(e.target)) {
            popup.classList.remove('is-visible');
        }
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            popup.classList.remove('is-visible');
        }
    });
});

// Консультация попап

document.addEventListener('DOMContentLoaded', () => {
    const popup = document.querySelector('.zayavka_section');
    const popupLink = document.querySelector('.open-zayavka-popup-link');
    const popupContainer = document.querySelector('.zayavka_container');

    popupLink.addEventListener('click', (e) => {
        e.preventDefault();
        popup.classList.add('is-visible');
    });

    popup.addEventListener('click', (e) => {
        if (!popupContainer.contains(e.target)) {
            popup.classList.remove('is-visible');
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            popup.classList.remove('is-visible');
        }
    });
});

// Работы

const videoBlocks = document.querySelectorAll('.case_item-video');

videoBlocks.forEach((block) => {
    const video = block.querySelector('video');

    block.addEventListener('mouseenter', () => {
        if (video) {
            video.play();
        }
    });

    block.addEventListener('mouseleave', () => {
        if (video) {
            video.pause();
            video.currentTime = 0;
        }
    });
});

// Преимущества

document.addEventListener('DOMContentLoaded', () => {
    const accordionItems = document.querySelectorAll(
        '.features_accordion-item',
    );
    const desktopDescriptions = document.querySelectorAll(
        '.features_container-description .features_description',
    );
    const desktopContainer = document.querySelector(
        '.features_container-description',
    );
    const isMobile = () => window.innerWidth < 980;

    // Логика для ПК (>=980px)
    const initDesktop = () => {
        if (!desktopContainer) return;

        // Скрыть все десктопные описания
        desktopDescriptions.forEach((desc) => (desc.hidden = true));

        // Раскрыть первое описание
        const firstItem = accordionItems[0];
        if (firstItem) {
            const targetId = firstItem.getAttribute('data-target');
            const firstDescription = document.querySelector(
                `.features_container-description #${targetId}`,
            );
            if (firstDescription) {
                firstDescription.hidden = false;
                firstItem.setAttribute('aria-expanded', true);
                const icon = firstItem.querySelector(
                    '.features_accordion-icon > svg',
                );
                if (icon) icon.style.transform = 'rotate(270deg)';
            }
        }
    };

    // Логика для Мобилки (<980px)
    const initMobile = () => {
        accordionItems.forEach((item) => {
            const description = item.querySelector('.features_description');
            if (description) description.style.display = 'none';
            item.setAttribute('aria-expanded', false);
            const icon = item.querySelector('.features_accordion-icon > svg');
            if (icon) icon.style.transform = 'rotate(0deg)';
        });
    };

    // Переключение отображения в зависимости от режима
    const updateView = () => {
        if (isMobile()) {
            // Мобильная версия
            if (desktopContainer) desktopContainer.style.display = 'none';
            initMobile();
        } else {
            // ПК-версия
            if (desktopContainer) desktopContainer.style.display = 'block';
            initDesktop();
        }
    };

    // Обработчик кликов
    accordionItems.forEach((item) => {
        const header = item.querySelector('.features_accordion-header');
        const targetId = item.getAttribute('data-target');

        header.addEventListener('click', () => {
            if (isMobile()) {
                // Мобильная логика
                const description = item.querySelector('.features_description');
                const isExpanded =
                    item.getAttribute('aria-expanded') === 'true';

                accordionItems.forEach((accItem) => {
                    const accDescription = accItem.querySelector(
                        '.features_description',
                    );
                    const icon = accItem.querySelector(
                        '.features_accordion-icon > svg',
                    );
                    if (accDescription) accDescription.style.display = 'none';
                    if (icon) icon.style.transform = 'rotate(0deg)';
                    accItem.setAttribute('aria-expanded', false);
                });

                if (!isExpanded && description) {
                    description.style.display = 'block';
                    const icon = item.querySelector(
                        '.features_accordion-icon > svg',
                    );
                    if (icon) icon.style.transform = 'rotate(180deg)';
                    item.setAttribute('aria-expanded', true);
                }
            } else {
                // Логика для ПК
                const targetDescription = document.querySelector(
                    `.features_container-description #${targetId}`,
                );
                if (targetDescription) {
                    desktopDescriptions.forEach((desc) => (desc.hidden = true));
                    accordionItems.forEach((accItem) => {
                        const accIcon = accItem.querySelector(
                            '.features_accordion-icon > svg',
                        );
                        accItem.setAttribute('aria-expanded', false);
                        if (accIcon) accIcon.style.transform = 'rotate(0deg)';
                    });

                    targetDescription.hidden = false;
                    item.setAttribute('aria-expanded', true);
                    const icon = item.querySelector(
                        '.features_accordion-icon > svg',
                    );
                    if (icon) icon.style.transform = 'rotate(270deg)';
                }
            }
        });
    });

    // Инициализация
    window.addEventListener('resize', updateView);
    updateView();
});

// Социальные сети

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.social_button');
    const descriptions = document.querySelectorAll('.social_desk');
    const images = document.querySelectorAll('.social_img');
    const actionButton = document.querySelector('.social_content-button');

    const socialLinks = {
        instagram: 'https://www.instagram.com/yourpage',
        youtube: 'https://www.youtube.com/yourchannel',
        vk: 'https://vk.com/yourgroup',
    };

    let currentActive = 0;

    const updateCarousel = () => {
        images.forEach((img) => {
            img.classList.remove('active1', 'active2', 'active3');
        });

        images[(currentActive + 0) % images.length].classList.add('active1');
        images[(currentActive + 1) % images.length].classList.add('active2');
        images[(currentActive + 2) % images.length].classList.add('active3');
    };

    const updateActionButton = () => {
        if (currentActive === 0) {
            actionButton.href = socialLinks.instagram;
        } else if (currentActive === 1) {
            actionButton.href = socialLinks.youtube;
        } else if (currentActive === 2) {
            actionButton.href = socialLinks.vk;
        }
    };

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            buttons.forEach((btn) => btn.classList.remove('active'));

            descriptions.forEach((desc) => desc.classList.remove('active'));

            button.classList.add('active');
            descriptions[index].classList.add('active');

            currentActive = index;

            updateCarousel();

            updateActionButton();
        });
    });

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

    slides.forEach((slide) => {
        const video = slide.querySelector('.vidr_video');
        const overlay = slide.querySelector('.vidr_overlay');
        const playButton = slide.querySelector('.play_button');

        playButton.addEventListener('click', () => {
            slides.forEach((s) => {
                const v = s.querySelector('.vidr_video');
                v.pause();
                v.controls = false;
                s.classList.remove('active');
            });

            slide.classList.add('active');
            video.play();
            video.controls = true;
        });

        video.addEventListener('ended', () => {
            slide.classList.remove('active');
            video.controls = false;
        });
    });
});

// ВИДЕООБЗОР

document.addEventListener('DOMContentLoaded', () => {
    const videoContainer = document.querySelector('.video_container');
    const video = videoContainer.querySelector('video');
    const overlay = videoContainer.querySelector('.video_overlay');
    const playButton = videoContainer.querySelector('.play_button');

    playButton.addEventListener('click', () => {
        if (video.paused) {
            video.play();
            video.controls = true;
            overlay.style.opacity = 0;
            overlay.style.pointerEvents = 'none';
            overlay.style.background = 'none'; // Убираем фон при запуске видео
        }
    });

    video.addEventListener('ended', () => {
        video.controls = false;
        overlay.style.opacity = 1;
        overlay.style.pointerEvents = 'auto';
        overlay.style.background = 'rgba(0, 0, 0, 0.47)'; // Возвращаем фон после завершения видео
    });
});

// Свайпер

document.addEventListener('DOMContentLoaded', () => {
    if (window.innerWidth <= 768) {
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1, // Один слайд на экране
            spaceBetween: 20, // Расстояние между слайдами
            pagination: {
                el: '.swiper-pagination', // Пагинация
                clickable: true, // Точки пагинации кликабельны
            },
        });
    }
});
