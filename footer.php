
</main>


<!-- Footer -->
<footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-lg-4 col-md-6">
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/logo/black-logo.png" width="120" alt="Kinza">
                </div>
                <p class="fs-sm pb-lg-3 mb-4">Подпишитесь на нашу рассылку и получайте свежие новости о наших проектах, эксклюзивные предложения и многое другое. Оставайтесь на связи и будьте в числе первых, кто узнает обо всем самом важном!</p>
                <form class="needs-validation" novalidate="">
                    <label for="subscr-email" class="form-label">Подписывайтесь на нашу новостную рассылку</label>
                    <div class="input-group">
                        <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Ваш email" required="">
                        <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                        <div class="invalid-tooltip position-absolute top-100 start-0">Введите адрес электронной почты.</div>
                        <button type="submit" class="btn btn-primary">Подписаться</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                <div id="footer-links" class="row">
                    <div class="col-lg-4">
                        <h6 class="mb-2">Полезные ссылки</h6>
                        <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                            <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                <li class="nav-item"><a href="/" class="nav-link d-inline-block px-0 pt-1 pb-2">Главная</a></li>
                                <li class="nav-item"><a href="<?= esc_url(get_post_type_archive_link('projects')) ?>" class="nav-link d-inline-block px-0 pt-1 pb-2">Проекты</a></li>
                                <li class="nav-item"><a href="<?= get_permalink(get_page_by_path('contacts')->ID) ?>" class="nav-link d-inline-block px-0 pt-1 pb-2">Контакты</a></li>
                            </ul>
                            <ul class="nav flex-column mb-2 mb-lg-0">
                                <li class="nav-item"><a href="/" class="nav-link d-inline-block px-0 pt-1 pb-2">Условия использования</a></li>
                                <li class="nav-item"><a href="/" class="nav-link d-inline-block px-0 pt-1 pb-2">Политика конфиденциальности</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <h6 class="mb-2">Социальные сети</h6>
                        <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                            <ul class="nav flex-column mb-2 mb-lg-0">
                                <li class="nav-item"><a href="https://vk.com/club224388965" class="nav-link d-inline-block px-0 pt-1 pb-2" target="_blank">ВКонтакте</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                        <h6 class="mb-2">Связаться с нами</h6>
                        <a href="mailto:kinza-agency@ya.ru" class="fw-medium">kinza-agency@ya.ru</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
            © Kinza 2024.
        </p>
    </div>
</footer>


<!-- Back to top button -->
<a href="#top" class="btn-scroll-top" data-scroll="">
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Вверх</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>


<!-- Vendor Scripts -->
<script src="<?= get_template_directory_uri() ?>/assets/scripts/jarallax.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/lottie-player.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/swiper-bundle.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/lightgallery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/lg-video.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/imagesloaded.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/shuffle.min.js"></script>

<!-- Main Theme Script -->
<script src="<?= get_template_directory_uri() ?>/assets/scripts/theme.min.js"></script>
<div class="lg-container  " id="lg-container-1" tabindex="-1" aria-modal="true" role="dialog">
    <div id="lg-backdrop-1" class="lg-backdrop" style="transition-duration: 300ms;"></div>

    <div id="lg-outer-1" class="lg-outer lg-use-css3 lg-css3 lg-single-item lg-slide lg-grab">

        <div id="lg-content-1" class="lg-content">
            <div id="lg-inner-1" class="lg-inner" style="transition-timing-function: ease; transition-duration: 400ms;">
            </div>
            <button type="button" id="lg-prev-1" aria-label="Previous slide" class="lg-prev lg-icon">  </button>
            <button type="button" id="lg-next-1" aria-label="Next slide" class="lg-next lg-icon">  </button>
        </div>
        <div id="lg-toolbar-1" class="lg-toolbar lg-group">

            <button type="button" aria-label="Close gallery" id="lg-close-1" class="lg-close lg-icon"></button>
            <div class="lg-counter" role="status" aria-live="polite">
                <span id="lg-counter-current-1" class="lg-counter-current">1 </span> /
                <span id="lg-counter-all-1" class="lg-counter-all">1 </span></div></div>

        <div id="lg-components-1" class="lg-components">
            <div class="lg-sub-html" role="status" aria-live="polite"></div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>