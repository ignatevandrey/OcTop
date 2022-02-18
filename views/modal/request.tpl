{extends "modal/modal.tpl"}

{block main}
    <div class="modal__inner">
        <div class="mod-request__content">
            <h3 class="title modal-title">Оставить заявку</h3>
            <form class="request__form">
                <div class="request__fields">
                    <label class="request__field request__field-name">
                        <input class="request__input request__input-name" type="text" placeholder="Ваше имя">
                    </label>
                    <label class="request__field request__field-phone">
                        <input class="request__input request__input-phone" type="tel" name="phone"  placeholder="Номер телефона">
                    </label>
                    <label class="request__field request__field-comment">
                        <textarea class="request__input request__input-comment" placeholder="Комментарии"></textarea>
                    </label>
                    <input type="hidden" class="request__from" />
                </div>
                <label class="request__privacy">
                    <input class="request__checkbox request__checkbox-privacy" type="checkbox" checked>
                    <span class="request__agreement">Даю <span class="request__link request__link-privacy" data-modal="privacy">согласие на обработку персональных данных</span></span>
                </label>
                <button class="request__submit btn btn-default btn-main2-main2" type="button">
                    <span class="btn__text">оставить заявку</span>
                </button>
            </form>
        </div>
        <div class="mod-request__img">
            <picture>
                <source srcset="/img/modal/request.webp" type="image/webp" />
                <img class="image cover"
                    src="/img/modal/request.jpg"
                    alt="Оставить заявку"
                    width="274"
                    height="516"
                    loading="lazy"
                    decoding="async" />
            </picture>
        </div>
    </div>
{/block}
