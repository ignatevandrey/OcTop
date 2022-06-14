// import { scrollToBlock } from "../common/helpers";

// $(document).ready(function () {
    // Бургер
//     $('.header__menuBurger').on('click', () => {
//         $('.header__content').addClass('animate');
//         $('body').css('overflow', 'hidden');
//     })
//     $('.header__menuClose').on('click', () => {
//         $('.header__content').removeClass('animate');
//         $('body').css('overflow', 'visible');
//     })
//     $(document).mouseup(function (e){
//         var div = $('.header__content');
//         if (!div.is(e.target) && div.has(e.target).length === 0){
//             $('.header__content').removeClass('animate');
//             $('body').css('overflow', 'visible');
//         }
//     });
    // Яндекс карта
    ymaps.ready(function () { 
        var myMap = new ymaps.Map("YMapsID", {
            center: [45.050010, 38.970759],
            zoom: 17,
        });
        var myPlacemark = new ymaps.Placemark([45.050010, 38.970759], {
            iconCaption: 'улица Гаврилова, 12',
            balloonContent: 'html-контент',
        });
        myMap.geoObjects.add(myPlacemark);
    });
    // Аккордион

    /* ----------- Переключение табов в блоке НАШИ ОБЪЕКТЫ (objects) ----------*/
    // $(".objects__tab-nav-item-1").on("click", () => {
    //     if (!$(".objects__block").hasClass("active-tab-1")) {
    //         $(".objects__block").removeClass("active-tab-2");
    //         $(".objects__block").addClass("active-tab-1");

    //         $(".search-reset").data("type", "prodazha");
    //     }
    // });
    // $(".objects__tab-nav-item-2").on("click", () => {
    //     if (!$(".objects__block").hasClass("active-tab-2")) {
    //         $(".objects__block").removeClass("active-tab-1");
    //         $(".objects__block").addClass("active-tab-2");

    //         $(".search-reset").data("type", "arenda");
    //     }
    // });
// });