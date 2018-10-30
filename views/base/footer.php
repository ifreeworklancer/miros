<section id="checkout">
    <div class="container position-relative">
        <div class="row">
            <div class="col-sm-6 mx-auto text-white">
                <h2 id="checkout-title" class="section-title mb-5">
                    Связаться с нами
                </h2>
                <form action="/mail-send.php" id="form-checkout" method="post">
                    <div class="form-group mb-5">
                        <label for="user-name--checkout" class="label-placeholder">Ваше имя</label>
                        <input type="text" name="name" class="form-control" id="user-name--checkout" required>
                    </div>
                    <div class="form-group mb-5">
                        <label for="user-phone--checkout" class="label-placeholder">Ваш Телефон</label>
                        <input type="tel" name="phone" class="form-control" id="user-phone--checkout" required>
                    </div>
                    <div class="form-group mb-5">
                        <label for="user-email--checkout" class="label-placeholder">Ваш E-mail</label>
                        <input type="email" name="email" class="form-control" id="user-email--checkout" required>
                    </div>
                    <div class="purchased-wallet mb-5">
                    </div>
                    <input type="hidden" name="wallet">
                    <div class="text-center">
                        <button id="checkout-btn" class="btn btn-decor">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="decor-border"></div>
        <div class="decor-square"></div>
    </div>
</section>

</main>

<footer id="app-footer">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-2 d-flex justify-content-center mb-4 mb-sm-0">
                <a href="#" class="logo d-inline-block">
                    <img src="/images/icon/logo/logo.png" alt="">
                </a>
            </div>
            <div class="col-sm-10">
                <nav class="footer-menu mr-0 mr-xl-5 d-flex justify-content-center justify-content-sm-end">
                    <ul class="footer-menu-list list-unstyled d-inline-flex flex-column flex-sm-row align-items-center">
                        <li class="footer-menu-list-item">
                            <a href="/#stages" class="footer-menu-list-item__link scroll-link">
                                Как мы работаем
                            </a>
                        </li>
                        <li class="footer-menu-list-item">
                            <a href="/#presentation" class="footer-menu-list-item__link scroll-link">
                                Качество
                            </a>
                        </li>
                        <li class="footer-menu-list-item">
                            <a href="/#catalog" class="footer-menu-list-item__link scroll-link">
                                Каталог
                            </a>
                        </li>
                        <li class="footer-menu-list-item">
                            <a href="/#reviews" class="footer-menu-list-item__link scroll-link">
                                Отзывы
                            </a>
                        </li>
                        <li class="footer-menu-list-item">
                            <a href="/#app-footer" class="footer-menu-list-item__link scroll-link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row justify-content-center justify-content-sm-between align-items-center mt-5">
            <div class="col-sm-2 text-center p-0">
                <div class="footer-copyr-item">
                    &copy; <?= date('Y') ?> Все права защищены
                </div>
            </div>
            <div class="col-sm-2 my-4 my-sm-0">
                <div class="social-content">
                    <ul class="social-content-list list-unstyled d-flex justify-content-center">
                        <li class="social-content-list-item social-content-list-item--facebook mr-4">
                            <a href="#">
                                <svg width="20" height="20">
                                    <use xlink:href="#facebook-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-content-list-item social-content-list-item--instagram mr-4">
                            <a href="#">
                                <svg width="20" height="20">
                                    <use xlink:href="#instagram-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-content-list-item social-content-list-item--youtube">
                            <a href="#">
                                <svg width="20" height="20">
                                    <use xlink:href="#youtube-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 text-center p-0">
                <div class="footer-copyr-item">
                    Дизайн и разработка
                    <a href="https://impressionbureau.pro" target="_blank">Impression.Bureau</a><sub>2018</sub>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="/dist/app.js"></script>

</body>

</html>