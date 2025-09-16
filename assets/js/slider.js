// Slider
new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 50,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive
    breakpoints: {
        0: {
            slidesPerView: 1
        },

        576: {
            slidesPerView: 1
        },
        1024: {
            slidesPerView: 'auto'
        },
    }
});