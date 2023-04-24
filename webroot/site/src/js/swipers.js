/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */
var swiper = new Swiper(".banner-swiper", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".banner-swiper .swiper-button-next",
        prevEl: ".banner-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        clickable: true
    },

});
var swiper = new Swiper(".empreendimentos-swiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    navigation: {
        //nextEl: ".empreendimentos-swiper .swiper-button-next",
        //prevEl: ".empreendimentos-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".empreendimentos-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        767: {
            slidesPerView: 2,
        }
    },

});
var swiper = new Swiper(".depoimentos-swiper", {
    slidesPerView: 1,
    spaceBetween: 150,
    navigation: {
        nextEl: ".depoimentos-swiper .swiper-button-next",
        prevEl: ".depoimentos-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".depoimentos-swiper .swiper-pagination",
        clickable: true
    },

});
var swiper = new Swiper(".blog-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        //nextEl: ".blog-swiper .swiper-button-next",
        //prevEl: ".blog-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".blog-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 2,
        },
        0: {
            slidesPerView: 1,
        }
    },

});
var swiper = new Swiper(".teste-swiper", {
    slidesPerView: 1,
    //spaceBetween: 150,
    navigation: {
        //nextEl: ".blog-swiper .swiper-button-next",
        //prevEl: ".blog-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".blog-swiper .swiper-pagination",
        clickable: true
    },

});
var swiper = new Swiper(".parceiros-swiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
        nextEl: ".parceiros-swiper .swiper-button-next",
        prevEl: ".parceiros-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".parceiros-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        992: {
            slidesPerView: 5,
        },
        767: {
            slidesPerView: 4,
        },
        576: {
            slidesPerView: 3,
        },
    },

});
var swiper = new Swiper(".detalhes-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: ".detalhes-swiper .swiper-button-next",
        prevEl: ".detalhes-swiper .swiper-button-prev",
    },
    pagination: {
        // el: ".detalhes-swiper .swiper-pagination",
        clickable: true
        //type: "fraction",
    },

});