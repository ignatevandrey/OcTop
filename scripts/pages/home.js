import { scrollToBlock } from "../common/helpers";

$(document).ready(function () {
    // бургер
    $('.header__menuBurger').on('click', () => {
        $('.header__content').addClass('animate');
        $('body').css('overflow', 'hidden');
    })
    $('.header__menuClose').on('click', () => {
        $('.header__content').removeClass('animate');
        $('body').css('overflow', 'visible');
    })
    // инициализация слайдера First
    if ($(".first__swiper").length > 0) {
        new Swiper(".first__swiper", {
            roundLengths: true,
            watchOverflow: true,
            loop: true,
            slidesPerView: 1,
            slidesPerGroup: 1,
            speed: 800,
            spaceBetween: 0,
            pagination: {
                el: ".first-slider .slider-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".first-slider .slider-btn__next",
                prevEl: ".first-slider .slider-btn__prev",
            },
        });
    }

    /* ----------- Переключение табов в блоке НАШИ ОБЪЕКТЫ (objects) ----------*/

    $(".objects__tab-nav-item-1").on("click", () => {
        if (!$(".objects__block").hasClass("active-tab-1")) {
            $(".objects__block").removeClass("active-tab-2");
            $(".objects__block").addClass("active-tab-1");

            $(".search-reset").data("type", "prodazha");
        }
    });
    $(".objects__tab-nav-item-2").on("click", () => {
        if (!$(".objects__block").hasClass("active-tab-2")) {
            $(".objects__block").removeClass("active-tab-1");
            $(".objects__block").addClass("active-tab-2");

            $(".search-reset").data("type", "arenda");
        }
    });
});