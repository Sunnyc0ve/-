// ARIA EXPENDED ACCORDION

document.querySelectorAll('.features_accordion-item').forEach((item) => {
    item.addEventListener('toggle', () => {
        const summary = item.querySelector('summary');
        summary.setAttribute('aria-expanded', item.open);
    });
});

// ACCORDION 1 OPEN

document.querySelectorAll('.features_accordion-item').forEach((item) => {
    const summary = item.querySelector('summary');

    // Обработчик клика
    summary.addEventListener('click', function () {
        // Закрываем все остальные элементы
        document
            .querySelectorAll('.features_accordion-item')
            .forEach((details) => {
                if (details !== item) {
                    details.removeAttribute('open'); // Закрываем другие блоки
                    details
                        .querySelector('summary')
                        .setAttribute('aria-expanded', 'false');
                }
            });

        // Обновляем состояние текущего элемента
        const isExpanded = item.hasAttribute('open');
        summary.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
    });
});

// Инициализация: открываем первый элемент
const firstAccordion = document.querySelector('.features_accordion-item');
if (firstAccordion) {
    firstAccordion.setAttribute('open', true);
    firstAccordion
        .querySelector('summary')
        .setAttribute('aria-expanded', 'true');
}

// Слайдер сравнения

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
