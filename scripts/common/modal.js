import { windowHeight } from "./global";

export let arcticmodal_settings = {
    overlay: {
        css: { opacity: 0.3 }
    },
    beforeOpen(data, modal) {
        let modalParent = $(modal).parent();
        let maxHg = windowHeight() - modalParent.padding("top") - modalParent.padding("bottom");
        $(modal).css("max-height", maxHg);
    }
};

$(document).ready(function() {
    window.alert = function(content) {
        $(".intopModal-alert .modal__inner").html(content).parents(".intopModal-alert").arcticmodal(arcticmodal_settings);
    }

    $(window).resize(function () {
        arcticmodal_settings.beforeOpen(null, ".intopModal:visible");
    });

    $("[data-modal]").on (click , function (event) {
        event.preventDefault();

        let $modal = $(".intopModal-" + $(this).data("modal"));

        if ($modal.length > 0) {
            $modal.arcticmodal(arcticmodal_settings);
        }
    });
});
