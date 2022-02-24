import {arcticmodal_settings} from "./modal";

$(document).ready(function () {
    $body.on("click", ".js-request", function (event) {
        event.preventDefault();

        let $modal = $(".intopModal-request"),
            imgHTML = '<picture><source srcset="/img/modal/request.webp" type="image/webp" /><img class="image cover" src="/img/modal/request.jpg" alt="Оставить заявку" width="274" height="516" loading="lazy" decoding="async" /></picture>';
        $modal.find(".modal-title").html($(this).data("h")?.trim() || "Оставить заявку");
        $modal.find(".request__from").val($(this).data("from")?.trim() || `Кнопка: ${$(this).text()?.trim()}`);
        $modal.find(".request__submit .btn__text").html($(this).data("btn")?.trim() || "Оставить заявку");

        if ($(this).data("img")) {
            let imgClassic = $(this).data("img"),
                imgWebp = imgClassic.replace(/\.jpg|\.png|\.jpeg|\.gif/g, ".webp");

            imgHTML = imgHTML.replace("/img/modal/request.jpg", imgClassic).replace("/img/modal/request.webp", imgWebp);
        }
        $modal.find(".mod-request__img").html(imgHTML);
        $modal.arcticmodal(arcticmodal_settings);
    });

    $body.on("click", ".request__submit", function (event) {
        event.preventDefault();
        let $parent = $(this).parents(".intopModal__whiteContent");

        let data = {
            name: $parent.find(".request__input-name").val().trim(),
            phone: $parent.find(".request__input-phone").val().trim(),
            //email: $parent.find(".request__input-email").val().trim(),
            comment: $parent.find(".request__input-comment").val()?.trim(),
            from: $parent.find(".request__from").val().trim()
        }

        if (!$(".request__checkbox-privacy").length || $(".request__checkbox-privacy").prop("checked")) {
            if (data.phone) {
                $.ajax({
                    type: "POST",
                    url: "/php/callme.php",
                    data
                }).fail(() => {
                    alert("Ошибка!. Пожалуйста, повторите отправку.");
                });

                //ym(13145092,"reachGoal","REQUEST_SENT")
                //ga("send", "event", "REQUEST", "SENT");
                try {
                    $(".intopModal-request").arcticmodal("close");
                } catch (e) {
                }

                $(".intopModal-thanks").arcticmodal(arcticmodal_settings);
                //alert(`Спасибо, заявка отправлена.<br><br>Наш менеджер свяжется с Вами очень скоро.<br><br>Пожалуйста, убедитесь, что указали верный номер ${data.phone}`);
            } else {
                alert("Пожалуйста, укажите Ваш номер телефона, чтобы мы смогли позвонить Вам!");
            }
        } else {
            alert("Пожалуйста, дайте согласие на обработку ваших персональных данных.");
        }
    });



    //Модалки
    $('#bonus').click(function(){
        $(".intopModal-thanks").arcticmodal();
    });
    $('#consalt').click(function(){
        $(".intopModal-request").arcticmodal(arcticmodal_settings);
    });
    $('#program').click(function(){
        $('.modal-title').html($('#program').attr('data-h'));
        $(".intopModal-request").arcticmodal(arcticmodal_settings);
    });
    $('#bonus2').click(function(){
        $(".intopModal-thanks").arcticmodal(arcticmodal_settings);
    });
    $('#bonus3').click(function(){
        $(".intopModal-thanks").arcticmodal(arcticmodal_settings);
    });

    // $(".intopModal-request").arcticmodal(arcticmodal_settings);
    // $(".intopModal-privacy").arcticmodal(arcticmodal_settings);
    // $(".intopModal-alert").arcticmodal(arcticmodal_settings);
    // $(".intopModal-modal").arcticmodal(arcticmodal_settings);





    $(".request__link-privacy").click(function (event) {
        event.preventDefault();
    });
});

