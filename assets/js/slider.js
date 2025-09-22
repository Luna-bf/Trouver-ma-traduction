// Slider
new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 50,

    // Pagination (points sous le slider)
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    // Flèches de navigation
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