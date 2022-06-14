$.ajaxSetup({cache: false});

$.fn.padding = function (direction) {
    return parseFloat(this.css("padding-" + direction));
};

export function windowHeight() {
    return parseFloat(window.innerHeight) || parseFloat($(window).height());
}

export function windowWidth() {
    return parseFloat(window.innerWidth) || parseFloat($(window).width());
}

// форматирует разрядность числа
document.querySelectorAll(".capacity").forEach(el => el.innerHTML = el.textContent.replace(/(\d)(?=(\d{3})+$)/g, '$1 '));



jQuery(($) => {
        $("input[name='phone']").mask("+7(999)999-99-99");
    });
