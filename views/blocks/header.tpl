<header class="header">
    <div class="container">
        <div class="header__wrap">
            <div class="header__logo">
                <picture class="about__item-img">
                    <source media="(min-width: 768px)" srcset="../../img/svg/icon-logo_white.svg">
                    <img src="../../img/svg/icon-logo_blue.svg" alt="icon-logo">
                </picture>
            </div>
            <div class="header__content">
                <div class="header__contact">
                    <a href="{$phone->link}" class="header__phone">
                        <!-- <img src="../../img/svg/icon-phone.svg" alt="icon-phone"> -->
                        <svg width="18" height="19" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.96875 8.59625C6.04875 10.7188 7.785 12.455 9.91125 13.535L11.5612 11.8813C11.7675 11.675 12.0638 11.615 12.3225 11.6975C13.1625 11.975 14.0662 12.125 15 12.125C15.4163 12.125 15.75 12.4587 15.75 12.875V15.5C15.75 15.9163 15.4163 16.25 15 16.25C7.9575 16.25 2.25 10.5425 2.25 3.5C2.25 3.08375 2.5875 2.75 3 2.75H5.625C6.04125 2.75 6.375 3.08375 6.375 3.5C6.375 4.43375 6.525 5.3375 6.8025 6.1775C6.885 6.43625 6.825 6.7325 6.61875 6.93875L4.96875 8.59625Z"/>
                            </svg>
                        <span>{$phone->title}</span>
                    </a>
                </div>
                <div class="header__menu">
                    <ul class="menu__list">
                        <li class="menu__item"><a class="menu__item-link" href="#">Преимущества</a></li>
                        <li class="menu__item"><a class="menu__item-link" href="#">Сравнить</a></li>
                        <li class="menu__item"><a class="menu__item-link" href="#">Программы</a></li>
                        <li class="menu__item"><a class="menu__item-link" href="#">Тарифы</a></li>
                        <li class="menu__item"><a class="menu__item-link" href="#">О нас</a></li>
                        <li class="menu__item"><a class="menu__item-link" href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="header__menuClose">
                    <img src="../../img/svg/icon-close.svg" alt="icon-close">
                </div>
            </div>
            <div class="header__menuBurger">
                <img src="../../img/svg/icon-burger.svg" alt="icon-burger">
            </div>
        </div>
    </div>
</header>
