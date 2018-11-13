<div class="leaving" style="display: none">
    <div class="leaving-container">
        <h2>Уже уходите?</h2>
        <p>Оформите любую покупку на сайте и получите абсолютно бесплатно брелок!</p>

        <form action="/mail-send.php" method="post" id="brelok">
            <input type="hidden" name="brelok" value="1">
            <div class="form-group mb-4">
                <label for="user-name" class="label-placeholder">Ваше имя</label>
                <input type="text" name="name" class="form-control" id="user-name" autocomplete="off" required>
            </div>
            <div class="form-group mb-4">
                <label for="user-phone" class="label-placeholder">Ваш Телефон</label>
                <input type="tel" name="phone" class="form-control" id="user-phone" autocomplete="off" required>
            </div>
            <div class="form-group mb-4">
                <label for="user-email" class="label-placeholder">Ваш E-mail</label>
                <input type="email" name="email" class="form-control" id="user-email" autocomplete="off" required>
            </div>
            <div class="mb-4 fc-wrapper pb-2">
                <select name="city" class="form-control">
                    <option value="" disabled selected>Ваш город</option>
					<?php foreach ((new \app\NovaPoshta())->getCities()['data'] as $city) : ?>
                        <option value="<?= $city['Ref'] ?>">
							<?= $city['DescriptionRu'] ?>
                        </option>
					<?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4 fc-wrapper pb-2 warehouses" style="display: none">
                <select name="warehouses" class="form-control"></select>
            </div>
            <div>
                <button id="checkout-btn" class="btn btn-decor text-white">
                    Получить брелок
                </button>
            </div>
        </form>
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

        <div class="row header-banner-item">
            <div class="col-lg-6 p-0">
                <div class="text-white">
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

            <div class="col-lg-5 text-white mt-5 mt-md-0">
                <h5 class="section-title">
                    Заполните форму и получити PDF в подарок.
                </h5>
                <p>«Правила ухода за кожаными изделиями — 7 способов не испортить вещь.»</p>
                <form action="/mail-send.php" method="post" id="leadmagnit">
                    <input type="hidden" name="pdf" value="1">
                    <div class="form-group mb-4">
                        <label for="user-name--checkout" class="label-placeholder">Ваше имя</label>
                        <input type="text" name="name" class="form-control" id="user-name--checkout" autocomplete="off"
                               required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-phone--checkout" class="label-placeholder">Ваш Телефон</label>
                        <input type="tel" name="phone" class="form-control" id="user-phone--checkout" autocomplete="off"
                               required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-email--checkout" class="label-placeholder">Ваш E-mail</label>
                        <input type="email" name="email" class="form-control" id="user-email--checkout"
                               autocomplete="off" required>
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
    <div class="header-banner-logo d-none d-sm-block"
         style="background-image: url('/images/icon/logo/logo-big.png');"></div>
</section>