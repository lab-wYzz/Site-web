const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    effect: 'cards',
    cardsEffect: {
        slideShadows: false,
    },
    autoplay: {
        delay: 1000,
    },
});





