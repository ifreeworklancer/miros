<!-- Heaeder Banner -->
<div class="leaving" style="display: none">
    <div class="leaving-container">
        <h2>Получите подарок!</h2>
        <p>Оформите любую покупку на сайте и получите абсолютно бесплатно брелок!</p>

        <div>
            <a href="#" class="btn btn-decor" data-leaving-close>
                Вернуться
            </a>
        </div>
    </div>
</div>
<div class="leaving-outer" style="display: none"></div>

<section id="header-banner" style="background-image: url('/images/bg/header-banner-bg.jpg');">
    <div class="video-container" data-src="/video/miros.mp4"></div>

    <div class="container h-100 d-flex flex-column justify-content-center position-relative">
        <div class="personage" data-paroller-factor="0.1" data-paroller-type="foreground"
             data-paroller-direction="vertical">
            <img src="/images/content/man_Miros.png" alt="">
        </div>

        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="header-banner-item text-white">
                    <h1 class="section-title text-uppercase">
                        Кожаные кошельки<br>ручной работы
                    </h1>
                    <p class="lead-md my-4">
                        Пожизненная гарантия.<br>
                        Именная гравировка в подарок.
                    </p>
                    <a href="#catalog" class="btn btn-decor scroll-link">
                        в каталог
                    </a>
                </div>
            </div>

            <div class="col-lg-5">
                <h5 class="section-title mb-3 mt-5 text-white">
                    Заполни форму и получи PDF по уходу за кожанными изделиями БЕСПЛАТНО!
                </h5>
                <form action="/mail-send.php" method="post" id="leadmagnit">
                    <input type="hidden" name="leadmagnit" value="1">
                    <div class="form-group mb-4">
                        <label for="user-name--checkout" class="label-placeholder">Ваше имя</label>
                        <input type="text" name="name" class="form-control" id="user-name--checkout" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-phone--checkout" class="label-placeholder">Ваш Телефон</label>
                        <input type="tel" name="phone" class="form-control" id="user-phone--checkout" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-email--checkout" class="label-placeholder">Ваш E-mail</label>
                        <input type="email" name="email" class="form-control" id="user-email--checkout" autocomplete="off" required>
                    </div>
                    <div>
                        <button id="checkout-btn" class="btn btn-decor">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-banner-footer d-flex justify-content-center justify-content-sm-end">
            <div class="social-content d-flex">
                <div class="social-content-title mr-3 mr-sm-5 text-white">
                    Мы в соц.медиа
                </div>
                <ul class="social-content-list list-unstyled d-flex">
                    <li class="social-content-list-item social-content-list-item--facebook mr-4">
                        <a href="https://www.facebook.com/walletsmiros/" target="_blank">
                            <svg width="20" height="20">
                                <use xlink:href="#facebook-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="social-content-list-item social-content-list-item--instagram mr-4">
                        <a href="https://www.instagram.com/miros_ua/" target="_blank">
                            <svg width="20" height="20">
                                <use xlink:href="#instagram-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="social-content-list-item social-content-list-item--youtube">
                        <a href="https://www.youtube.com/channel/UCcml3jMc5inyOL8xc7z3UjQ" target="_blank">
                            <svg width="20" height="20">
                                <use xlink:href="#youtube-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--
    <div class="header-banner-slider">
        <div class="header-banner-slider-item">
            <div class="header-banner-slider-item-img" style="background-image: url('images/content/header-banner/header-banner-item-1.jpg');"></div>
            <div class="header-banner-slider-item-description">
                <h3 class="header-banner-slider-item-description-title">Нанесём оригинальную гравировку</h3>
                <a href="#" class="header-banner-slider-item-description-info scroll-link">Перейти в конструктор</a>
            </div>
        </div>
        </div>
        <div class="slider-nav d-flex">
            <div class="slider-nav-num d-flex mr-3 mr-xl-4">
                <div class="slider-nav-num-item slider-nav-num-item--index slider-nav-num-index--header-banner"></div>
                <div class="slider-nav-num-item slider-nav-num-item--last slider-nav-num-last--header-banner"></div>
            </div>
            <div class="slider-nav-arrow d-flex">
                <div class="slider-nav-arrow-item slider-nav-arrow-prev slider-nav-arrow-prev--header-banner mr-3">
                    <svg width="25" height="20">
                        <use xlink:href="#arrow_prev-icon"></use>
                    </svg>
                </div>
                <div class="slider-nav-arrow-item slider-nav-arrow-next slider-nav-arrow-next--header-banner">
                    <svg width="25" height="20">
                        <use xlink:href="#arrow_next-icon"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    -->
    <div class="header-banner-logo d-none d-sm-block"
         style="background-image: url('/images/icon/logo/logo-big.png');"></div>
</section>