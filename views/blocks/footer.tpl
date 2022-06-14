<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="footer__item footer__item-contact">
                <h1 class="footer__title title">Контакты</h1>
                <p class="footer__text">г. Краснодар, ул. Гаврилова, 12 (Центр)</p>
                <div class="footer__contact">
                    <a href="{$phone->link}" class="footer__phone">
                        <svg width="24" height="24" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.96875 8.59625C6.04875 10.7188 7.785 12.455 9.91125 13.535L11.5612 11.8813C11.7675 11.675 12.0638 11.615 12.3225 11.6975C13.1625 11.975 14.0662 12.125 15 12.125C15.4163 12.125 15.75 12.4587 15.75 12.875V15.5C15.75 15.9163 15.4163 16.25 15 16.25C7.9575 16.25 2.25 10.5425 2.25 3.5C2.25 3.08375 2.5875 2.75 3 2.75H5.625C6.04125 2.75 6.375 3.08375 6.375 3.5C6.375 4.43375 6.525 5.3375 6.8025 6.1775C6.885 6.43625 6.825 6.7325 6.61875 6.93875L4.96875 8.59625Z"/>
                        </svg>
                        <span>{$phone->title}</span>
                    </a>
                </div>
                <button id="recall" class="btn btn-default" data-h="Оставьте заявку и наш специалист перезвонит Вам" type="button">
                    <span class="btn__text">Перезвоните мне</span>
                </button>
            </div>
            <div class="footer__item footer__item-map">
                <div class="map" id="YMapsID" style="width: 100%; height: 100%;"></div>
            </div>  
        </div>
        <div class="footer__logo">
            <picture>
                <source media="(max-width: 900px)" srcset="/img/svg/logo_footer-mob.svg">
                <img class="footer__logo" src="/img/svg/logo_footer-desc.svg" alt="icon-logo">
            </picture>    
        </div>
    </div>
</footer>